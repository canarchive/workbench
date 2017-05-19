<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        [
            'attribute' => 'account_id',
            'value' => function($model) {
                $name = isset($model->accountInfos[$model->account_id]) ? $model->accountInfos[$model->account_id] : $model->account_id;
                return $name;
            }
        ],
        [
            'attribute' => 'plan_id',
            'value' => function($model) {
                $name = isset($model->planInfos[$model->plan_id]) ? $model->planInfos[$model->plan_id] : $model->plan_id;
                return $name;
            }
        ],
        'consume',
        'impression',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

