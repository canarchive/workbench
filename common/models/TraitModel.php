<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use baseapp\behaviors\BehaviorHelper;

trait TraitModel
{
    use TraitLevel;
    use TraitPHPExcel;

    public function behaviors()
    {
        $behaviorCodes = array_merge(['validator', 'point'], $this->behaviorCodes);

        $return = BehaviorHelper::behaviors($this->className(), $behaviorCodes);
        return $return;
    }

    public function getBehaviorCodes()
    {
        return [];
    }

	protected function _formatInfo($info)
	{
		return $info;
	}

	protected function _formatInfos($infos)
	{
		return $infos;
	}

	public function resizePic($field, $width, $height)
	{
		$str = $this->$field;
		if (empty($str)) {
			return '';
		}

		$str .= "?x-oss-process=image/resize,m_fill,w_{$width},h_{$height},limit_0/auto-orient,0/quality,q_90";
		return $str;
	}

    protected function _getCacheDatas($key)
    {
        $cache = Yii::$app->cache;
        $datas = $cache->get($key);
        return $datas;
    }

    protected function _setCacheDatas($key, $datas)
    {
        $cache = Yii::$app->cache;
        $cache->set($key, $datas);
        return $datas;
    }

    protected function _formatData($data)
    {
        $fields = $this->_getDatasForFormat();
        $infos = [];
        foreach ($fields as $field => $fInfo) {
            $infos[$field] = isset($data[$field]) ? $data[$field] : $fInfo['default'];
        }
        return $infos;
    }

    protected function _getDatasForFormat()
    {
        return [];
    }    

    protected function _formatFailResult($defaultMessage, $info = null)
    {
        $errors = $this->getErrors();
        $errorFirst = $this->getFirstErrors();
        $message = !empty($errorFirst) ? current($errorFirst) : $defaultMessage;
        $eInfo = [];
        $info = is_null($info) ? $this->attributes : $info;
        foreach ($info as $field => $value) {
            $eInfo[$field]['value'] = $value;
            $error = isset($errors[$field]) ? current($errors[$field]) : '';
            $eInfo[$field]['error'] = $error;
        }

        $data = [
            'status' => '400',
            'message' => $message,
            'info' => $eInfo,
        ];
        return $data;
    }

    public function getIpInfo()
    {
        //$ip = '123.57.148.73';
        $ip = Yii::$app->getRequest()->getIP();
        $city = \common\components\IP::find($ip);
        $city = is_array($city) ? implode('-', $city) : $city;
        return ['ip' => $ip, 'ipCity' => $city];
        //var_dump($return);exit();
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '停用',
            '1' => '正常',
        ];
        return $datas;
    }

    public function formatPriv($field, $key, $privInfo)
    {
        $info = isset($privInfo[$field]) ? [$key => $privInfo[$field]] : null;
        return $info;
    }

    public function getKeyName($key, $value, $datas = null)
    {
        if (is_null($datas)) {
            $key = Inflector::id2camel($key, '_');
            $keyDatas = "{$key}Infos";
            $infos = $this->$keyDatas;
        }
        return isset($infos[$value]) ? $infos[$value] : $value;
    }

    public function maskMobile($mobile)
    {
        return substr_replace($mobile, '******', 3, 6);
    }

    public function formatTimestamp($timestamp, $format = 'Y-m-d H:i:s')
    {
        return  date($format, $timestamp);
    }
}
