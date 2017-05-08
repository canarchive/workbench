<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'client_type')->textInput(['maxlength' => 128, 'disabled' => true]) ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 128, 'disabled' => true]) ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'service_at')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#klbook-service_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
