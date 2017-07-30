<?php

$columns = [];

foreach ($searchModel->fields as $field) {
    switch ($field) {
    case 'service_id':
        $columns[] = [
            'attribute' => $field,
            'value' => function ($model) {
                return $model->getPointName('service', $model->service_id);
            }
        ];
        break;
    default:
        $columns[] = $field;
    }
}
$columns = array_merge($columns, $searchModel->getServiceBaseColumns());

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];
$searchContent = '';//$this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('_nav', ['view' => 'service', 'fields' => $searchModel->fields]);
echo $this->render('_nav-service', ['model' => $searchModel]);
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
