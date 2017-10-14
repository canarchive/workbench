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
$columns['change'] = [
    'format' => 'raw',
    'attribute' => 'change-service',
    'value' => function($model) {
        $menu = $this->getMenuData('subsite_decoration_user_change-service');
        if (empty($menu)) {
            return '';
        }
        $opeStr = "<a href='{$menu['url']}?id={$model->id}'>切换客服</a><br />";
        return $opeStr;
    },

];
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
