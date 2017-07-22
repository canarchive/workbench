<?php

use yii\bootstrap\ActiveForm;
?>
<div class="menu-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'name_ext')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos); ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
	<?= $model->uploadElem('position', 'picture'); ?>
    <?= $form->field($model, 'picture_mobile')->hiddenInput(); ?>
	<?= $model->uploadElem('position', 'picture_mobile'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
