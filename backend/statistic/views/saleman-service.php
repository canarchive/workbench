<?php
$columns = [];

foreach ($this->context->searchModel->fields as $field) {
    switch ($field) {
    case 'saleman_id':
        $columns[] = [
            'attribute' => $field,
            'value' => function ($model) {
                return $model->getPointName('saleman', $model->saleman_id);
            }
        ];
        break;
    default:
        $columns[] = $field;
    }
}
$columns = array_merge($columns, $this->context->searchModel->getShowFields());

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];
echo $this->render('_nav', ['view' => 'saleman-service', 'fields' => $this->context->searchModel->fields]);
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
