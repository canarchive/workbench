<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
				$name = isset($model->merchantInfos[$model->merchant_id]) ? $model->merchantInfos[$model->merchant_id] : $model->merchant_id;
				return $name;
            }
        ],
        'code',
        'name',
        [
            'attribute' => 'user_id',
            'value' => function($model) {
                $return  = isset($model->userInfos[$model->user_id]) ? $model->userInfos[$model->user_id] : '';
                return $return;
            }
        ],
        'mobile',
        'serviced_num',
        'serviced_times',
        [
            'attribute' => 'distributed_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->distributed_at);
            },
        ],
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        /*[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
		],*/
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ]
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
