<?php
use yii\bootstrap\ActiveForm;

$this->params['bodyClass'] = 'auth-back';
Yii::$app->params['seoTitle'] = '登录-' . Yii::$app->params['seoTitle'];
$fields = ['mobile', 'password'];
$data = [];
foreach ($fields as $field) {
    $data[$field]['value'] = !isset($info[$field]) || $field == 'password' ? '' : $info[$field]['value'];
    $data[$field]['error'] = isset($info[$field]['error']) ? $info[$field]['error'] : '';
}

?>
<div class="account-container">
    <div class="logo">
        <a href="/"></a>
    </div>
    <div class="wrapper">
        <h3 class="wrapper-title">商家登录</h3>
        <div class="row site-width">
            <?php $form = ActiveForm::begin(['options' => ['id' => 'loginForm']]); ?>
                <div class="small-12 columns">
                    <label for="mobile" class="tit">账号：</label>
                    <input type="text" class="form-text" name="mobile" placeholder="输入手机号" id="mobile" autocomplete="off" require value="<?= $data['mobile']['value']; ?>" />
                    <?php if (!empty($data['mobile']['error'])) { echo "<span class='error'>{$data['mobile']['error']}</span>"; } ?>
                </div>
                <div class="small-12 columns">
                    <label for="password" class="tit">密码：</label>
                    <input type="password" class="form-text" name="password" placeholder="输入密码" id="password" autocomplete="off" require />
                    <?php if (!empty($data['password']['error'])) { echo "<span class='error'>{$data['password']['error']}</span>"; } ?>
                </div>
                <!--<div class="small-12 columns">
                    <label for="username" class="tit">人机验证：</label>
                    <div class="l-captcha" data-site-key="<?= Yii::$app->params['luosimaoCaptcha']['siteKey']; ?>" data-width="100%" style="margin-bottom:10px;" data-callback="getRegResponse"></div>
                </div>-->
                <div class="small-12 columns">
                    <input type="submit" class="button radius success expand" value="立即登录" />
                    <!--<div class="reg-goto">
                        <a href='/signup.html'>立即注册</a>&nbsp;&nbsp;&nbsp;
                        <a href="/findpwd.html">忘了密码？</a>
                    </div>-->
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row site-width">
        <div class="account-footer"><?= Yii::$app->params['siteCopyRightInfo']. ' ' . Yii::$app->params['siteIcpInfo']; ?></div>
    </div>
</div>
<div class="reg-back"></div>
