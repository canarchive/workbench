<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use baseapp\behaviors\BehaviorHelper;

trait TraitModel
{
    use TraitSearch;
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
			'isAjax' => true,
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

    public function formatPriv($field, $key = null)
    {
        $privInfo = $this->_privInfo();
        $key = is_null($key) ? $field : $key;
        $info = isset($privInfo[$field]) ? [$key => $privInfo[$field]] : null;
        return $info;
    }

    public function _privInfo()
    {
        $privInfo = isset(Yii::$app->params['privInfo']) ? Yii::$app->params['privInfo'] : null;
        return $privInfo;
    }

    public function getKeyInfos($key)
    {
        $key = Inflector::id2camel($key, '_');
        $keyDatas = "{$key}Infos";
        return $this->$keyDatas;
    }

    public function getKeyName($key, $value, $datas = null)
    {
        if (is_null($datas)) {
            $infos = $this->getKeyInfos($key);
        }
        return isset($infos[$value]) ? $infos[$value] : $value;
    }

    public function maskMobile($mobile)
    {
        return substr_replace($mobile, '******', 3, 6);
    }

    public function formatTimestamp($timestamp, $format = null)
    {
        if (empty($timestamp)) {
            return '';
        }
        $format = is_null($format) ? 'Y-m-d H:i:s' : $format;
        $return = date($format, $timestamp);
        return $return;
    }

    public function formatPercent($num, $num2, $haveBracket = true, $precision = 4)
    {
        $result = $num2 == 0 ? '-' : (number_format($num / $num2, $precision) * 100) . '%';
        $result = $haveBracket ? " ( {$result} )" : $result;
        return $result;
    }

    public function formatTimestampShow($timestamp)
    {
        $day = floor($timestamp / 86400);
        $hour = floor(($timestamp - ($day * 86400)) / 3600);
        $minite = ceil(($timestamp - ($day * 86400) - ($hour * 3600)) / 60);
        $str = $day ? $day . '天 ' : '';
        $str .= $hour ? $hour . '小时 ' : '';
        $str .= $minite . '分钟';
        return $str;
    }

	public function randomString($length, $params = [])
	{
		$prefix = isset($params['prefix']) ? $params['prefix'] : '';
		$suffix = isset($params['suffix']) ? $params['suffix'] : '';
		$length = $length - strlen($prefix) - strlen($suffix);
		$lowerUpper = isset($params['lowerUpper']) ? $params['lowerUpper'] : 'strtolower';
		$onlyLetterNum = isset($params['onlyLetterNum']) ? $params['onlyLetterNum'] : true;
		$string = $lowerUpper(Yii::$app->getSecurity()->generateRandomString($length));
		if ($onlyLetterNum) {
			$string = str_replace(['-', '_'], ['a', '1'], $string);
		}
		return $prefix . $string . $suffix;
	}
}
