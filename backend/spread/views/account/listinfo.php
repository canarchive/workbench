<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $this->context->searchModel->formatTemplateDatas('list'),
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
