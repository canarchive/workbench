<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<?php $this->beginContent('@backend/views/base/main-base.php'); ?>
<?= Html::csrfMetaTags() ?>
<div class="ch-container">
    <div class="row">
        <div class="col-md-12 center login-header"><h2><b><?= Yii::$app->params['siteNameBase']; ?>后台系统</h2></div>
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">请输入管理员账号和密码登录后台</div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'name')->label('管理员账号') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('密码') ?>
                <?= $form->field($model, 'rememberMe')->checkbox()->label('保存登录状态') ?>
                <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
