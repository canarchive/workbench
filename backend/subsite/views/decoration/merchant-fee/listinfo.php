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
    'num',
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
