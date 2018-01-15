<?php

namespace baseapp\common\models;

trait PositionTrait
{
    public static function tableName()
    {
        return '{{%position}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'sort'], 'required'],
            [['orderlist', 'status', 'picture', 'picture_mobile', 'picture_ext'], 'default', 'value' => 0],
			[['description', 'url', 'name_ext'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'name_ext' => '名称-预留',
			'sort' => '类型',
			'url' => 'URL',
			'orderlist' => '排序',
			'picture' => '图片',
			'picture_mobile' => '图片-H5',
			'picture_ext' => '图片-预留',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'description' => '描述',
            'status' => '状态',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function getSortInfos()
	{
		$datas = [
		];
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['picture', 'picture_mobile', 'picture_ext'];
		$this->_updateSingleAttachment('position', $fields);

		return true;
	}	
}
