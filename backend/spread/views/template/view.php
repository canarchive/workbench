<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'code',
        [
            'attribute' => 'merchant_id',
            'value' => $model->getPointName('merchant', $model->merchant_id),
        ],
        [
            'attribute' => 'have_pc',
            'value' => $model->getKeyName('have_pc', $model->have_pc),
        ],
        [
            'attribute' => 'have_mobile',
            'value' => $model->getKeyName('have_mobile', $model->have_mobile),
        ],
        [
            'attribute' => 'status',
            'value' => $model->getKeyName('status', $model->status),
        ],
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

