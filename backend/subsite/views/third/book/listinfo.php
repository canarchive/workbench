<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'mobile',
        'address',
        [
            'format' => 'raw',
            'attribute' => 'product',
            'value'=> function($model){
                return $model->productInfo;
            },
        ],
        [
            'format' => 'raw',
            'attribute' => 'coupon',
            'value'=> function($model){
                return $model->couponInfo;
            },
        ],
        [
            'attribute' => 'service_at',
            'value'=> function($model){
                return  date('Y-m-d',$model->service_at);
            },
        ],
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
