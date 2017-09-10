<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		[
			'format' => 'raw',
            'attribute' => 'id',
			'value' => function($model) {
				$url = Yii::getAlias("@{$model->site_code}.cmsurl") . "/caseshow_{$model->id}.html";
				return "<a href='{$url}' target='_blank'>{$model->id}</a>";
			},
		],
        [   
            'format' => 'raw',
            'attribute' => 'name',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="name" type="text" style="width:100px;" value="' . $model->name . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'name\', this.value);">';
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'tag',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="tag" type="text" style="width:50px;" value="' . $model->tag . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'tag\', this.value);">';
            },  
        ],
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
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				$thumbStr = $model->getAttachmentImg($model->attachmentWhere('sample', 'picture'));
				if (empty($thumbStr)) {
				    $thumbStr = $model->getAttachmentImg($model->attachmentWhere('sample', 'picture', false));
				}
				return $thumbStr;
			}
		],
		[
            'attribute' => 'sort',
			'value' => function($model) {
				return isset($model->sortInfos[$model->sort]) ? $model->sortInfos[$model->sort] : '';
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
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
