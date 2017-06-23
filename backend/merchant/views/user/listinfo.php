<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'name',
        'mobile',
        [
            'attribute' => 'role',
            'value' => function($model) {
                return $model->roleStr;
            },
        ],
        [
            'attribute' => 'merchant',
            'value' => function($model) {
                return $model->userMerchantStr;
            },
        ],
        /*[
            'format' => 'raw',
            'attribute' => 'email',
            'value' => function($model) {
                return Yii::$app->formatter->asEmail($model->email);
            }
        ],*/
        'login_num',
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  $model->formatTimestamp($model->created_at);
            },
        ],
        [
            'attribute' => 'last_at',
            'value'=> function($model){
                return  $model->formatTimestamp($model->last_at);
            },
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->getKeyName('status', $model->status);
            },
        ],
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
