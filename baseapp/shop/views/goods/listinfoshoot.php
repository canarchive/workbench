<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
		[
			'format' => 'raw',
			'attribute' => 'main_photo',
			'value' => function($model) {
				return $model->getAttachmentImg($model->main_photo);
			}
		],
		[
            'attribute' => 'category_id',
            'value'=> function($model){
				if ($model->category_id < 1) {
					return '';
				}
                return $model->categoryLevelInfos[$model->category_id];
            },
        ],		
        [   
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="orderlist" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
            },  
        ],
		'price',
		'price_market',
		[
			'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			},
		],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
