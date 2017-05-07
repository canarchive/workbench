<?php

namespace spread\controllers;

use Yii;
use spread\components\Controller as SpreadController;
use spread\models\kl\KlBook;
use spread\models\kl\KlProduct;

class klController extends SpreadController
{
    public $mobile;

    public function actionIndex()
    {
        return $this->render('@spread/views/kl/kele');
	}

    public function actionSignup()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $bInfo = $this->_signup();
        if ($bInfo['status'] != 200) {
            return $bInfo;
        }
        $bInfo = $bInfo['info'];
        $products = Yii::$app->request->post('products');
        if (!is_array($products)) {
            return ['status' => 200, 'message' => 'OK'];
        }

        $model = new KlProduct();
        $pInfos = $model->find()->where(['book_id' => $bInfo['id']])->indexBy('product')->all();
        foreach ($products as $product) {
            $pCode = $product['name'];
            if (isset($pInfos[$pCode])) {
                $info = $pInfos[$pCode];
                $info->product_num = intval($product['num']);
                $info->status = 1;
                $info->update(false);
            } else {
                $data = [
                    'book_id' => $bInfo['id'],
                    'product' => $pCode,
                    'product_num' => intval($product['num']),
                    'status' => 1,
                ];
                $new = new KlProduct($data);
                $new->insert(false);
            }
        }
        return ['status' => 200, 'message' => 'OK'];
    }

    public function actionCoupon()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $bInfo = $this->_signup();
        if ($bInfo['status'] == 400) {
            return $bInfo;
        }
        $bInfo = $bInfo['info'];

        $klProduct = new KlProduct();
        $pInfos = $klProduct->find()->where(['book_id' => $bInfo['id']])->indexBy('product')->all();
        $couponInfos = $klProduct->couponInfos;
        $cards = Yii::$app->request->post('cards');
        $cards = explode(',', $cards);
        foreach ($cards as $card) {
            $card = intval($card);
            $cInfo = isset($couponInfos[$card]) ? $klProduct->couponInfos[$card] : false;
            if (empty($cInfo)) {
                continue;
            }
            $pCode = $cInfo['code'];
            
            if (isset($pInfos[$pCode])) {
                $info = $pInfos[$pCode];
                $info->coupon = $cInfo['price'];
                $info->status = 1;
                $info->update(false);
            } else {
                $data = [
                    'book_id' => $bInfo['id'],
                    'product' => $pCode,
                    'coupon' => $cInfo['price'],
                    'status' => 1,
                ];
                $new = new KlProduct($data);
                $new->insert(false);
            }
        }

        return ['status' => 200, 'message' => 'OK'];
    }

    protected function _signup($isCoupon = false)
    {
        $valid = $this->_validateMobile();
        if ($valid !== true) {
            return $valid;
        }

        $klBook = new KlBook();

        $address = Yii::$app->request->post('address', '');
        $date = Yii::$app->request->post('date', 0);

        $bInfo = $klBook->find()->where(['mobile' => $this->mobile])->one();
        if (empty($bInfo)) {
            $data = [
                'mobile' => $this->mobile,
                'address' => $address,
                'service_at' => strtotime($date),
            ];
            $new = new KlBook($data);
            $new->insert(false);
            $bInfo = $new;
        }
        return ['status' => 200, 'info' => $bInfo];
    }

    protected function _validateMobile()
    {
        $this->mobile = Yii::$app->request->post('phone');
        $validator = new \common\validators\MobileValidator();
        $valid =  $validator->validate($this->mobile);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '手机号格式有误'];
        }

        return true;
    }
}
