<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        [
            'attribute' => 'sort',
            'value' => $model->getKeyName('sort', $model->sort),
        ],
        'code',
        'name',
        'name_full',
        [
            'attribute' => 'city_code',
            'value' => $model->getPointName('company', ['code' => $model->city_code]),
        ],
        'region',
        'orderlist',
        'hotline',
        'postcode',
        'address',
        'homeurl',
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
        'brief',
        'msg',
        'description',
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

