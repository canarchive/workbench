<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
        'name',
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		'brief',
		'description',
		'meta_title',
		'meta_keyword',
		'meta_description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

