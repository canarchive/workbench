<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\ueditor\UEditor;
use common\widgets\FileUploadUI;

$attachmentModel = $model->_newModel('attachment');
$thumb = $attachmentModel->getFieldInfos('sample', 'thumb');
//$picture = $attachmentModel->getFieldInfos('sample', 'picture');
//$model->picture = $attachmentModel->getFieldIds('sample', 'picture', $model->id); 

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'sort')->dropDownList($model->sortInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'thumb')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[thumb]',
        'url' => ['/eale/gallerycms-upload/index', 'table' => 'sample', 'field' => 'thumb', 'id' => $model->id],
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
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
	<?= $form->field($model, 'content')->widget(Ueditor::className(),[]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
