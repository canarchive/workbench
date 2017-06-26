<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'sort_code')->dropDownList($model->sortCodeInfos, ['prompt' => '']); ?>
    <?php if (isset($addMul) && $addMul) { ?>
    <?= $form->field($model, 'add_mul')->textarea(['rows' => 10]) ?>
	<?php } else { ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'meta_title'); ?>
    <?= $form->field($model, 'meta_keyword'); ?>
    <?= $form->field($model, 'meta_description')->textarea(['rows' => 2]) ?>
    <?php } ?>
		
	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
