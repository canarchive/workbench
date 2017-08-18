<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->getPointInfos('merchant', ['where' => ['sort' => 'decoration']]), ['prompt' => '']); ?>
    <?= $form->field($model, 'merchant_sort')->dropDownList($model->merchantSortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'mobile_cps')->textInput() ?>

    <?= $form->field($model, 'msg')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'service_item')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'shop')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'advantage')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'scope_sort')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'scope_area')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'scope_ext')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
