<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
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
        [
            'attribute' => 'unit_id',
            'value' => function($model) {
                $name = isset($model->unitInfos[$model->unit_id]) ? $model->unitInfos[$model->unit_id] : $model->unit_id;
                return $name;
            }
        ],
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        [
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],

    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
