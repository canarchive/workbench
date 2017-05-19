<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        [
            'attribute' => 'channel',
            'value' => function($model) {
                $name = isset($model->channelInfos[$model->channel]) ? $model->channelInfos[$model->channel] : $model->channel;
                return $name;
            }
        ],
        'password',
        [
            'attribute' => 'domain_id',
            'value' => function($model) {
                $name = isset($model->domainInfos[$model->domain_id]) ? $model->domainInfos[$model->domain_id] : $model->domain_id;
                return $name;
            }
        ],
        [
            'attribute' => 'merchant',
            'value' => function($model) {
                $name = isset($model->companyInfos[$model->merchant]) ? $model->companyInfos[$model->merchant] : $model->merchant;
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

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
