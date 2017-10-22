<?php
$columns = [
    'id' => 'id',
    'merchant_id' => [
        'attribute' => 'merchant_id',
        'value' => function($model){
            return $model->getPointName('merchant', $model->merchant_id);
        }
    ],
    'sort' => [
        'attribute' => 'sort',
        'value' => function($model) {
            return $model->getKeyName('sort', $model->sort);
        }
    ],
    'saleman_id' => [
        'attribute' => 'saleman_id',
        'value' => function($model){
            return $model->getPointName('saleman', $model->saleman_id);
        }
    ],
    'pay_day' => 'pay_day',
    'fund' => 'fund',
    'fee_unit' => 'fee_unit',
    'num' => 'num',
    'num_current' => [
        'format' => 'raw',
        'attribute' => 'num_current',
        'value' => function($model) {
            $menus = $this->context->menuInfos['menus'];
            return $model->getCurrentUrl('valid', $menus);
        }
    ],
    'num_back' => [
        'format' => 'raw',
        'attribute' => 'num_back',
        'value' => function($model){
            $menus = $this->context->menuInfos['menus'];
            return $model->getCurrentUrl('back', $menus);
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
    'is_first' => [
        'attribute' => 'is_first',
        'value' => function($model) {
            return $model->getKeyName('is_first', $model->is_first);
        }
    ],
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

$limitSearch = isset($this->context->limitSearch) ? $this->context->limitSearch : false;
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'limitSearch' => $limitSearch]);
