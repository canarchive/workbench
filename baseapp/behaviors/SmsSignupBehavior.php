<?php

namespace baseapp\behaviors;

use Yii;
use yii\base\Behavior;
use common\components\sms\Smser;

class SmsSignupBehavior extends Behavior
{
    public function sendSms($merchantInfo, $mobile)
    {
		$message = isset($merchantInfo['msg']) ? $merchantInfo['msg'] : '';
		if (empty($message)) {
            $siteName = Yii::$app->params['siteNameBase'];
            $hotline = Yii::$app->params['siteHotline'];
            $message = "您已成功预约，装修顾问会在15分钟内回访了解您的具体装修需求，请保持您的电话畅通，详情咨询{$hotline}【{$siteName}】";
		}

        $smser = new Smser();
        $smser->send($mobile, $message, 'decoration_signup');
        
        return true;
    }

    public function sendSmsService($merchantInfo, $data, $employee)
    {
		if (empty($merchantInfo) || $employee['status_sendmsg'] == 0) {
			return ;
		}

        $mobile = $employee['mobile'];
		$signStr = !isset($merchantInfo->name) ? '' : "【{$merchantInfo->name}】";
		$content = "有业主：{$data['name']}，电话：{$data['mobile']}，咨询您公司的家装业务，请立即回访【兔班长装修网】";

        $smser = new Smser();
        $smser->send($mobile, $content, 'decoration_service');
		if ($employee['status_sendmsg'] == 2 && !empty($employee['mobile_ext'])) {
            $smser->send($employee['mobile_ext'], $content, 'decoration_service');
		}
        
        return true;
    }

    public function sendSmsValid($data, $userInfo)
    {
        $merchantId = $data->merchant_id;
        if (empty($merchantId)) {
            return ;
        }
        $noticeMobiles = [
            '667' => '17316278360',
            '671' => '15110125766',
			'682' => '18600063835',
			'669' => '13717716106',//'13581522034',
			'684' => '18614242810',
			'686' => '15801558634',
        ];
        $mobile = isset($noticeMobiles[$merchantId]) ? $noticeMobiles[$merchantId] : false;
        if (empty($mobile)) {
            return ;
        }

        $houseInfo = $this->_newModel('house', true)->findOne($data->house_id);
        if (empty($houseInfo)) {
            return ;
        }
        $houseType = isset($houseInfo->houseTypeInfos[$houseInfo->house_type]) ? $houseInfo->houseTypeInfos[$houseInfo->house_type] : '';
        $houseSort = isset($houseInfo->houseSortInfos[$houseInfo->house_sort]) ? $houseInfo->houseSortInfos[$houseInfo->house_sort] : '';
		$content = "业主信息，姓名：{$userInfo['name']};电话：{$userInfo['mobile']};地址：{$houseInfo['region']} {$houseInfo['address']};面积：{$houseInfo->house_area};户型：{$houseType};房屋类别：{$houseSort}。请及时查看数据详情，并做好回访【兔班长装修网】";

        $smser = new Smser();
        $smser->send($mobile, $content, 'decoration_valid');
        return ;
    }
}
