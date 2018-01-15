<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
        'mobile',
		[
            'attribute' => 'site_code',
			'value' => function($model) {
				return isset($model->siteCodeInfos[$model->site_code]) ? $model->siteCodeInfos[$model->site_code] : '';
			}
		],
		[
            'attribute' => 'page',
			'value' => function($model) {
				return isset($model->pageInfos[$model->page]) ? $model->pageInfos[$model->page]['name'] : '';
			}
		],
		[
            'attribute' => 'callback',
			'value' => function($model) {
				return isset($model->callbackInfos[$model->callback]) ? $model->callbackInfos[$model->callback] : '';
			}
		],
        'email',
        'qq',
        'address',
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'reply_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->reply_at);
            },
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
