<?php
use yii\bootstrap\ActiveForm;
Yii::$app->params['seoTitle'] = '商家注册-' . Yii::$app->params['seoTitle'];

$fields = ['mobile', 'name', 'password', 'email'];
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
        <h3 class="wrapper-title">新用户注册</h3>
        <div class="row site-width">
            <?php $form = ActiveForm::begin(['options' => ['id' => 'form']]); ?>
                <div class="small-12 columns">
                    <label for="mobile" class="tit">手机号码：</label>
                    <input type="text" name="mobile" id="mobile" require data-validate="mobile" value="<?= $data['mobile']['value']; ?>" />
                    <?php if (!empty($data['mobile']['error'])) { echo "<span class='error'>{$data['mobile']['error']}</span>"; } ?>
                </div>
                <div class="small-12 columns">
                    <label for="name" class="tit">用户名：</label>
                    <input type="text" name="name" id="name" require data-validate="name" autocomplete="off" value="<?= $data['name']['value']; ?>">
                    <?php if (!empty($data['name']['error'])) { echo "<span class='error'>{$data['name']['error']}</span>"; } ?>
                </div>
                <div class="small-12 columns">
                    <label for="password" class="tit">密码：</label>
                    <input type="password" name="password" id="password" require onpaste="return false" data-validate="password" data-equal="confirmpassword" autocomplete="off" />
                    <?php if (!empty($data['password']['error'])) { echo "<span class='error'>{$data['password']['error']}</span>"; } ?>
                </div>
                <div class="small-12 columns">
                    <label for="email" class="tit">电子邮箱：</label>
                    <input type="text" name="email" id="email"require data-validate="email" value="<?= $data['email']['value']; ?>" />
                    <?php if (!empty($data['email']['error'])) { echo "<span class='error'>{$data['email']['error']}</span>"; } ?>
                </div>
                <div class="small-12 columns">
                    <label for="captcha" class="tit">人机验证：</label>
                    <div class="l-captcha" data-site-key="<?= Yii::$app->params['luosimaoCaptcha']['siteKey']; ?>" data-width="100%" style="margin-bottom:10px;" data-callback="getRegResponse"></div>
                </div>
                <!--<div class="small-12 columns">点击下方的“注册”按钮即代表我同意
                    <a href="https://luosimao.com/docs/guid/18" target="_blank">《Luosimao 服务协议》</a></div>-->
                <div class="small-12 columns">
                    <input type="submit" class="button radius success expand" value="立即注册" />
                    <div class="reg-goto">已经有账户了？
                        <a href='/signin.html'>点此立即登录</a>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row site-width">
        <div class="account-footer"><?= Yii::$app->params['siteCopyRightInfo']; ?></div>
    </div>
</div>
<div class="reg-back"></div>
