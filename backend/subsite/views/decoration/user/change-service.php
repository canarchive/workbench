<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;


$menu = $this->getMenuData('subsite_decoration_user_change-service');
$url = isset($menu['url']) ? $menu['url'] . '?id=' . $model->id : '';
?>

<div class="menu-form">
<?php
$form = ActiveForm::begin([
    'id' => 'list-form',
    'method' => 'get',
    'action' => $url,
    'options' => ['class' => 'form-horizontal'],
]);
?>
    <?= $form->field($model, 'name')->textInput(['disabled' => true, 'maxlength' => 128]) ?>
    <?= $form->field($model, 'service_id_point')->radioList($model->getPointInfos('service', ['noPriv' => true, 'where' => ['id' => $serviceIds]]), ['prompt' => '', 'name' => 'service_id', 'inline' => true]); ?>

    <?= $this->render('@backend/views/common/form_button', ['model' => $model]); ?>
    <?php ActiveForm::end(); ?>
</div>
