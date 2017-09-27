<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$menuInfos = $this->context->menuInfos;
$templateMethods = '';
$options = [];

if (!isset($gridViewParams)) {
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $this->context->searchModel->formatTemplateDatas('list', $this),
];
}
foreach ($menuInfos['appMenus'] as $appMenu) {
    if ($appMenu['display'] == 4) {
        $templateMethods .= "{{$appMenu['method']}} ";
    }
    if ($appMenu['extparam'] == 'modal') {
        $options[$appMenu['method']] = ['class' => 'btn-setting-my'];
    }
}
$templateMethods = trim($templateMethods);
if (empty($this->context->noActionColumn) && !empty($templateMethods)) {
    $actionColumn = [
        'class' => 'backend\components\CustomActionColumn',
        'template' => $templateMethods,
        'buttonOptions' => $options,
    ];
    $gridViewParams['columns'][] = $actionColumn;
}
if (!empty($this->context->showFilter)) {
    $gridViewParams['filterModel'] = $this->context->searchModel;
}

if (!isset($limitSearch) || empty($limitSearch)) {
    echo $this->render('@baseapp/common/views/searchs/_search');
}
?>
<div class="index">
    <?php
    if (!isset($this->params['havePjax'])) {
    echo GridView::widget($gridViewParams);
    } else {
    Pjax::begin(['enablePushState'=>false]);
    echo GridView::widget($gridViewParams);
    Pjax::end();
    }
    ?>
</div>
