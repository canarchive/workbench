<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use common\ueditor\UEditor;
use common\widgets\FileUploadUI;

$this->params['breadCrumbExt'] = !empty($model->sort) ? $model->sortInfos[$model->sort] : '';
$attachmentModel = $model->_newModel('attachment');
$thumb = $attachmentModel->getFieldInfos('sample', 'thumb');
$model->tag = empty($model->tag) ? '' : explode(',', $model->tag);
$noTags = ['student', 'studentwork', 'campus', 'work'];
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'orderlist')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'recommend')->dropDownList($model->recommendInfos, ['prompt' => '']); ?>
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
    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'status')->dropDownList($model->statusInfos, ['prompt' => '']); ?>
    <?php if (!in_array($model->sort, $noTags)) { ?>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>标签</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
    <?php foreach ($model->sortInfos as $tagSort => $tagName) { if (in_array($tagSort, $noTags)) { continue; } ?>
    <?= $form->field($model, 'tag', ['inline' => true])->checkboxList($model->tagInfos[$tagSort])->label($tagName); ?>
    <?php } ?>
            </div>
        </div>

    <?php } ?>
	<?= $form->field($model, 'content')->widget(Ueditor::className(),[]) ?>

	<?= $this->render('@app/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
