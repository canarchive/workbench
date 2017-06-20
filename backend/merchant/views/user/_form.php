<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->password_new = '';

$model->merchant_show = $model->getUserMerchantInfos();
$model->merchant_show = array_keys($model->merchant_show);
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name') ?>
    <?php if ($model->scenario == 'create') { ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?php } else { ?>
    <?= $form->field($model, 'password_new')->passwordInput() ?>
    <?php } ?>
    <?= $form->field($model, 'mobile') ?>
    <?= $form->field($model, 'merchant_show')->dropDownList($model->getPointInfos('merchant', ['where' => $model->formatPriv('merchant_id', $this->context->privInfo)]), ['multiple' => 'multiple', 'prompt' => '']); ?>
    <?= $form->field($model, 'role')->dropDownList($model->roleInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>

</div>
