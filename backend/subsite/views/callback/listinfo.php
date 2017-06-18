<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
    ],
];

$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
