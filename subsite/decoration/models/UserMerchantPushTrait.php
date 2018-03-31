<?php

namespace subsite\decoration\models;

use Yii;

trait UserMerchantPushTrait
{
	public function actionPush($merchantId)
	{
		$infos = $this->getInfos(['where' => ['and', 'push_status = 0', 'push_number < 5', 'merchant_id = ' . $merchantId], 'limit' => 3]);
		foreach ($infos as $info) {
			//var_dump($info);
			$data = [
				'gId' => $info['id'],
				//'gName' => $info[''],
				'gMobile' => $info->getOldAttribute('mobile'),//userInfo->mobile,
				'gDistric' => $info['houseRegion'] . '-' . $info['houseAddress'],
				'gCreatedTime' => $info['created_at'],
				'gStage' => 'dispatch',
				'area' => $info['houseArea'],
				'sort' => $info['houseSort'],
			    'type' => $info['houseType'],
				'note' => $info['note'],
				'gIp' => '',
			];
			$result = $this->pushData($data);
			$result = json_decode($result, true);
			if (isset($result['Status'])) {
				$info->push_status = 1;
				$info->push_number += 1;
				$info->push_at = Yii::$app->params['currentTime'];
				$r = $info->update(false, ['push_status']);
		    }
			//var_dump($data);
			//exit();
		}
	}

    protected function pushData($data)
    {
        $ch = $curl = curl_init();
		//$url = 'https://ap.yzb315.com/api/receiveWynDataTest';
		$url = 'https://ap.yzb315.com/api/receiveWynData';
		//$url = 'http://39.106.102.45/test.php';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, $url);

		$json = true;
        if ($json) {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $data = json_encode($data);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $header = [
            'Content-Type: application/json; charset=utf-8',
            'Content-Length:' . strlen($data)
        ];
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		}

        $result = curl_exec($ch);
        return $result;
    }
}
