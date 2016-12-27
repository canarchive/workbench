<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				return $model->getAttachmentImg($model->thumb);
			}
		],
        [
            'format' => 'raw',
            'attribute' => 'url',
            'value' => function ($model) {
                return "<a target='_blank' href='{$model->url}'>{$model->url}</a>";
            }
        ],
		[
            'attribute' => 'site_code',
			'value' => function($model) {
				return isset($model->siteCodeInfos[$model->site_code]) ? $model->siteCodeInfos[$model->site_code] : '';
			},
		],
		[
            'attribute' => 'page',
			'value' => function($model) {
				return isset($model->pageInfos[$model->page]) ? $model->pageInfos[$model->page]['name'] : '';
			}
		],
        [   
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                if (!in_array($model->position, ['slide', 'indexthree'])) {
                    return $model->orderlist;
                }
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="orderlist" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
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

echo $this->render('_nav');
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
