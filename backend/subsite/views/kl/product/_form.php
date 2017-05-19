<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'book_id')->dropDownList($model->bookInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'product')->dropDownList($model->productInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'product_num')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'coupon')->dropDownList($model->couponInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'coupon_status')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
