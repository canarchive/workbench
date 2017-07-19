<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        [
            'attribute' => 'merchant_id',
            'value' => $model->getPointName('merchant', $model->merchant_id),
        ],
        [
            'attribute' => 'merchant_sort',
            'value' => $model->getKeyName('merchant_sort', $model->merchant_sort),
        ],
        'day_fee',
        [
            'attribute' => 'day_start',
            'value'=> $model->formatTimestamp($model->day_start),
        ],
        [
            'attribute' => 'day_end',
            'value'=> $model->formatTimestamp($model->day_end),
        ],
        'fee',
        'num',
        'num_real',
        'num_current',
        'num_back',
        'num_back_current',
        'note',
        'record',
        [
            'attribute' => 'status',
            'value' => $model->getKeyName('status', $model->status),
        ],
        [
            'attribute' => 'created_at',
            'value'=> $model->formatTimestamp($model->created_at),
        ],
        [
            'attribute' => 'updated_at',
            'value'=> $model->formatTimestamp($model->updated_at),
        ],
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

