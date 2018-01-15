<?php
use yii\helpers\Url;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		[
			'format' => 'raw',
			'attribute' => 'name',
			'value' => function($model) {
				$url = Yii::getAlias('@gallerycmsurl') . '/info/' . $model->id . '.html';
				return "<a href='{$url}' target='_blank'>{$model->name}</a>";
			}
		],
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				return $model->getAttachmentImg($model->thumb, false);
			}
		],
		[
			'attribute' => 'category_code',
			'value' => function($model) {
                return $model->category_code;
				return $model->categoryInfos[$model->category_id];
			}
		],		
		[
			'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		],		
    ],
];

echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
