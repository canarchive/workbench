<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        [
            'format' => 'raw',
            'attribute' => 'logo',
            'value' => $model->getAttachmentImg($model->logo, false),
        ],
        'code',
        'name',
        'hotline',
        'postcode',
        'address',
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
        'description',
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

