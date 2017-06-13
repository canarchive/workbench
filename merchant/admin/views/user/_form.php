<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->role = $model->getRoleInfos();
$model->password_new = '';
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php if ($model->scenario == 'edit-password') { ?>
    <?= $form->field($model, 'password_old')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'password_new')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'password_new_repeat')->passwordInput(['maxlength' => 255]) ?>
    <?php } else if ($model->scenario == 'edit-info') { ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'mobile') ?>
    <?php } else { ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'password_new')->passwordInput() ?>
    <?= $form->field($model, 'role')->dropDownList($model->roleInfos, ['multiple' => 'multiple', 'prompt' => '']); ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'mobile') ?>
    <?php if ($model->scenario == 'update') { ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?php } ?>
    <?php } ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>

</div>