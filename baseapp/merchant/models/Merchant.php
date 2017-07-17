<?php

namespace baseapp\merchant\models;

use Yii;

class Merchant extends MerchantModel
{
    public static function tableName()
    {
        return '{{%merchant}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'city_code'], 'required'],
            [['orderlist'], 'integer'],
            [['orderlist'], 'default', 'value' => '0'],
            [['status', 'region', 'msg', 'homeurl', 'name_full', 'sort', 'hotline', 'postcode', 'brief', 'address', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'name_full' => '全称',
            'city_code' => '分站代码',
            'sort' => '类别',
            'orderlist' => '排序',
            'hotline' => '电话',
            'postcode' => '邮编',
            'address' => '地址',
            'breif' => '简介',
			'msg' => '通知短信',
			'homeurl' => '官网地址',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '关注',
            '1' => 'SEM托管合作',
            '2' => 'CPA合作',
            '3' => 'CPS合作',
			'99' => '暂停合作',
        ];
        return $datas;
    }

    protected function getSortInfos()
    {
		return require(Yii::getAlias('@baseapp/config/params-sort-local.php'));
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        return true;
    }
}
