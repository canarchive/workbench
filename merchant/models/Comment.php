<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Comment extends MerchantModel
{
	public $totalScore;

    public static function tableName()
    {
        return '{{%comment}}';
    }

    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    public function rules()
    {
        return [
            [['content', 'user_id', 'merchant_id'], 'required'],
            [['star'], 'default', 'value' => 0],
            [['city_code'], 'safe'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
			'city_code' => '城市代码',
			'merchant_id' => '商家',
			'star' => '评分',
            'content' => '内容',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
        return [];
	}	

	public function beforeSave($insert)
	{
		if ($insert) {
            $this->city_code = empty($this->city_code) ? $this->merchantInfo['city_code'] : $this->city_code;
		}

		return true;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);
		if ($insert) {
			//$this->merchantInfo->updateNum('comment', 'add');
		}

		return true;
	}	

	public function afterDelete()
	{
		//$this->merchantInfo->updateNum('comment', 'minus');
        return true;
	}

	public function getInfos($where, $limit = 10)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['id' => SORT_DESC])->limit($limit)->all();
		$ownerModel = new Owner();
		foreach ($infos as $key => & $info) {
			$info['totalScore'] = max($info['design_star'], $info['execution_star'], $info['service_star']);
		}

        //$cache->set($keyCache, $infos);
		//print_r($infos);
		return $infos;
	}		
}
