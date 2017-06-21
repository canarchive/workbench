<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        [
            'attribute' => 'account_id',
            'value' => $model->getPointName('account', $model->account_id),
        ],        
        [
            'attribute' => 'plan_id',
            'value' => $model->getPointName('plan', $model->plan_id),
        ],
        [
            'attribute' => 'unit_id',
            'value' => $model->getPointName('unit', $model->unit_id),
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

