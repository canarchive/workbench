<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\ueditor\UEditor;
use common\widgets\FileUploadUI;

$attachmentModel = $model->_newModel('attachment');
$thumb = $attachmentModel->getFieldInfos('adpicture', 'thumb');
$picture = $attachmentModel->getFieldInfos('adpicture', 'picture');

$labelBase = '缩略图';
$labelPosition = [
    'slide' => '（尺寸2565 X 650 px)',
    'indexthree' => '（尺寸365 X 263 px)',
    'announce' => '（尺寸 194 X 215; 194 X 392; 291 X 607; 485 X 607; 194 X 303; 194 X 304 px）',
    'fivepicture' => '（尺寸 583 X 382; 583 X 382; 583 X 213; 290 X 213; 290 X 213 px）',
];
$label = $labelBase . $labelPosition[$model->position];

$breadCrumbExt = !empty($model->site_code) ? $model->siteCodeInfos[$model->site_code] : '';
$breadCrumbExt .= !empty($model->page) ? '-' . $model->pageInfos[$model->page]['name'] : '';
$breadCrumbExt .= !empty($model->position) ? '-' . $model->positionInfos[$model->position] : '';
$this->params['breadCrumbExt'] = $breadCrumbExt;
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?php if (in_array($model->position, ['slide', 'indexthree'])) { ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?php } ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'thumb')->hiddenInput()->label($label); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/eale/gallerycms-upload/index', 'table' => 'adpicture', 'field' => 'thumb', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $thumb['isSingle'],
			'idField' => Html::getInputId($model, 'thumb'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $thumb['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?php if (in_array($model->position, ['indexthree'])) { ?>
    <?= $form->field($model, 'picture')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[picture]',
        'url' => ['/eale/gallerycms-upload/index', 'table' => 'adpicture', 'field' => 'picture', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $picture['isSingle'],
			'idField' => Html::getInputId($model, 'picture'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $picture['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?php } ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
