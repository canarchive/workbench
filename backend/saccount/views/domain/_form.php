<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code')->textInput(['maxlength' => 128]) ?>
    
    <?= $form->field($model, 'domain_pc')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'domain_mobile')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'stat_code')->textarea(['maxlength' => 128]) ?>
    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
