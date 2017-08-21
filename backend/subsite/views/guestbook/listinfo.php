<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'merchant_id',
            'value' => function ($model) {
                return $model->getPointName('merchant', $model->merchant_id);
            }
        ],
        [
            'attribute' => 'mobile',
            'value' => function ($model) {
                return $model->maskMobile($model->mobile);
            }
        ],
        [
            'format' => 'raw',
            'attribute' => 'content',
            'value' => function($model) {
                $cTime = $model->formatTimestamp($model->created_at);
                return "<b>{$cTime}</b>  {$model->content}";
            }
        ],
        [
            'format' => 'raw',
            'attribute' => 'reply',
            'value' => function($model) {
                $cTime = $model->formatTimestamp($model->reply_at);
                return "<b>{$cTime}</b>  {$model->reply}";
            }
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
