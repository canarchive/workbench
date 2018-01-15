<?php

namespace spread\models\third;

use Yii;
use common\models\SpreadModel;

class KlBook extends SpreadModel
{
    private $_productInfos;
    public $couponData;

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

    public function scenarios()
    {
        return [
            'create' => ['mobile', 'service_at', 'address', 'status'],
            'update' => ['service_at', 'address', 'status', 'couponData'],
        ];
    }

    public function rules()
    {
        return [
            [['service_at'], 'filter', 'filter' => function($value) {
                return strtotime($value);
            }],
            [['address', 'status', 'couponData'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mobile' => '手机号',
            'service_at' => '客服ID',
            'client_type' => '客户端类型',
            'address' => '预装地址',
            'product' => '产品',
            'coupon' => '优惠券',
            'service_at' => '预装时间',
            'status' => '状态',
            'created_at' => '预约时间',
            'update_at' => '更新时间',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        var_dump($this->couponData);
        if (!is_array($this->couponData) || empty($this->couponData)) {
            return true;
        }

        $modelProduct = new KlProduct();
        foreach ($this->couponData as $id => $cData) {
            $info = $modelProduct->findOne($id);
            if (empty($info) || $info['book_id'] != $this->id) {
                continue;
            }
            $info->coupon_status = intval($cData);
            $info->update(false);
        }

        return true;
    }

    public function getCouponInfo()
    {
        $infos = $this->getProductInfos();
        $str = '';
        foreach ($infos as $info) {
            if (empty($info['coupon'])) {
                continue;
            }

            $str .= $info['product'] . '-' . $info['coupon'] . ' 元优惠券 (' . $info['coupon_status'] . ')<br />';
        }
        return $str;
    }

    public function getProductInfo()
    {
        $infos = $this->getProductInfos();
        $str = '';
        foreach ($infos as $info) {
            if ($info['product_num'] < 1) {
                continue;
            }
            $str .= $info['product'] . ' (' . $info['product_num'] . ' 个)<br />';
        }
        return $str;
    }

    public function getProductInfos()
    {
        if (!is_null($this->_productInfos)) {
            return $this->_productInfos;
        }

        $model = new KlProduct();
        $infos = $model->find()->where(['book_id' => $this->id])->all();
        $this->_productInfos = [];
        foreach ($infos as $info) {
            $info['coupon_status'] = $model->couponStatusInfos[$info['coupon_status']];
            $this->_productInfos[$info['id']] = $info;
        }
        return $this->_productInfos;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '未完成',
            '1' => '已完成',
            '99' => '已取消',
        ];
        return $datas;
    }
}
