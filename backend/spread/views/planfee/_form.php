<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'number')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'consume')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'impression')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'account_id')->dropDownList($model->accountInfos, ['prompt' => Yii::t('admin-common', 'Select Account')]); ?>    
    <?= $form->field($model, 'plan_id')->dropDownList($model->planInfos, ['prompt' => Yii::t('admin-common', 'Select Plan')]); ?>    
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
