<?php

namespace gallerycms\house\models;

class AskQuestionBak extends AskQuestion
{
    public static function getDb()
    {
        return \Yii::$app->dbAsk;
    }	
}
