<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        // 'account_id',
        [
            'attribute' => 'plan_id',
            'value' => $model->getPointName('plan', $model->plan_id),
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

