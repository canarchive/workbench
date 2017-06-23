<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
        'id',
        'code',
        'name',
		[
			'attribute' => 'user_id',
			'value' => $model->getPointName('merchant-user', $model->user_id, 'name'),
		],
        [
            'attribute' => 'manager_id',
            'value' => $model->getPointName('merchant-user', $model->manager_id, 'mobile'),
        ],
        'mobile',
		'serviced_times',
        [
            'attribute' => 'status',
            'value' => $model->statusInfos[$model->status],
        ],
        [
            'attribute' => 'distributed_at',
            'value'=> $model->formatTimestamp($model->distributed_at),
        ],
        [
            'attribute' => 'created_at',
            'value'=> $model->formatTimestamp($model->created_at),
        ],
        [
            'attribute' => 'updated_at',
            'value'=> $model->formatTimestamp($model->updated_at),
        ],
    ],
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

