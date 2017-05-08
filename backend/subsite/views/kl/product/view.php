<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        [
            'attribute' => 'city_code',
            'value' => $model->companyInfos[$model->city_code],
        ],
        [
            'attribute' => 'merchant_id',
            'value' => $model->merchantInfos[$model->merchant_id],
        ],
        [
            'attribute' => 'channel',
            'value' => $model->channelInfos[$model->channel],
        ],
        [
            'attribute' => 'sem_account',
            'value' => !empty($model->sem_account) ? $model->semAccountInfos[$model->sem_account] : '',
        ],
        'created_day',
        'hit_num',
        'fee',
        'rate',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

