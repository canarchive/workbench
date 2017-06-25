<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'name',
		'code',
		[
			'attribute' => 'sort_code',
			'value' => $model->getInfoName('sort_code', $model->sort_code),
		],
		'orderlist',
		'meta_title',
		'meta_keyword',
		'meta_description',
		[
			'attribute' => 'status',
			'value' => $model->getKeyName('status', $model->status),
		],
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

