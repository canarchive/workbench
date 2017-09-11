<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use gallerycms\models\Attachment;

$attachmentModel = $model->_newModel('attachment');
$urlPrefix = isset($attachmentModel->urlPrefix) ? "/{$attachmentModel->urlPrefix}" : '';
$logo = $attachmentModel->getFieldInfos('friendlink', 'logo');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => Yii::t('admin-common', 'Select Sort')]); ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput() ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo]',
        'url' => ["{$urlPrefix}/gallerycms-upload/index", 'table' => 'friendlink', 'field' => 'logo', 'id' => $model->id],
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
    <?= $form->field($model, 'contact')->textInput() ?>
    <?= $form->field($model, 'mobile')->textInput() ?>
    <?= $form->field($model, 'qq')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

    <?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
