<?php
$ignores = [];
switch ($searchModel->status) {
case 'follow-plan':
	$ignores = ['status', 'invalid_status'];
	break;
case 'bad':
	$ignores = ['status', 'callback_again'];
	break;
default:
	$ignores = ['invalid_status', 'callback_again'];
}
$columns = $searchModel->getColumnsUser($ignores);
$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];

$searchContent = $this->render('@baseapp/common/views/searchs/_search', ['elems' => $searchDatas, 'model' => $searchModel]);
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
