<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'code',
        'name',
        [
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : '';
                return '<input name="orderlist" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
            },
        ],
        [
            'attribute' => 'parent_code',
            'value' => function ($model) {
                $info = $model->getInfoByCode($model->parent_code);
                if (empty($info)) {
                    return '';
                }
                $name = $info['name'];
                if ($info['parent_code'] != '') {
                    $pInfo = $model->getInfoByCode($info['parent_code']);
                    $name = isset($pInfo['name']) ? $pInfo['name'] . '-' . $name : $name;
                }
                return $name;
            }
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ]
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
