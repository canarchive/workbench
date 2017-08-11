<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'account_id')->dropDownList($model->getPointInfos('account'), ['prompt' => '']); ?>    
    <?= $form->field($model, 'start_at')->textInput(); ?>
    <script type="text/javascript ">
        $(function () {
            $('#plan-start_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'end_end')->textInput(['maxlength' => 128]); ?>
    <script type="text/javascript ">
        $(function () {
            $('#plan-end_end').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant', ['where' => ['status' => 2]]), ['prompt' => '']); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
