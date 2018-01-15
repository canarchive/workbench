<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

