<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		'code',
		[
			'attribute' => 'sort',
			'value' => $model->getKeyName('sort', $model->sort),
		],
        'orderlist',
		[
			'attribute' => 'status',
			'value' => $model->getKeyName('status', $model->status),
		],
		'description',
		'content',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

