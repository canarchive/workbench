<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'name',
        'className',
        [
            'attribute' => 'createdAt',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->createdAt);
            },
        ],
        [
            'attribute' => 'updatedAt',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updatedAt);
            },
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'showFilter' => true]);
