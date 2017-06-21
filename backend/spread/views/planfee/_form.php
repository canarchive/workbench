<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'show_num')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'hit_num')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'fee')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'account_id')->dropDownList($model->getPointInfos('account'), ['prompt' => '']); ?>    
    <?= $form->field($model, 'plan_id')->dropDownList($model->getPointInfos('plan'), ['prompt' => '']); ?>    
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
