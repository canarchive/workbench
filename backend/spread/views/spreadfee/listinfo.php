<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        // [
        //     'attribute' => 'city_code',
        //     'value' => function($model) {
        //         $name = isset($model->citycodeInfos[$model->city_code]) ? $model->citycodeInfos[$model->city_code] : $model->city_code;
        //         return $name;
        //     }
        // ],
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                $name = isset($model->merchantInfos[$model->merchant_id]) ? $model->merchantInfos[$model->merchant_id] : $model->merchant_id;
                return $name;
            }
        ],
        [
        'attribute' => 'channel',
            'value' => function($model) {
                $name = isset($model->accountInfos[$model->channel]) ? $model->accountInfos[$model->channel] : $model->channel;
                return $name;
            }
        ],
        [
            'attribute' => 'sem_account',
            'value' => function($model) {
                $name = isset($model->accountInfos[$model->sem_account]) ? $model->accountInfos[$model->sem_account] : $model->sem_account;
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
            'attribute' => 'created_day',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_day);
            },
        ],
        // [
        //     'attribute' => 'hit_num',
        //     'value' => function($model) {
        //         $name = isset($model->unitInfos[$model->hit_num]) ? $model->unitInfos[$model->hit_num] : $model->hit_num;
        //         return $name;
        //     }
        // ],
        // [
        //     'attribute' => 'status',
        //     'value' => function($model) {
        //         return $model->statusInfos[$model->status];
        //     }
        // ],
        'fee',
        'rate',
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
