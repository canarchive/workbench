<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant'), ['prompt' => '']); ?>
    <?= $form->field($model, 'pay_day')->textInput() ?>
    <script type="text/javascript">
        $(function () {
            $('#fund-pay_day').datetimepicker({locale: 'zh-CN', format: 'YYYYMMDD'});
        });
    </script>
    <?= $form->field($model, 'saleman_id')->dropDownList($model->getPointInfos('saleman'), ['prompt' => '']); ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'fund')->textInput() ?>
    <?= $form->field($model, 'refund')->textInput() ?>
    <?= $form->field($model, 'deduct')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'record')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
