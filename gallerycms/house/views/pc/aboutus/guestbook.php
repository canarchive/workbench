<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'new_global_forold', 'global', 'style_new', 'consult_online',
];
$this->params['jsFiles'] = [
    'jquery-1.10.2.min', 'to8torsas', 'tender', 'common', 'common_new_forold', 
];
?>
<div class="global_wrap" id='gloWrap'>
    <div id="content">
        <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
        <div class="new_content_fb">
            <p class="new_fb_p">意见反馈
                <span>Feedback</span></p>
            <div class="new_fb_con">
                <form action="" method="post" onSubmit="return checkForm(this);">
                    <p>
                        <span style="float:left;margin-top:8px;">反馈内容</span>
                        <textarea id="fb" class="textarea" name="textarea">我们非常重视您的建议，请在这里填写告诉我们</textarea></p>
                    <p class="new_p">
                        <span>联系电话</span>
                        <input type="text" id="text" class="new_text" name="text" value='请填写您的手机号码' />
                        <em>(<?= Yii::$app->params['siteNameBase']; ?>将对您的联系方式严格保密)</em></p>
                    <p class="new_tj_p">
                        <input type="submit" class="new_btn" value="提交" /></p>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">function checkForm(obj) {
            if (obj.fb.value == '' || obj.fb.value == '我们非常重视您的建议，请在这里填写告诉我们') {
                obj.fb.focus();
                alert('请输入您的建议！');
                return false;
            }
        }
        var fb = document.getElementById('fb');
        fb.onblur = function() {
            feedback = fb.value;
            if (feedback == '') {
                fb.value = '我们非常重视您的建议，请在这里填写告诉我们';
            }
        }
        fb.onfocus = function() {
            feedback = fb.value;
            if (feedback == '我们非常重视您的建议，请在这里填写告诉我们') {
                fb.value = '';
            }
        }

        var email = document.getElementById('text');
        email.onblur = function() {
            emailAddress = email.value;
            if (emailAddress == '') {
                email.value = '请填写您的手机号码';
            }
        }
        email.onfocus = function() {
            emailAddress = email.value;
            if (emailAddress == '请填写您的手机号码') {
                email.value = '';
            }
        }</script>
    <div id="small_window"></div>
</div>
