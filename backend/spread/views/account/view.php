<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'domain',
        [
            'attribute' => 'channel',
            'value' => isset($model->domainInfos[$model->channel]) ? $model->domainInfos[$model->channel] : $model->channel,
        ],
        'password',
        [
            'attribute' => 'merchant',
            'value' => isset($model->merchantInfos[$model->merchant]) ? $model->merchantInfos[$model->merchant] : $model->merchant,
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
            'value' => $model->statusInfos[$model->status],
        ],
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

