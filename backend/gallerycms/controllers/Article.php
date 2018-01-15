<?php

namespace backend\gallerycms\controllers;

use backend\components\AdminController;
use backend\components\ControllerTraitFull;

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //设置允许的跨域header
//date_default_timezone_set("Asia/Chongqing");

class Article extends AdminController
{
    public $viewPrefix = '/article/';
    use ControllerTraitFull;

    public function actions()
    {
        return [
    
            'upload' => [
                'class' => 'common\ueditor\UEditorAction',
            ],
        ];
    }	
}
