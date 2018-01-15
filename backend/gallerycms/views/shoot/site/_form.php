<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\widgets\FileUploadUI;

$attachmentModel = $model->_newModel('attachment');
$logo = $attachmentModel->getFieldInfos('site', 'logo');
$logoMobile = $attachmentModel->getFieldInfos('site', 'logo_mobile');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'brief')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'domain')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'domain_mobile')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo]',
        'url' => ['/shoot/gallerycms-upload/index', 'table' => 'site', 'field' => 'logo', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $logo['isSingle'],
			'idField' => Html::getInputId($model, 'logo'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $logo['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'logo_mobile')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo_mobile]',
        'url' => ['/shoot/gallerycms-upload/index', 'table' => 'site', 'field' => 'logo_mobile', 'id' => $model->id],
		'gallery' => true,
        'fieldOptions' => [
			'isSingle' => $logoMobile['isSingle'],
			'idField' => Html::getInputId($model, 'logo_mobile'),
            'accept' => 'image/*'
        ],
        'clientOptions' => [
		    //'dataType' => 'json',
			'maxFileSize' => $logoMobile['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'meta_description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
