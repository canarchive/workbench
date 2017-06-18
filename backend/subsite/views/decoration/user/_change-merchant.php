<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use subsite\decoration\models\Service;

/*if ($this->context->isService) {
    $customInfos = ArrayHelper::map($this->context->serviceInfos, 'id', 'name');
} else {
    $customInfos = ArrayHelper::map(Service::find()->select('id, name')->where(['status' => 1])->all(), 'id', 'name');
}*/
$merchantInfos = [];
foreach ($model->getMerchantAllInfos() as $key => $info) {
	if ($info['status'] == 2) {
		$merchantInfos[$key] = $info['name'];
	}
}

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['disabled' => true, 'maxlength' => 128]) ?>
    <?= $form->field($model, 'mobile')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'area_input')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'city_input')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($merchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'notice_merchant')->dropDownList($model->noticeMerchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'notice_user')->dropDownList($model->noticeUserInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
