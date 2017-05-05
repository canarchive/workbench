<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
print_r($model);

$starElems = [
	0 => '',
	1 => '1星',
	2 => '2星',
	3 => '3星',
	4 => '4星',
	5 => '5星',
];

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'merchant_id')->dropDownList($model->merchantInfos, ['prompt' => Yii::t('admin-common', 'Select Merchant')]); ?>
    <?= $form->field($model, 'star')->dropDownList($starElems); ?>
    <?= $form->field($model, 'user_id')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'content')->textarea(['rows' => 2]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
