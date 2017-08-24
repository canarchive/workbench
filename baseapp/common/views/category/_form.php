<?php

use yii\widgets\ActiveForm;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'code'); ?>
    <?= $form->field($model, 'brief'); ?>
    <?= $form->field($model, 'parent_code')->dropDownList($model->selectInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'orderlist'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'meta_title'); ?>
    <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'meta_description')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
