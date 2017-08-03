<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'code',
        'name',
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
