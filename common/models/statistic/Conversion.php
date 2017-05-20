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

    public function insert($runValidation = true, $attributes = null)
    {
        return parent::insert($runValidation, $attributes);
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

        $conversion = new self();
        $newData = $conversion->insert(false, $insertInfo);
        //$this->statisticRecord($newData, 'signup');

        return $newData;
    }

    public function _formatData($data)
    {
        $fields = [
            'sort', 'merchant_id', 'city_code', 'client_type',
            'mobile', 'name', 'channel', 'note', 
        ];

        $infos = [];
        foreach ($fields as $field) {
            $infos[$field] = isset($data[$field]) ? $data[$field] : '';
        }
        return $infos;
    }
}
