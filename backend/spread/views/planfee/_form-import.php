<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\FileUploadUI;
use spread\models\Attachment;

$attachmentModel = new Attachment();
$import = $attachmentModel->getFieldInfos('planfee', 'import');
?>

<div class="menu-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'channel')->dropDownList($model->channelInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'client_type')->dropDownList($model->clientTypeInfos, ['prompt' => '']); ?>
    <?= $form->field($model, 'import')->hiddenInput(); ?>
    <?= FileUploadUI::widget([
        'model' => $attachmentModel,
        'attribute' => 'files[import]',
        'url' => Yii::getAlias('@spreadurl') . "/upload/planfee/import.html?id={$model->id}",
        'gallery' => true,
        'fieldOptions' => [
            'isSingle' => $import['isSingle'],
            'idField' => Html::getInputId($model, 'import'),
            'accept' => '*'
        ],
        'clientOptions' => [
            //'dataType' => 'json',
            'maxFileSize' => $import['maxSize'] * 1024,
        ],
    ]);
    ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 5])->label('日期      计划名称     账户     展现次数   点击次数   费用') ?>
    
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
