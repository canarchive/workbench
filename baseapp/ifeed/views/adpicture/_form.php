<?php
use yii\bootstrap\ActiveForm;

$labelBase = '缩略图';
$labelPosition = [
    'slide' => '（尺寸2565 X 650 px)',
    'indexthree' => '（尺寸365 X 263 px)',
    'announce' => '（尺寸 194 X 215; 194 X 392; 291 X 607; 485 X 607; 194 X 303; 194 X 304 px）',
    'fivepicture' => '（尺寸 583 X 382; 583 X 382; 583 X 213; 290 X 213; 290 X 213 px）',
];
//$label = $labelBase . $labelPosition[$model->position];
$pageInfos = $model->pageInfos;
$breadCrumbExt = !empty($model->site_code) ? $model->siteInfos[$model->site_code]['name'] : '';
$breadCrumbExt .= !empty($model->page) ? '-' . $pageInfos[$model->page] : '';
$breadCrumbExt .= !empty($model->position) ? '-' . $model->positionInfos[$model->position] : '';
$this->params['breadCrumbExt'] = $breadCrumbExt;
$model->thumb = $model->getAttachmentIds('adpicture', 'thumb');
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <input type="hidden" name="site_code" value="<?= $model->site_code; ?>" />
    <input type="hidden" name="position" value="<?= $model->position; ?>" />
    <input type="hidden" name="page" value="<?= $model->page; ?>" />
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'url')->textInput() ?>
    <?php //echo $form->field($model, 'thumb')->hiddenInput()->label($label); ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= $model->uploadElem('adpicture', 'thumb'); ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
