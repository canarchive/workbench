<?php
$columns = [];

foreach ($this->context->searchModel->fields as $field) {
    switch ($field) {
    case 'merchant_id':
        $columns[] = [
            'attribute' => $field,
            'value' => function ($model) {
                return $model->getPointName('merchant', $model->merchant_id);
            }
        ];
        break;
    default:
        $columns[] = $field;
    }
}
$columns = array_merge($columns, $this->context->searchModel->reportBaseColumns);

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];
echo $this->render('_nav', ['view' => 'channel', 'fields' => $this->context->searchModel->fields]);
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
