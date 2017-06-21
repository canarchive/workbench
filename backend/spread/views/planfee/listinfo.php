<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'created_day',
        [
            'attribute' => 'client_type',
            'value' => function($model) {
                return $model->getKeyName('client_type', $model->client_type);
            }
        ],
        [
            'attribute' => 'channel',
            'value' => function($model) {
                return $model->getKeyName('channel', $model->channel);
            }
        ],
        [
            'attribute' => 'account_id',
            'value' => function($model) {
                return $model->getPointName('account', $model->account_id);
            }
        ],
        [
            'attribute' => 'plan_id',
            'value' => function($model) {
                return $model->getPointName('plan', $model->plan_id);
            }
        ],
        'show_num',
        'hit_num',
        'fee',
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
