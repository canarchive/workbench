<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
        'name_full',
        [
            'format' => 'raw',
            'attribute' => 'logo',
            'value' => function($model) {
                return $model->getAttachmentImg($model->logo);
            }
        ],
        /*'city_code',
        [
            'attribute' => 'sort_id',
            'value' => function($model) {
                $return = isset($model->sortInfos[$model->sort]) ? $model->sortInfos[$model->sort] : '';
            },
        ],*/
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
