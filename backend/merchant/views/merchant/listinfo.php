<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'sort',
            'value' => function($model) {
                return $model->getKeyName('sort', $model->sort);
            },
        ],
        'code',
        'name',
        //'name_full',
        'city_code',
        'region',
        [
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : '';
                return '<input name="orderlist" type="text" style="width:50px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
            },
        ],
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  $model->formatTimestamp($model->created_at);
            },
        ],
        [
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  $model->formatTimestamp($model->updated_at);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->getKeyName('status', $model->status);
            }
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
