<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'password')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'domain_id')->dropDownList($model->domainInfos, ['prompt' => Yii::t('admin-common', 'Select Domain')]); ?>
    <?= $form->field($model, 'channel')->dropDownList($model->channelInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant')->dropDownList($model->merchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'statusInfos')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
