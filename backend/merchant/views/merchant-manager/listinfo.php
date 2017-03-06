<?php
$this->params['noPjax'] = true;
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'name',
            'value'=> function($model){
				$domain = Yii::getAlias('@gallerycmsurl');
				$url = "{$domain}/{$model->code}/";
				return "<a href='{$url}' target='_blank'>{$model->name}</a>";
            },
		],
		'num_merchant',
		'num_merchant_self',
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		],
		[
			'format' => 'raw',
			'attribute' => 'merchant_list',
            'value'=> function($model){
                $menus = $this->context->menuInfos['menus'];
				$menuCode = 'merchant_merchant_listinfo';
                $opeStr = '';
                if (isset($menus[$menuCode])) {
                    $opeStr .= "<a href='{$menus[$menuCode]['url']}?city_code={$model->code}' target='_blank'>{$menus[$menuCode]['name']}</a><br />";
                }
				return $opeStr;
            },
		],
		[
			'format' => 'raw',
			'attribute' => 'merchant_add',
            'value'=> function($model){
                $menus = $this->context->menuInfos['menus'];
				$menuCode = 'merchant_merchant_add';
                $opeStr = '';
                if (isset($menus[$menuCode])) {
                    $opeStr .= "<a href='{$menus[$menuCode]['url']}?city_code={$model->code}' target='_blank'>{$menus[$menuCode]['name']}</a><br />";
                }
				return $opeStr;
            },
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
