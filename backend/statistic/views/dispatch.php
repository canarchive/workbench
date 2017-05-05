<?php
$columns = [];

foreach ($searchModel->fields as $field) {
    switch ($field) {
    case 'merchant_id':
        $columns[] = [
            'attribute' => $field,
            'value' => function ($model) {
                $info = $model->merchantInfo;
                $name = isset($info['name']) ? $info['name'] : '';
                return $name;
            }
        ];
        break;
    case 'service_id':
        $columns[] = [
            'attribute' => $field,
            'value' => function ($model) {
                $info = $model->serviceData;
                $name = isset($info['name']) ? $info['name'] : '';
                return $name;
            }
        ];
        break;
    default:
        $columns[] = $field;
    }
}
$columns = array_merge($columns, ['dispatch_num', 'back_reply_num', 'back_confirm_num']);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];
$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('_nav', ['view' => 'dispatch', 'fields' => $searchModel->fields]);
echo $this->render('_nav-dispatch', ['model' => $searchModel]);
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
