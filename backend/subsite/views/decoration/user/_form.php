<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;

$merchantInfos = $model->getPointInfos('merchant', ['noPriv' => true, 'where' => $this->context->getMerchantWhere()]);
$channelInnerInfos = $this->context->isMerchantEntrance() ? ['semspider' => '第三方SEM'] : $model->channelInnerInfos;
$serviceInfos = $this->context->isMerchantEntrance() ? ['31' => '贺森'] : $model->getPointInfos('service', ['noPriv' => true, 'where' => ['status' => 1]]);
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'mobile')->textInput() ?>
    <?= $form->field($model, 'area_input')->textInput() ?>
    <?= $form->field($model, 'city_input')->textInput() ?>
    <?= $form->field($model, 'city_code')->dropDownList($model->getPointInfos('company', ['indexName' => 'code', 'where' => ['status' => 2]]), ['prompt' => '']); ?>
    <?= $form->field($model, 'channel')->dropDownList($channelInnerInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($merchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'service_id')->dropDownList($serviceInfos, ['prompt' => '']); ?>
    <?php if (!$this->context->isMerchantEntrance()) { ?>
    <?= $form->field($model, 'notice_merchant')->dropDownList($model->noticeMerchantInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'notice_user')->dropDownList($model->noticeUserInfos, ['prompt' => '']); ?>
    <?php } ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'message')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
