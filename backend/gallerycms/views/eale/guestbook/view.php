<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'site_code',
			'value' => isset($model->siteCodeInfos[$model->site_code]) ? $model->siteCodeInfos[$model->site_code] : '',
		],
		[
			'attribute' => 'page',
			'value' => isset($model->pageInfos[$model->page]) ? $model->pageInfos[$model->page]['name'] : '',
		],
        'name',
		'mobile',
		[
			'attribute' => 'callback',
			'value' => isset($model->callbackInfos[$model->callback]) ? $model->callbackInfos[$model->callback] : '',
		],
        'qq',
        'email',
        'message',
        'reply',
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'reply_at',
            'value'=> date('Y-m-d H:i:s',$model->reply_at),
        ],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

