<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'code')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'channel')->dropDownList($model->channelInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant')->dropDownList($model->merchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'domain')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'domain_mobile')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'statusInfos')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
