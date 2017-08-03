<?php
$columns = [];

foreach ($this->searchModel->fields as $field) {
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
$columns = array_merge($columns, $this->searchModel->getShowFields());

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
