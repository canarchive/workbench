<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		'code',
        'name',
		[
			'attribute' => 'status',
			'value' => $model->getKeyName('status', $model->status),
		],
		'brief',
		'description',
		'meta_title',
		'meta_keyword',
		'meta_description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

