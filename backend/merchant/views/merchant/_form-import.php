<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$managerInfo = $this->appDatas('managerInfo');
$params = [];
if ($managerInfo['role'] == 'service-saleman') {
    $saleman = $this->appDatas('salemanInfo');
    $model->saleman_id = $saleman['id'];
    $salemanIds[] = $saleman['id'];
    $params = ['where' => ['id' => [$saleman['id']]]];
}
?>

<div class="menu-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'city_code')->dropDownList($model->getPointInfos('company', ['indexName' => 'code', 'where' => ['status' => 2]]), ['prompt' => '']); ?>
    <?= $form->field($model, 'saleman_id')->dropDownList($model->getPointInfos('saleman', $params), ['prompt' => '']); ?>
    <?= $form->field($model, 'import')->hiddenInput(); ?>
    <?= $model->uploadElem('new_merchant', 'import', '*'); ?>
    
    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
