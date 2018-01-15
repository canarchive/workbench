<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\ueditor\UEditor;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?php echo $form->field($model, 'site_code')->dropDownList($model->siteInfos, ['prompt' => '']); ?>
    <?php echo $form->field($model, 'position')->dropDownList($model->positionInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= $model->uploadElem('adpicture', 'thumb'); ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= $model->uploadElem('adpicture', 'picture'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
