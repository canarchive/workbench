<?php

namespace spread\models\kl;

use Yii;
use common\models\SpreadModel;

class KlProduct extends SpreadModel
{
    private $_productInfos;

    public static function getDb()
    {
        return Yii::$app->dbSpread;
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
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => '预约ID',
            'product' => '产品',
            'product_num' => '产品数量',
            'coupon' => '优惠券',
            'coupon_status' => '优惠券状态',
            'status' => '状态',
            'created_at' => '预约时间',
            'update_at' => '更新时间',
        ];
    }

    public function getCouponStatusInfos()
    {
        $datas = [
            '0' => '未使用',
            '1' => '已使用',
        ];
        return $datas;
    }

    public function getProductInfos()
    {

        $datas = [
            'jsq' => '净水器',
            'hwlyz' => '恒温淋浴柱',
            'lyz' => '淋浴柱',
            'zbg' => 'C³智能坐便盖',
            'ftzbq' => '分体坐便器',
            'ltzbq' => '连体坐便器',
            'ysg' => '浴室柜',
            'jnj' => '净暖机',
        ];
        return $datas;
    }

    public function getCouponInfos()
    {
        $datas = [
            '1' => ['code' => '净水器', 'price' => '100'],
            '2' => ['code' => '恒温淋浴柱', 'price' => '200'],
            '3' => ['code' => '淋浴柱', 'price' => '100'],
            '4' => ['code' => 'C³智能坐便盖', 'price' => '200'],
            '5' => ['code' => '分体坐便器', 'price' => '100'],
            '6' => ['code' => '连体坐便器', 'price' => '200'],
            '7' => ['code' => '浴室柜', 'price' => '100'],
            '8' => ['code' => '净暖机', 'price' => '200'],
        ];
        return $datas;
    }

    public function getBookInfo()
    {
        if (empty($this->book_id)) {
            return [];
        }

        $model = new KlBook();
        $info = $model->find()->where(['id' => $this->book_id])->one();
        return $info;
    }
}
