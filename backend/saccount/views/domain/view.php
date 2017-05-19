<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'code',
        'stat_code',
        [
            'attribute' => 'domain_pc',
            'value' => $model->pcDomain,
        ],
        [
            'attribute' => 'domain_mobile',
            'value' => $model->mobileDomain,
        ],
        [
            'attribute' => 'status',
            'value' => $model->statusInfos[$model->status],
        ],
        [
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
        [
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

