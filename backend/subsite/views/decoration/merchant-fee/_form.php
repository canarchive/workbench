<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->day_start = empty($model->day_start) ? time() : $model->formatTimestamp($model->day_start);
$model->day_end = empty($model->day_end) ? time() : $model->formatTimestamp($model->day_end);
//$model->productInfo = str_replace('<br />', "\n", $model->productInfo);
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant'), ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant_sort')->dropDownList($model->merchantSortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'day_fee')->textInput(['maxlength' => 128]) ?>
    <script type="text/javascript">
        $(function () {
            $('#merchantfee-day_fee').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD'});
        });
    </script>

    <?= $form->field($model, 'fee')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'num')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'num_real')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'num_back')->textInput(['maxlength' => 128]) ?>
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

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
