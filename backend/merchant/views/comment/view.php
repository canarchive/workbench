<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'attribute' => 'merchant_id',
			'value' => $model->merchantInfos[$model->merchant_id],
		],
		'star',
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		'content',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

