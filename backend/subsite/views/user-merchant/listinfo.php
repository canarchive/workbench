<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'mobile',
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                return $model->getPointName('merchant', $model->merchant_id);
            },
        ],
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
        [
            'attribute' => 'view_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->view_at);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],
        [
			'format' => 'raw',
            'attribute' => 'operation',
			'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
				$menu = isset($menus['subsite_decoration_dispatch_update']) ? $menus['subsite_decoration_dispatch_update'] : [];
                if (empty($menu)) {
                    return '';
                }
                $dInfo = $model->dispatchInfo;
                if (empty($dInfo)) {
                    return '';
                }
				$opeStr = "<a href='{$menu['url']}?id={$model->dispatchInfo['id']}'>编辑</a><br />";
                return $opeStr;
			},
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
