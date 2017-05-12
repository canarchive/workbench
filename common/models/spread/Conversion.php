<?php

namespace common\models\spread;

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
        $session = Yii::$app->session;
        $spreadInfo = isset($session['session_spread_info']) ? $session['session_spread_info'] : [];
        $spreadInfo = !empty($spreadInfo) && time() - $spreadInfo['time'] < 1800 ? $spreadInfo : [];
        
        if (isset($spreadInfo['time'])) {
            unset($spreadInfo['time']);
        }
        $insertInfo = array_merge($spreadInfo, $data);

        $conversion = $this->_newModel('conversion');
        $newData = $conversion->insert(false, $insertInfo);
        //$this->statisticRecord($newData, 'signup');

        return $insertInfo;
    }
}
