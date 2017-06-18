<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use common\models\AttachmentCommon;

$attachmentModel = new AttachmentCommon();
$logo = $attachmentModel->getFieldInfos('company', 'logo');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'name_full')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'code_short')->textInput() ?>
    <?= $form->field($model, 'code')->textInput() ?>
    <?= $form->field($model, 'hotline')->textInput() ?>
    <?= $form->field($model, 'postcode')->textInput() ?>
    <?= $form->field($model, 'address')->textInput() ?>
    <?= $form->field($model, 'logo')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[logo]',
        'url' => ['/backend-upload/index', 'table' => 'company', 'field' => 'logo', 'id' => $model->id],
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
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
