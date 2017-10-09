<?php

namespace baseapp\shop\models;

trait SkuTrait
{
    public static function tableName()
    {
        return '{{%sku}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['is_require', 'orderlist', 'status'], 'default', 'value' => 0],
			[['item_value'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'orderlist' => '排序',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'item_value' => '描述',
            'status' => '状态',
			'is_require' => '是否必须',
        ];
    }

	public function getIsRequireInfos()
	{
		return [
			'0' => '非必选项',
			'1' => '必选项',
		];
	}

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'item_value' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
			'status' => ['type' => 'key'],
			'is_require' => ['type' => 'key'],
        ];
    }
}
