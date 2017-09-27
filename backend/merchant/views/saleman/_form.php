<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'user_id')->dropDownList($model->getPointInfos('merchant-user'), ['prompt' => '']); ?>
    <?= $form->field($model, 'role')->dropDownList($model->roleInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'mobile')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
