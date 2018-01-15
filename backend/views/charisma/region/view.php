<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'name',
        'code',
        'parent_code',
        'orderlist',
        'status',
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

