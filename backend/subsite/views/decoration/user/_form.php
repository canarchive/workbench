<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;

$merchantInfos = [];
foreach ($model->getMerchantAllInfos() as $key => $info) {
	if ($info['status'] == 2) {
		$merchantInfos[$key] = $info['name'];
	}
}
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'mobile')->textInput() ?>
    <?= $form->field($model, 'area_input')->textInput() ?>
    <?= $form->field($model, 'city_input')->textInput() ?>
    <?= $form->field($model, 'city_code')->dropDownList($model->companyInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'channel')->dropDownList($model->channelInnerInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($merchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'notice_merchant')->dropDownList($model->noticeMerchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'notice_user')->dropDownList($model->noticeUserInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'message')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
