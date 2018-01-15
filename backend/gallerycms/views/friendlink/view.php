<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        [
            'attribute' => 'sort',
            'value' => isset($model->sortInfos[$model->sort]) ? $model->sortInfos[$model->sort] : '',
        ],
        [
            'format' => 'raw',
            'attribute' => 'url',
            'value' => "<a href='{$model->url}' target='_blank'>{$model->url}</a>",
        ],
        'orderlist',
        'contact',
        'mobile',
        'qq',
        'email',
        'wechat',
        'pagerank',
        [
            'attribute' => 'status',
            'value' => $model->statusInfos[$model->status],
        ],
        [
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
        [
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
        [
            'format' => 'raw',
            'attribute' => 'logo',
            'value' => $model->getAttachmentImg($model->logo, false),
        ],
        'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

