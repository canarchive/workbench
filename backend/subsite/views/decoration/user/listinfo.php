<?php
$ignores = [];
switch ($this->context->searchModel->status) {
case 'follow-plan':
	$ignores = ['status', 'invalid_status'];
	break;
case 'bad':
	$ignores = ['status', 'callback_again'];
	break;
default:
	$ignores = ['invalid_status', 'callback_again'];
}
$columns = $this->context->searchModel->getColumnsUser($ignores);
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
