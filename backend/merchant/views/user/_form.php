<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->password_new = '';
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php if ($model->scenario == 'create') { ?>
    <?= $form->field($model, 'mobile') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?php } else { ?>
    <?= $form->field($model, 'password_new')->passwordInput() ?>
    <?php } ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->merchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'role')->dropDownList($model->roleInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'service_id')->dropDownList($model->serviceInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'truename')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>

</div>
