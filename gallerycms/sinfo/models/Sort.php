<?php

namespace gallerycms\sinfo\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;
use gallerycms\sinfo\models\SinfoTrait;

class Sort extends GallerycmsModel
{
    use SinfoTrait;
    
    public static function tableName()
    {
        return '{{%sort}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['status'], 'default', 'value' => '0'],
			[['description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'description' => '描述',
            'status' => '是否显示',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}	
}
