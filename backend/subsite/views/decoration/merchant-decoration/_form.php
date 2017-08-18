<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->day_start = empty($model->day_start) ? time() : $model->formatTimestamp($model->day_start);
$model->day_end = empty($model->day_end) ? time() : $model->formatTimestamp($model->day_end);
//$model->productInfo = str_replace('<br />', "\n", $model->productInfo);
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant'), ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant_sort')->dropDownList($model->merchantSortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'mobile_cps')->textInput() ?>

    <?= $form->field($model, 'fee')->textInput() ?>
    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'record')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
