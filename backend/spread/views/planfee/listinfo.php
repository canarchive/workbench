<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'created_day',
        [
            'attribute' => 'client_type',
            'value' => function($model) {
                $name = isset($model->clientTypeInfos[$model->client_type]) ? $model->clientTypeInfos[$model->client_type] : $model->client_type;
                return $name;
            }
        ],
        [
            'attribute' => 'channel',
            'value' => function($model) {
                $name = isset($model->channelInfos[$model->channel]) ? $model->channelInfos[$model->channel] : $model->channel;
                return $name;
            }
        ],
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
        'show_num',
        'hit_num',
        'fee',
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
