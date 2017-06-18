<?php

namespace baseapp\behaviors;

use Yii;
use yii\base\Behavior;
use common\components\sms\Smser;

class SmsBehavior extends Behavior
{
    public function sendSmsBase($mobile, $content, $sort)
    {
        $smser = new Smser();
        $smser->send($mobile, $content, 'decoration_valid');
        return true;
    }

    public function sendSmsCode($mobile, $sort)
    {
        $smser = new Smser();
        $smser->send($mobile, $sort);
        return true;
    }

    public function sendSms($merchantInfo, $mobile)
    {
		$message = isset($merchantInfo['msg']) ? $merchantInfo['msg'] : '';
		if (empty($message)) {
            $siteName = Yii::$app->params['siteNameBase'];
            $hotline = Yii::$app->params['siteHotline'];
            $message = "您已成功预约，装修顾问会在15分钟内回访了解您的具体装修需求，请保持您的电话畅通，详情咨询{$hotline}【{$siteName}】";
		}

        return $this->sendSmsBase($mobile, $message, 'decoration_signup');
    }

    public function sendSmsService($merchantInfo, $data, $employee)
    {
		if (empty($merchantInfo) || $employee['status_sendmsg'] == 0) {
			return ;
		}

        $mobile = $employee['mobile'];
		$signStr = !isset($merchantInfo->name) ? '' : "【{$merchantInfo->name}】";
		$content = "有业主：{$data['name']}，电话：{$data['mobile']}，咨询您公司的家装业务，请立即回访【兔班长装修网】";

        $this->sendSmsBase($mobile, $content, 'decoration_service');
		if ($employee['status_sendmsg'] == 2 && !empty($employee['mobile_ext'])) {
            $this->sendSmsBase($employee['mobile_ext'], $content, 'decoration_service');
		}
        
        return true;
    }
}
