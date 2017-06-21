<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'domain',
        [
            'attribute' => 'channel',
            'value' => $model->getKeyName('channel', $model->channel),
        ],
        'password',
        [
            'attribute' => 'merchant',
            'value' => $model->getKeyName('merchant', $model->merchant),
        ],
        [
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
        [
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
        [
            'attribute' => 'status',
            'value' => $model->getKeyName('status', $model->status),
        ],
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

