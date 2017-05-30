<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        // 'account_id',
        [
            'attribute' => 'plan_id',
            'value' => function($model) {
                $name = isset($model->planInfos[$model->plan_id]) ? $model->planInfos[$model->plan_id] : $model->plan_id;
                return $name;
            }
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

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);
