<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$companyInfos = $model->getPointInfos('company', ['indexName' => 'code', 'where' => ['status' => 2]]);
//var_dump($companyInfos);exit();
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'city_code')->dropDownList($model->getPointInfos('company', ['indexName' => 'code', 'where' => ['status' => 2]]), ['prompt' => '']); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'name_full')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => Yii::t('admin-common', 'Select Sort')]); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= $model->uploadElem('merchant', 'logo'); ?>
    <?= $form->field($model, 'homeurl')->textInput() ?>
    <?= $form->field($model, 'hotline')->textInput() ?>
    <?= $form->field($model, 'postcode')->textInput() ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= $form->field($model, 'brief')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'msg')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
