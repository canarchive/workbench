<?php
$columns = [];

foreach ($searchModel->fields as $field) {
    switch ($field) {
    case 'merchant_id':
        $columns[] = [
            'attribute' => $field,
            'value' => function ($model) {
                return $model->merchant_id;
            }
        ];
        break;
    default:
        $columns[] = $field;
    }
}
$columns = array_merge($columns, ['visit_num', 'visit_num_success']);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];
$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('_nav', ['view' => 'keyword', 'fields' => $searchModel->fields]);
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
