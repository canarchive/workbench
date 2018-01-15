<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?php echo $form->field($model, 'site_code')->dropDownList($model->siteInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'code')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'brief')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'price_range')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'meta_description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => Yii::t('admin-common', 'Select Status')]); ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
