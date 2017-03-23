<?php

namespace gallerycms\house\models;

class AskQuestionBak extends AskQuestion
{
    public static function getDb()
    {
        return \Yii::$app->dbAsk;
    }	

    public function updateInfo()
    {
        $info = $this->find()->one();
        print_r($info);
    }
}
