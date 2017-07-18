<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'import')->hiddenInput(); ?>
    <?= $model->uploadElem('new_merchant', 'import', '*'); ?>
    
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
