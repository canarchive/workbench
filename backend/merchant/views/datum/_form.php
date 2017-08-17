<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant'), ['prompt' => '']); ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'taxnumber')->textInput() ?>
    <?= $form->field($model, 'bank_name')->dropDownList($model->bankNameInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'bank_opening')->textInput() ?>
    <?= $form->field($model, 'bank_account')->textInput() ?>
    <?= $form->field($model, 'type')->dropDownList($model->typeInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= $form->field($model, 'address_reg')->textInput() ?>
    <?= $form->field($model, 'homeurl')->textInput() ?>
    <?= $form->field($model, 'homeurl_mobile')->textInput() ?>
    <?= $form->field($model, 'statusInfos')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
