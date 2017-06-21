<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        [
            'attribute' => 'channel',
            'value' => function($model) {
                $name = $model->getKeyName('channel', $model->channel);
                return $name;
            }
        ],
        'password',
        'domain',
        [
            'attribute' => 'merchant',
            'value' => function($model) {
                return $model->getPointName('merchant', $model->merchant);
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
                return $model->getKeyName('status', $model->status);
            }
        ],

    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
