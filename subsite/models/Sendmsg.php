<?php

namespace subsite\models;

use Yii;
use common\models\BaseModelNotable;
use subsite\decoration\models\Dispatch;
use subsite\decoration\models\UserMerchant;

class Sendmsg extends BaseModelNotable
{
    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['sms']);
    }

    public function dispatchSend($id)
    {
        $model = new Dispatch();
        $info = $model->getInfo($id);
        if (empty($info)) {
            return ['status' => 400, 'message' => '信息有误'];
        }
        $mModel = new UserMerchant();
        $merchantInfos = $mModel->getInfos(['where' => ['mobile' => $info['mobile'], 'status' => '']]);
        if (empty($merchantInfos)) {
            return ['status' => 400, 'message' => '商家有误'];
        }
        $info['sendmsg_at'] = Yii::$app->params['currentTime'];
        $info->update(false);

        $mStr = '';
        foreach ($merchantInfos as $mInfo) {
            if ($mInfo['sendmsg_at'] > 0) {
                continue;
            }
            $mStr .= $mInfo->getPointName('merchant', $mInfo->merchant_id);
            $mInfo['sendmsg_at'] = Yii::$app->params['currentTime'];
            $mInfo->update(false);
        }
        if (empty($mStr)) {
            return ['status' => 400, 'message' => '短信已发送'];
        }

        return $this->_sendSms($info['mobile'], $mStr);
    }

    public function merchantSend($id)
    {
        $mModel = new UserMerchant();
        $info = $mModel->getInfo($id);
        if (empty($info)) {
            return ['status' => 400, 'message' => '商家有误'];
        }
        if ($info['sendmsg_at'] > 0) {
            return ['status' => 400, 'message' => '短信已发送'];
        }
        $info['sendmsg_at'] = Yii::$app->params['currentTime'];
        $info->update(false);

        return $this->_sendSms($info['mobile'], $info->getPointName('merchant', $info->merchant_id));
    }

    protected function _sendSms($mobile, $mStr)
    {
        $content = '兔班长装修网温馨提示：{{MNAME}}将为您提供免费量房、预算设计服务。如有任何问题请致电：4008032163 咨询，我们将随时为您服务！';
        $content = str_replace('{{MNAME}}', $mStr, $content);
        $this->sendSmsBase($mobile, $content, 'dispatch');
        return ['status' => 200, 'message' => "已通知业主{$mStr}沟通量房"];
    }
}
