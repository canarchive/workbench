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
    default:
        $columns[] = $field;
    }
}
$columns = array_merge($columns, $searchModel->reportBaseColumns);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];
$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('_nav', ['view' => 'channel', 'fields' => $searchModel->fields]);
if (in_array('merchant_id', $searchModel->fields)) {
echo $this->render('_nav-merchant', ['model' => $searchModel]);
}
if (in_array('channel', $searchModel->fields)) {
echo $this->render('_nav-channel', ['model' => $searchModel]);
echo $this->render('_nav-client', ['model' => $searchModel]);
}
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
