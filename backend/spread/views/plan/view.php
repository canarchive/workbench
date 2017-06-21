<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        [
            'attribute' => 'account_id',
            'value' => $model->getPointName('account', $model->account_id),
        ],
        [
            'attribute' => 'merchant_id',
            'value' =>  $model->getPointName('merchant', $model->merchant_id),
        ],
        'put_at',
        'put_end',
        [
            'attribute' => 'status',
            'value' => $model->getKeyName('status', $model->status),
        ],
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

