<?php

use yii\bootstrap\ActiveForm;
?>
<div class="menu-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'is_require')->dropDownList($model->isRequireInfos); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $form->field($model, 'item_value')->textarea(['rows' => 2]) ?>

	<?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
