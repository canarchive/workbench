<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        [
            'attribute' => 'account_id',
            'value' => function($model) {
                $name = isset($model->accountInfos[$model->account_id]) ? $model->accountInfos[$model->account_id] : $model->account_id;
                return $name;
            }
        ],
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                $name = isset($model->merchantInfos[$model->merchant_id]) ? $model->merchantInfos[$model->merchant_id] : $model->merchant_id;
                return $name;
            }
        ],
        'put_at',
        'put_end',
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],

    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
