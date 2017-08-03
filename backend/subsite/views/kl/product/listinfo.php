<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'mobile',
            'value'=> function($model){
                return $model->bookInfo['mobile'];
            },
        ],
        'product',
        'product_num',
        'coupon',
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        [
            'attribute' => 'coupon_status',
            'value' => function($model) {
                return $model->couponStatusInfos[$model->coupon_status];
            }
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
