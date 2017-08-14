<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => $model->formatTemplateDatas('show'),
];

echo $this->render('@app/views/common/view', ['detailViewParams' => $detailViewParams]);
