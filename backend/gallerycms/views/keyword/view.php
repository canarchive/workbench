<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'keyword',
        'num_used',
        [
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

