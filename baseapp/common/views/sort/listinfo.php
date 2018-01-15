<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
		'code',
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->getKeyName('status', $model->status);
			}
		],
        'description',
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
