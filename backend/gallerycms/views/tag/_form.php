<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?php if (isset($addMul) && $addMul) { ?>
    <?= $form->field($model, 'add_mul')->textarea(['rows' => 10]) ?>
    <?php } else { ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'seo_title'); ?>
    <?= $form->field($model, 'seo_keyword'); ?>
    <?= $form->field($model, 'seo_description')->textarea(['rows' => 2]) ?>
    <?php } ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
