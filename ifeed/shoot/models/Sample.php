<?php

namespace ifeed\shoot\models;

use Yii;
use yii\helpers\ArrayHelper;

class Sample extends BaseModel
{
	public $sortInfos;
    public $siteCode;
    public $picture;
    
    public static function tableName()
    {
        return '{{%sample}}';
    }

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
			[['picture', 'site_code', 'sort', 'description'], 'safe'],
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

	protected function _formatInfo($info)
	{
        $condition = $this->attachmentWhere('sample', 'picture', false); 
        $condition['info_id'] = $info['id'];
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $pictureInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $pictureInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->picture = $pictureInfos;

		return $info;
	}

    public function getIndexInfos()
    {
        $datas = [];
        foreach ($this->sortInfos as $sort => $sInfo) {
            $where = ['status' => 1, 'site_code' => $this->siteCode, 'sort' => $sort];
            $orderBy = ['orderlist' => SORT_DESC];
            $infos = $this->getInfos(['where' => $where, 'limit' => 4, 'orderBy' => $orderBy]);
            $datas[$sort]['name'] = $sInfo['name'];
            $datas[$sort]['brief'] = $sort;
            $datas[$sort]['infos'] = $infos;
        }

        return $datas;
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
        return Yii::getAlias('@shoot.ifeedurl') . '/caseshow_' . $this->id . '.html';
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'atag', 'urlType' => 'inline', 'urlMethod' => 'nameByUrl'],
            'title' => ['type' => 'common'],
			'site_code' => ['type' => 'key'],
			'sort' => ['type' => 'point', 'table' => 'shoot-sort', 'pointField' => 'code'],
            'picture' => ['type' => 'imgtag'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'description' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
			'status' => ['type' => 'key'],
        ];
    }
}
