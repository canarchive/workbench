<?php
$columnsBase = [
    'id',
    [
        'attribute' => 'merchant_id',
        'value' => function($model) {
            return $model->getPointName('merchant', $model->merchant_id);
        },
    ],
	//'client_type',
    [
        'attribute' => 'city_code',
        'value' => function($model) {
            $city_code = empty($model->conversionInfo) ? '' : $model->conversionInfo['city_code'];
            return $city_code;
        } 
    ],
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
            return $model->getPointName('service', $model->service_id);
        },
    ],
    'channel',
    'city_input',
    'area_input',
    [
        'attribute' => 'signup_at',
        'value'=> function($model){
            return  date('Y-m-d H:i:s',$model->signup_at);
        },
    ],
    [
        'attribute' => 'city',
        'value' => function($model) {
            $city = empty($model->conversionInfo) ? '' : $model->conversionInfo['city'];
            return $city;
        } 
    ],
];
$columnsExts = [
    'follow-plan' => [
    [
        'attribute' => 'callback_again',
        'value' => function($model) {
            return  date('Y-m-d H:i:s',$model->callback_again);
        }
    ],
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
$cExt = isset($columnsExts[$extKey]) ? $columnsExts[$extKey] : [];
$columns = array_merge($columnsBase, $cExt);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];
echo $this->render('_nav-status', ['model' => $searchModel]);
$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
