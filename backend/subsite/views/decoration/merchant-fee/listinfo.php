<?php
$columns = [
    'id' => 'id',
    'merchant_id' => [
        'attribute' => 'merchant_id',
        'value' => function($model){
            return $model->getPointName('merchant', $model->merchant_id);
        }
    ],
    'merchant_sort' => [
        'attribute' => 'merchant_sort',
        'value' => function($model) {
            return $model->getKeyName('merchant_sort', $model->merchant_sort);
        }
    ],
    'day_fee' => 'day_fee',
    'fee' => 'fee',
    'num' => [
        'format' => 'raw',
        'attribute' => 'num',
        'value' => function($model) {
            $menus = $this->context->menuInfos['menus'];
            return $model->getCurrentUrl('valid', $menus);
        }
    ],
    'num_real' => 'num_real',
    'num_current' => [
        'attribute' => 'num_current',
        'value' => function($model){
            return $model->_numCurrent();
        }
    ],
    'num_back' => 'num_back',
    'num_back_current' => [
        'attribute' => 'num_back_current',
        'value' => function($model){
            return $model->_numBackCurrent();
        }
    ],
    'day_start' => [
        'attribute' => 'day_start',
        'value'=> function($model){
            return $model->formatTimestamp($model->day_start);
        },
    ],
    'day_end' => [
        'attribute' => 'day_end',
        'value'=> function($model){
            return $model->formatTimestamp($model->day_end);
        },
    ],
    'status' => [
        'attribute' => 'status',
        'value' => function($model) {
            return $model->getKeyName('status', $model->status);
        }
    ],
];
if (isset($this->limitList)) {
    unset($columns['num_current']);
    unset($columns['num_back_current']);
}
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
