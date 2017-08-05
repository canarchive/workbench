<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->password_new = '';

$model->merchant_show = $model->getUserMerchantInfos();
$model->merchant_show = array_keys($model->merchant_show);
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if ($model->scenario == 'edit-password') { ?>
    <?= $form->field($model, 'password_old')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'password_new')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'password_new_repeat')->passwordInput(['maxlength' => 255]) ?>
    <?php } else if ($model->scenario == 'edit-info') { ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'email') ?>
    <?php } else { ?>

    <?php if ($model->scenario == 'create') { ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?php } else { ?>
    <?= $form->field($model, 'password_new')->passwordInput() ?>
    <?php } ?>
    <?= $form->field($model, 'mobile') ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'merchant_show')->dropDownList($model->getPointInfos('merchant'), ['multiple' => 'multiple', 'prompt' => '']); ?>
    <?= $form->field($model, 'role')->dropDownList($model->getPointInfos('merchant-role', ['indexName' => 'code'])); ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $form->field($model, 'create_service')->dropDownList($model->createServiceInfos); ?>
    <?php } ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>

</div>
