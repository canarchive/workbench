<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'code',
        'name',
        [
            'attribute' => 'manager_id',
            'value' => $model->getPointName('merchant-user', $model->manager_id, 'mobile'),
        ],
        'mobile',
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

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

