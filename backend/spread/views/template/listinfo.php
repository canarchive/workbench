<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'name',
        'code',
        [
            'attribute' => 'merchant_id',
            'value' => function($model) {
                return $model->getPointName('merchant', $model->merchant_id);
            }
        ],
        [
            'attribute' => 'have_pc',
            'value' => function($model) {
                return $model->getKeyName('have_pc', $model->have_pc);
            }
        ],
        [
            'attribute' => 'have_mobile',
            'value' => function($model) {
                return $model->getKeyName('have_mobile', $model->have_mobile);
            }
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->getKeyName('status', $model->status);
            }
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
