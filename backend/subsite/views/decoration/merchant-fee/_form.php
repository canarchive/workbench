<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->day_start = empty($model->day_start) ? time() : $model->formatTimestamp($model->day_start);
$model->day_end = empty($model->day_end) ? time() : $model->formatTimestamp($model->day_end);
//$model->productInfo = str_replace('<br />', "\n", $model->productInfo);
$model->pay_day = empty($model->pay_day) ? '' : $model->pay_day;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant'), ['prompt' => '']); ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'pay_day')->textInput(['maxlength' => 128]) ?>
    <script type="text/javascript">
        $(function () {
            $('#merchantfee-pay_day').datetimepicker({locale: 'zh-CN', format: 'YYYYMMDD'});
        });
    </script>

    <?= $form->field($model, 'fund')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'fee_unit')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'num')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'day_start')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#merchantfee-day_start').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>
    <?= $form->field($model, 'day_end')->textInput(); ?>
    <script type="text/javascript">
        $(function () {
            $('#merchantfee-day_end').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
        });
    </script>

    <?= $form->field($model, 'note')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'record')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'is_first')->dropDownList($model->isFirstInfos, ['prompt' => '']); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
