<?php
$columns = [
    'id' => 'id',
    'created_month',
    'service_id' => [
        'attribute' => 'service_id',
        'value' => function($model){
            return $model->getPointName('service', $model->service_id);
        }
    ],
    'info_num',
    'wage',
    'wage_ext',
    'status' => [
        'attribute' => 'status',
        'value' => function($model) {
            return $model->getKeyName('status', $model->status);
        }
    ],
];
if (isset($this->context->limitSearch)) {
    unset($columns['id']);
}
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];

if (isset($this->context->limitSearch)) {
    $searchContent = '';
} else {
    $searchContent = $this->render('@baseapp/common/views/searchs/_search', ['elems' => $searchDatas, 'model' => $searchModel]);
}

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
