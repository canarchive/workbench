<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'account_id')->dropDownList($model->accountInfos, ['prompt' => Yii::t('admin-common', 'Select Account')]); ?>    
    <?= $form->field($model, 'put_at')->textInput(); ?>
    <script type="text/javascript ">
        $(function () {
            $('#plan-put_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'put_end')->textInput(['maxlength' => 128]); ?>
    <script type="text/javascript ">
        $(function () {
            $('#plan-put_end').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script><?= $form->field($model, 'merchant_id')->dropDownList([$model->merchantInfos], ['company' => Yii::t('admin-common', 'Select Merchant')]); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
