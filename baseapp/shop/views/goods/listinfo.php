<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
		[
			'class' => 'yii\grid\CheckboxColumn',
			'options' => [
				'name' => 'select_elems[]',
			],
		],
        'id',
		'orderlist',
        'name',
		[
            'attribute' => 'sort',
			'value' => function($model) {
				return $model->getPointName('shop-sort-flower', $model->sort);
			},
		],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return $model->formatTimestamp($model->created_at);
            },
        ],
		[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return $model->formatTimestamp($model->updated_at);
            },
        ],
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->getKeyName('status', $model->status);
			}
        ],
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);

$menuInfos = $this->context->menuInfos['menus'];
if (in_array('shop_goods-snapup_add', array_keys($menuInfos))) {
	$url = $menuInfos['shop_goods-snapup_add']['url'];
	$operationName = '加入抢购';

	echo '<div class="form-group">'
		. Html::submitButton('选中项加入抢购', ['onclick' => 'operationForSelected("' . $url . '");', 'class' => 'btn btn-primary'])
		. '</div>';
}
