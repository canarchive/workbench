<?php
$this->context->companyInfo = $model->companyInfo;

$detailViewParams = [
    'model' => $model,
    'attributes' => [
		'id',
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => $model->getAttachmentImg($model->thumb, false),
		],
        'name',
		'orderlist',
		[
			'attribute' => 'merchant_id',
			'value' => $model->merchantInfo['nameUrl'],
		],
		[
			'format' => 'raw',
			'attribute' => 'picture_design',
			'value' => $model->getAttachmentImg($model->picture_design, false),
		],
		[
			'attribute' => 'status',
			'value' => $model->statusInfos[$model->status],
		],
		[
            'attribute' => 'created_at',
            'value'=> date('Y-m-d H:i:s',$model->created_at),
        ],
		[
            'attribute' => 'updated_at',
            'value'=> date('Y-m-d H:i:s',$model->updated_at),
        ],
		'description',
    ],
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);

