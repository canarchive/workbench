<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'spell',
        'orderlist',
        'seo_title',
        'seo_keyword',
        'seo_description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

