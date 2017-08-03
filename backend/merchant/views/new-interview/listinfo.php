<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                return $model->getPointName('new-merchant', $model->merchant_id);
            },
        ],
        [
            'attribute' => 'saleman_id',
            'value' => function($model) {
                return $model->getPointName('saleman', $model->saleman_id);
            },
        ],
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        [
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],
        'content',
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
