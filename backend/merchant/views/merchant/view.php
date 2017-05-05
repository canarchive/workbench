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
        'name',
        'name_full',
        [
            'attribute' => 'city_code',
            'value' => $model->companyInfos[$model->city_code],
        ],
        [
            'attribute' => 'sort',
            'value' => $model->sortInfos[$model->sort],
        ],
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
        'brief',
        'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

