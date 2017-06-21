<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        [
            'attribute' => 'account_id',
            'value' => function($model) {
                return $model->getPointName('account', $model->account_id);
            }
        ],
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                return $model->getPointName('merchant', $model->merchant_id);
            }
        ],
        'put_at',
        'put_end',
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->getKeyName('status', $model->status);
            }
        ],

    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
