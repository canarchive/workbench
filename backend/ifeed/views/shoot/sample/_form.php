<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model->picture = $model->getAttachmentIds('sample', 'picture');
if (empty($model->site_code) || !in_array($model->site_code, array_keys($model->siteCodeInfos))) {
    exit('请返回');
}
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?php echo $form->field($model, 'site_code')->dropDownList($model->siteCodeInfos, ['prompt' => '', 'disabled' => true]); ?>
    <?php echo $form->field($model, 'sort', ['inline' => true])->radioList($model->getPointInfos('shoot-sort', ['indexName' => 'code', 'where' => ['site_code' => $model->site_code]]), ['prompt' => '']); ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= $model->uploadElem('sample', 'picture'); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
