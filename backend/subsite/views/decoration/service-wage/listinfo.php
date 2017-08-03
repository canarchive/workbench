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
    'wage',
    'mobile_num',
    'overall_mobile_num',
    'office_mobile_num',
    'part_mobile_num',
    'wage_ext',
    'info_num',
    'info_valid_num',
    'info_valid_overall_num',
    'info_valid_part_num',
    'info_valid_office_num',
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
    'columns' => $columns,
];
$limitSearch = isset($this->context->limitSearch) ? true : false;
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'limitSearch' => $limitSearch]);
