<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
use yii\helpers\ArrayHelper;

class Article extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%article}}';
    }

    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['orderlist', 'thumb', 'status'], 'default', 'value' => 0],
			[['description', 'content', 'keywords', 'url', 'editor', 'copyfrom', 'template'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '文章ID',
            'category_id' => '栏目ID',
            'name' => '标题',
            'thumb' => '缩略图',
            'keywords' => '关键字',
            'description' => '描述',
            'url' => '访问地址',
            'orderlist' => '排序',
            'editor' => '编辑',
            'copyfrom' => '来源',
            'content' => '内容',
            'template' => '使用模板',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '不显示',
			'1' => '显示',
		];	
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('article', $fields);

		return true;
	}	
}
