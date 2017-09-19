<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use shop\models\Category;

?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->dropDownList($model->getPointInfos('shop-sort', ['indexName' => 'code'])); ?>    
    <?= $form->field($model, 'book_month')->dropDownList($model->bookMonthInfos, ['multiple' => 'multiple']); ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'price_market')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'slide')->hiddenInput(); ?>
	<?= $model->uploadElem('goods', 'slide'); ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
	<?= $model->uploadElem('goods', 'picture'); ?>
    <?= $form->field($model, 'keyword')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'content')->textarea(['rows' => 3]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos); ?>
    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
