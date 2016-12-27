<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\widgets\FileUploadUI;

$attachmentModel = $model->_newModel('attachment');
$thumb = $attachmentModel->getFieldInfos('customer', 'thumb');

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128, 'disabled' => 'disabled']) ?>
    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 128, 'disabled' => 'disabled']) ?>
    <?= $form->field($model, 'message')->textarea(['disabled' => 'disabled']) ?>
    <?= $form->field($model, 'reply')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
