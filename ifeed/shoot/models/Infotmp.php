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

    public function getSourceUrl($view = null)
    {
        $paths = [
            '0223' => 'news',
            'sy' => 'post',
            'ch' => 'post',
        ];
        $url = $this->sourceDomain;
        if ($this->source_code == 'sxdt') {

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
}
