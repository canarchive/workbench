<?php

use yii\bootstrap\ActiveForm;

$merchantInfos = $model->getPointInfos('merchant', ['where' => ['status' => 2]]);
$model->userName = $model->userModel->name;
$model->houseAddress = $model->houseModel->region . '-' . $model->houseModel->address;
$model->houseArea = $model->houseModel->house_area;
$model->houseType = $model->houseModel->getKeyName('house_type', $model->houseModel->house_type);
$model->houseSort = $model->houseModel->getKeyName('house_sort', $model->houseModel->house_sort);
$model->note = $model->guestbookModel->content;

$minutes = $model->isLock === true ? true : $model->isLock;
$statusLabel = $minutes === true ? '状态 (超过24小时，您无法更改订单状态)' : '状态 （距离锁定订单状态还有' . $minutes . ')';
$statusLabel = $model->merchant_id == 694 ? '状态' : $statusLabel;
$statusInfos = $model->statusInfos;
unset($statusInfos['back_confirm']);
$statusOption = $minutes === true || $model->merchant_id == 694 ? ['name' => 'status', 'prompt' => '', 'disabled' => true] : ['name' => 'status'];
$model->merchant_id = $model->getPointName('merchant', $model->merchant_id);
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'userName')->textInput(['disabled' => true, 'maxlength' => 128]) ?>
    <?= $form->field($model, 'mobile')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'merchant_id')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'houseAddress')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'houseArea')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'houseType')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'houseSort')->textInput(['disabled' => true]) ?>
    <?= $form->field($model, 'status')->dropDownList($statusInfos, $statusOption)->label($statusLabel); ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 2, 'name' => 'content']) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
