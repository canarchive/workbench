<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'plan_id')->dropDownList($model->planInfos, ['prompt' => Yii::t('admin-common', 'Select Plan')]); ?>
    <?= $form->field($model, 'account_id')->dropDownList($model->accountInfos, ['prompt' => Yii::t('admin-common', 'Select Account')]); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
