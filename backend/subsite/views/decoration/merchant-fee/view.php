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
            'attribute' => 'sort',
            'value' => $model->getKeyName('sort', $model->sort),
        ],
        'pay_day',
        [
            'attribute' => 'day_start',
            'value'=> $model->formatTimestamp($model->day_start),
        ],
        [
            'attribute' => 'day_end',
            'value'=> $model->formatTimestamp($model->day_end),
        ],
        'fund',
        'num',
        'num_current',
        'num_back',
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
