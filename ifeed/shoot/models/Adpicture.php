<?php

namespace ifeed\shoot\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\IfeedModel;

class Adpicture extends IfeedModel
{
    use ModelTrait;
    
    public static function tableName()
    {
        return '{{%adpicture}}';
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
			[['orderlist', 'status', 'picture', 'thumb'], 'default', 'value' => '0'],
			[['url', 'name', 'name_ext', 'site_code', 'position', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'site_code' => '所属站点',
            'page' => '所在页面',
            'url' => '链接',
            'thumb' => '广告图',
            'picture' => '配图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    protected function getPositionInfos()
    {
		$datas = [
			'slide-pc' => 'PC端banner',
			'slide-mobile' => '移动端banner',
		];
		return $datas;
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('sample', $fields);

		return true;
	}	

    protected function _formatInfos($infos)
    {
        foreach ($infos as $key => & $info) {
            $info = $this->_formatInfo($info);
        }
        return $infos;
    }

	protected function _formatInfo($info)
	{
		$info['thumb'] = $info->getAttachmentUrl($info['thumb']);

		return $info;
	}

    public function beforeDelete()
    {
        return true;
    }
}
