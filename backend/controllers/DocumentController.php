<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;

class DocumentController extends Controller
{

    public function actionListinfo()
    {
        return $this->render('listinfo');
    }

    public function actionView($code)
    {
        $this->layout = '@backend/views/charisma/document/layout';
        echo $this->render($code);
        exit();
    }
}
