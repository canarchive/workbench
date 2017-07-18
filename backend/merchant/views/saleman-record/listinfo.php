<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'saleman_id',
            'value' => function($model) {
                return $model->getPointName('saleman', $model->saleman_id);
            }
        ],
        'created_day',
        'record',
        'reply',
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
