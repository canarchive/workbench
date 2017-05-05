<?php
$columnsBase = [
    'id',
    [
        'attribute' => 'merchant_id',
        'value' => function($model) {
            return isset($model->merchantInfo['name']) ? $model->merchantInfo['name'] : $model->merchant_id;
        },
    ],
	'client_type',
    'city_code',
    'name',
    [
        'attribute' => 'mobile',
        'value' => function ($model) {
            return substr_replace($model['mobile'], '******', 3, 6);
        }
    ],
    [
        'attribute' => 'service_id',
        'value' => function($model) {
            return isset($model->serviceData['name']) ? $model->serviceData['name'] : $model->service_id;
        },
    ],
    'channel',
    [
        'attribute' => 'signup_at',
        'value'=> function($model){
            return  date('Y-m-d H:i:s',$model->signup_at);
        },
    ],
	'area_input',
	'city_input',
    'signup_city',
    /*[
        'attribute' => 'callback_again',
        'value' => function($model) {
            return  date('Y-m-d H:i:s',$model->callback_again);
        }
    ],*/
];
$columnsExts = [
    '' => [
        //'message',
        'keyword',
        'keyword_search',
        'note',
    ],
    'follow' => [
    ],
    'follow-plan' => [
    ],
    'valid-dispatch' => [
    ],
	'valid-part' => [
	],
    'bad' => [
        [
            'attribute' => 'invalid_status',
            'value' => function($model) {
                $value = isset($model->invalidStatusInfos[$model->invalid_status]) ? $model->invalidStatusInfos[$model->invalid_status] : $model->invalid_status;
                return $value;
            },
        ],
    ],
    'valid-out' => [
    ],
    'valid' => [
    ],
    'other' => [
    [
        'attribute' => 'status',
        'value' => function($model) {
            $value = isset($model->statusInfos[$model->status]) ? $model->statusInfos[$model->status] : $model->status;
            return $value;
        }
    ]
    ]
];
$extKey = is_null($searchModel->status) ? 'other' : $searchModel->status;
$columns = array_merge($columnsBase, $columnsExts[$extKey]);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $columns,
];
echo $this->render('_nav-status', ['model' => $searchModel]);
echo $this->render('_nav-service', ['model' => $searchModel]);
$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
