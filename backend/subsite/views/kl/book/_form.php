<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->service_at = empty($service_at) ? time() : $service_at;
//$model->productInfo = str_replace('<br />', "\n", $model->productInfo);
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 128, 'disabled' => true]) ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'service_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#klbook-service_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>

    <div class="form-group field-klbook-productinfo">
        <label class="control-label" for="klbook-productinfo">Product Info</label>
        <textarea id="klbook-productinfo" class="form-control" name="KlBook[productInfo]" disabled="" rows="2"><?= str_replace('<br />', "\n", $model->productInfo); ?></textarea>
        <p class="help-block help-block-error"></p>
    </div>

    <div class="box-inner">
        <div data-original-title="" class="box-header well">
            <h2>优惠券</h2>
            <div class="box-icon">
                 <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            </div>
        </div>
        <div class="box-content">
        <?php foreach ($model->productInfos as $pInfo) { if (empty($pInfo['coupon'])) { continue; } ?>
            <div prompt="">
                <label class="control-label" for="sample-tag"><?= $pInfo['product']; ?></label>
                <label class="radio-inline"><input name="KlBook[couponData][<?= $pInfo['id']; ?>]" value="0" <?php if ($pInfo['coupon_status'] == '未使用') { echo 'checked=""'; } ?> type="radio">未使用</label>
                <label class="radio-inline"><input name="KlBook[couponData][<?= $pInfo['id']; ?>]" value="1" <?php if ($pInfo['coupon_status'] == '已使用') { echo 'checked=""'; } ?> type="radio"> 已使用</label>
            </div>
        <?php } ?>
        </div>
    </div>

    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
