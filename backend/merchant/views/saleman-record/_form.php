<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'saleman_id')->dropDownList($model->getPointInfos('saleman'), ['prompt' => '']); ?>
    <?= $form->field($model, 'created_day')->textInput(['maxlength' => 128]) ?>
    <script type="text/javascript">
        $(function () {
            $('#salemanrecord-created_day').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD'});
        });
    </script>
    <?= $form->field($model, 'record')->textarea(['rows' => 2]) ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
