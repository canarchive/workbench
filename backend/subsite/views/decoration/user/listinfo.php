<?php
$ignores = [];
$status = (array) $this->context->searchModel->status;
$ignores = ['invalid_status', 'callback_again', 'out_status', 'follow_status'];
if (!empty($status) && in_array('follow', $status)) {
    unset($ignores[array_search('follow_status', $ignores)]);
} 
if (!empty($status) && in_array('bad', $status)) {
    unset($ignores[array_search('invalid_status', $ignores)]);
}
if (!empty($status) && in_array('valid-out', $status)) {
    unset($ignores[array_search('out_status', $ignores)]);
}
if (in_array('follow', $status)) {
    unset($ignores[array_search('callback_again', $ignores)]);
}
$columns = $this->context->searchModel->getColumnsUser($ignores);
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
