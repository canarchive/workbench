<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'city_code')->dropDownList($model->companyInfos, ['prompt' => Yii::t('admin-common', '')]); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->merchantInfos, ['prompt' => Yii::t('admin-common', 'Select merchant')]); ?>
    <?= $form->field($model, 'channel')->dropDownList($model->channelInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'sem_account')->dropDownList($model->semAccountInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'created_day')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#spreadfee-created_day').datetimepicker({locale: 'zh-CN', format: 'YYYYMMDD'});
        });
    </script>
    <?= $form->field($model, 'hit_num')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'fee')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'rate')->textInput(['maxlength' => 128]) ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
