<?php

namespace common\models\statistic;

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
        $data = $this->_formatData($data);
        $session = Yii::$app->session;
        $spreadInfo = isset($session['session_spread_info']) ? $session['session_spread_info'] : [];
        $spreadInfo = !empty($spreadInfo) && time() - $spreadInfo['time'] < 1800 ? $spreadInfo : [];
        
        if (isset($spreadInfo['time'])) {
            unset($spreadInfo['time']);
        }
        $insertInfo = array_merge($spreadInfo, $data);

        $conversion = new self($insertInfo);
        $conversion->save();
        //$newData = $conversion->insert(false, $insertInfo);
        //$this->statisticRecord($newData, 'signup');

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
