<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'service_id',
    [
        'attribute' => 'mobile',
        'value' => function ($model) {
            return substr_replace($model['mobile'], '******', 3, 6);
        }
    ],
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                if ($model->merchant_id > 0) {
                    return $model->merchantInfo['name'];
                }
                return '';
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
				$menu = isset($menus['spread_decoration_dispatch_update']) ? $menus['spread_decoration_dispatch_update'] : [];
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

echo $this->render('_search', ['model' => $searchModel]);
echo $this->render('_nav-status', ['model' => $searchModel]);
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
