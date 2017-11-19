<?php

namespace ifeed\shoot\models;

use Yii;
use yii\helpers\ArrayHelper;

class Infotmp extends BaseModel
{
	public $sortInfos;
    public $siteCode;
    public $picture;

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['orderlist'], 'integer'],
			[['orderlist', 'status'], 'default', 'value' => '0'],
			//[['picture', 'site_code', 'sort', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '案例ID',
            'name' => '名称',
			'site_code' => '站点',
			'sort' => '类别',
            'thumb' => '缩略图',
            'picture' => '设计图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

        if (!is_null($this->picture)) {
             $isMasterDatas = $this->_updateMulAttachment('sample', 'picture');
        }

		return true;
	}	

	protected function _formatInfos($infos)
	{
		foreach ($infos as $key => & $info) {
			//$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}
        return $infos;
    }

    protected function getThumb()
    {
		return $this->_getThumb('sample', 'picture');
    }

    public function nameByUrl()
    {
        return Yii::getAlias('@infotmp.ifeedurl') . '/ishow_' . $this->id . '.html';
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'atag', 'urlType' => 'inline', 'urlMethod' => 'nameByUrl'],
            'sourceUrl' => ['type' => 'inline', 'formatView' => 'raw', 'method' => 'getSourceUrl'],
			'thumb' => ['type' => 'inline', 'formatView' => 'raw', 'method' => 'showThumb'],
            //'title' => ['type' => 'common'],
			//'site_code' => ['type' => 'key'],
			'category_code' => ['type' => 'point', 'table' => 'shoot-category', 'pointField' => 'code'],
            'picture' => ['type' => 'imgtag'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'description' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
			'status' => ['type' => 'key'],
        ];
    }

	public function showThumb()
	{
		if (empty($this->thumb)) {
			return '';
		}
		return "<img src='{$this->thumb}' width='200px' height='100px' />";
	}

    public function getSourceUrl($view = null)
    {
        $paths = [
            '0223' => 'news',
            'sy' => 'shwj',
            'ch' => 'post',
        ];
        $url = $this->sourceDomain;
        if ($this->source_code == 'sxdt') {
			$url .= "news_show.asp?id={$this->source_id}#content";
        } else {
            $url .= "{$this->source_code}/{$paths[$this->source_code]}/{$this->source_id}.html";
        }
        $rUrl = str_replace($this->sourceDomain, Yii::getAlias('@r.infotmp.ifeedurl') . '/', $url);
        return "<a href='{$url}' target='_blank'>源页面</a>--<a href='{$rUrl}' target='_blank'>模拟跳转</a>";
    }

    public function getSourceCodeInfos()
    {
        return [
            'ch' => '艺生术活',
            '0223' => '摄影作品',
            'sy' => '人体艺术',
            'sxdt' => '首席动态',
        ];
    }

	public function getPreNext($isPre = true)
	{
		$info = [];
		$cCode = $this->category_code;
		$idWhere = $isPre ? ['<', 'id', $this->id] : ['>', 'id', $this->id];
		$idOrder = $isPre ? 'id DESC' : 'id ASC';
		while (!empty($cCode) && empty($info)) {
    		$where = [
    			'and', 
    			['category_code' => $cCode],
    			$idWhere,
    		];
            $info = $this->find()->select('id, name, created_at, category_code')->where($where)->orderBy($idOrder)->one();
			if (empty($info)) {
				$pCate = $this->getPointModel('ifeed-categorytmp')->getData($cCode);
				$cCode = isset($pCate['parent_code']) ? $pCate['parent_code'] : '';
			}
		}
		if (empty($info)) {
			$info = [
				'name' => '没有了',
				'url' => 'javascript:void(0)',
			];
		}
		return $info;
	}

	public function getRelateInfos($limit)
	{
		$cInfo = $this->getPointModel('ifeed-categorytmp')->getData($this->category_code);
		$infos = $cInfo->getListtmpInfos($limit);
		$infosExt = [];
		if (count($infos) < $limit) {
			$infosExt = $this->getPointModel('ifeed-categorytmp')->getData($cInfo['parent_code'])->getListtmpInfos($limit - count($infos));
		}
		return array_merge($infos, $infosExt);
	}

	public function getUrl()
	{
        return Yii::getAlias('@infotmp.ifeedurl') . '/ishow_' . $this->id . '.html';
	}

	public function formatThumb()
	{
		$infos = $this->getInfos(['where' => ['status' => 1], 'limit' => 500]);
		foreach ($infos as $info) {
			$createdAt = strtotime($info->code) + rand(0, 86400 - 1);
			$info->created_at = $createdAt;
			$info->updated_at = $createdAt;
			if (!empty($info->thumb)) {
				$info->thumb = str_replace('uploadFile', 'http://upthird.xiaomishijia.cn/shoot/upcms/sxdt', $info->thumb);
			}
			$info->description = $this->dealThumb($info->description, $info);
			$info->content = $this->dealThumb($info->content, $info);
			echo $info->thumb . '<br />';

			$info->status = 2;
			//print_r($info);
			$info->update(false);
		}
		exit();
	}

	public function dealThumb($content, $info)
	{
		$pattern = '@<[img|IMG].*src="(?P<thumb>.*)"@Us';
		preg_match_all($pattern, $content, $url);
		$content = str_replace('_x000d_\n', '', $content);
		$thumb = $url['thumb'];
		if (empty($thumb)) {
			return $content;
		}

		$datas = [];
		foreach ($thumb as $source) {
			$target = strtolower($source);
			$target = str_replace(['uploadfile', 'upload'], [$info->source_big, $info->source_big], $target);
			$target = 'http://upthird.xiaomishijia.cn/shoot/upcms/' . $target;
			$datas[$source] = $target;
		}
		$content = str_replace(array_keys($datas), array_values($datas), $content);
		if (empty($info->thumb)) {
			$info->thumb = array_shift($datas);
		}
		return $content;
	}
}
