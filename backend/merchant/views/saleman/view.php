<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        [
            'attribute' => 'role',
            'value' => $model->getKeyName('role', $model->role),
        ],
        'mobile',
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

