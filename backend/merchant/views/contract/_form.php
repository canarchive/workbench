<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant-pond'), ['prompt' => '', 'disabled' => true]); ?>
    <?= $form->field($model, 'created_day')->textInput([]) ?>
    <script type="text/javascript">
        $(function () {
            $('#contract-created_day').datetimepicker({locale: 'zh-CN', format: 'YYYYMMDD'});
        });
    </script>
    <?= $form->field($model, 'pay_day')->textInput() ?>
    <script type="text/javascript">
        $(function () {
            $('#contract-pay_day').datetimepicker({locale: 'zh-CN', format: 'YYYYMMDD'});
        });
    </script>
    <?= $form->field($model, 'saleman_id')->dropDownList($model->getPointInfos('saleman'), ['prompt' => '']); ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'serial')->textInput() ?>
    <?= $form->field($model, 'fund')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
