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
        $info['sendmsg_at'] = Yii::$app->params['currentTime'];
        $info->update(false);
        $mModel = new UserMerchant();
        $merchantInfos = $mModel->getInfos(['where' => ['mobile' => $info['mobile'], 'status' => '']]);
        if (empty($merchantInfos)) {
            return ['status' => 400, 'message' => '没有可通知信息'];
        }

        $mStr = '';
		$i = 0;
        foreach ($merchantInfos as $mInfo) {
            if ($mInfo['sendmsg_at'] > 0) {
                continue;
            }
            if ((Yii::$app->params['currentTime'] - $mInfo->created_at) >= 3600) {
				continue;
                //return ['status' => 400, 'message' => '已超过1个小时'];
            }
            $mStr .= '“' . $mInfo->getPointName('merchant', $mInfo->merchant_id) . '”、';
            $mInfo['sendmsg_at'] = Yii::$app->params['currentTime'];
            $mInfo->update(false);
			$i++;
        }
        if (empty($mStr)) {
            return ['status' => 400, 'message' => '短信已发送'];
        }

        return $this->_sendSms($info['mobile'], $mStr, $i);
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
        if ((Yii::$app->params['currentTime'] - $this->created_at) >= 3600) {
            return ['status' => 400, 'message' => '已超过1个小时'];
        }
        $info['sendmsg_at'] = Yii::$app->params['currentTime'];
        $info->update(false);

        return $this->_sendSms($info['mobile'], '“' . $info->getPointName('merchant', $info->merchant_id) . '”');
    }

    protected function _sendSms($mobile, $mStr, $i = 1)
    {
		//$mobile = '15010858302';
		$mStr = rtrim($mStr, '、');
		switch ($i) {
		case 2:
			$mStr .= '两家';
			break;
		case 3:
			$mStr .= '三家';
		default:
		}

        $content = '温馨提示：稍后将有{{MNAME}}装饰公司，为您提供家装咨询服务。请保持电话畅通，如有任何疑问请致电：4008032163，我们将竭诚为您服务！【兔班长装修网】';
        $content = str_replace('{{MNAME}}', $mStr, $content);
        $this->sendSmsBase($mobile, $content, 'dispatch');
        return ['status' => 200, 'message' => "已通知业主{$mStr}沟通量房"];
    }
}
