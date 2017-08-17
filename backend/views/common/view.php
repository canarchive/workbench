<?php

$detailViewParams = [
    'model' => $model,
    'attributes' => $model->formatTemplateDatas('show'),
];

echo $this->render('@backend/views/common/view', ['detailViewParams' => $detailViewParams]);

