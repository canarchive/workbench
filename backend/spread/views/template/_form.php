<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant'), ['prompt' => '']); ?>
    <?= $form->field($model, 'have_pc', ['inline' => true])->radioList($model->havePcInfos); ?>
    <?= $form->field($model, 'have_mobile', ['inline' => true])->radioList($model->haveMobileInfos); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
