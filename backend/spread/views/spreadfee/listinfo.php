<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'city_code',
            'value' => function($model) {
                return $model->companyInfos[$model->city_code];
            }
        ],
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                return $model->merchantInfos[$model->merchant_id];
            }
        ],
        [
            'attribute' => 'channel',
            'value' => function($model) {
                return $model->channelInfos[$model->channel];
            }
        ],
        [
            'attribute' => 'sem_account',
            'value' => function($model) {
                return !empty($model->sem_account) ? $model->semAccountInfos[$model->sem_account] : '';
            }
        ],
        'created_day',
        'hit_num',
        'fee',
        'rate',
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
