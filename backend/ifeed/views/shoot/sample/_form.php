<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->picture = $model->getAttachmentIds('picture');
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?php echo $form->field($model, 'site_code')->dropDownList($model->siteInfos, ['prompt' => '']); ?>
    <?php echo $form->field($model, 'sort')->dropDownList($model->sortDatas, ['prompt' => Yii::t('admin-common', 'Select Sort')]); ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= $model->uploadElem('sample', 'picture'); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
