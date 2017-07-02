<?php

namespace baseapp\statistic\models;

use Yii;

class Conversion extends Visit
{
    public static function tableName()
    {
        return '{{%conversion}}';
    }

    public function attributeLabels()
    {
        $attributes = parent::attributeLabels();
        return $attributes;
    }

    public function successLog($data)
    {
        $session = Yii::$app->session;
        $spreadInfo = isset($session['session_spread_info']) ? $session['session_spread_info'] : [];
        $spreadInfo = !empty($spreadInfo) && time() - $spreadInfo['time'] < 1800 ? $spreadInfo : [];
        
        if (isset($spreadInfo['time'])) {
            unset($spreadInfo['time']);
        }
        $data = $this->_formatData($data);
        $insertInfo = array_merge($spreadInfo, $data);
        if (empty($insertInfo['city_code'])) {
            $insertInfo['city_code'] = isset($session['session_city_code']) ? $session['session_city_code'] : '';
        }

        $conversion = new self($insertInfo);
        $conversion->save();
        $this->statisticRecord($conversion->toArray(), 'signup');

        return $conversion;
    }

    public function _getDatasForFormat()
    {
        $fields = [
            'sort' => ['default' => ''], 
            'merchant_id' => ['default' => 0], 
            'city_code' => ['default' => ''], 
            'client_type' => ['defaut' => ''],
            'mobile' => ['default' => ''], 
            'name' => ['default' => ''], 
            'channel' => ['default' => ''], 
            'note' => ['default' => ''], 
        ];
        return $fields;
    }
}
