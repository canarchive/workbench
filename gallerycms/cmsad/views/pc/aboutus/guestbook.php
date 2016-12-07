<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'common', 'public', 'style', 'free-ask',
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="section">
    <!-- 免费咨询 -->
    <div class="free-ask-main">
        <div class="free-ask">
            <div class="icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/review-icon.jpg" alt=""></div>
            <div class="title">
                <span>意见反馈</span></div>
            <p class="sug-tips">留下您的宝贵意见，我们会在第一时间回复您</p>
            <!--<form action="/feed_back/submit" method="post" id="formdata" enctype="multipart/form-data">-->
            <?php $form = ActiveForm::begin(['options' => ['id' => 'formdata']]); ?>
                <div class="con">
                    <div class="form">
                        <!--<div class="textfile identity">
                            <span class="t">身份</span>
                            <div class="client_id">
                                <input type="radio" name="client" value="1" checked="checked" />
                                <span>老客户</span>
                                <input type="radio" name="client" value="0" />
                                <span>新客户</span></div>
                        </div>-->
                        <div class="textfile">
                            <span class="t">
                                <i>*</i>公司名称</span>
                            <input type="text" name="company_name" /></div>
                        <div class="textfile">
                            <span class="t">
                                <i>*</i>手机号码</span>
                            <input type="text" name="mobile" /></div>
                        <!-- <div class="textfile yzm">
                        <span class="t"></span>
                        <input type="text" value="输入验证码" />
                        <a href="###">短信验证</a></div> -->
                        <div class="textfile wherecity wrap">
                            <span class="t">
                                <i>*</i>所在城市</span>
                            <div class="nice-select marginr gpp" name="nice-select">
                                <input type="text" class="gp" value="请选择省份" id="gp_bottom" name="province" readonly>
                                <ul class="province"></ul>
                            </div>
                            <div class="nice-select gtt" name="nice-select">
                                <input type="text" class="gt" id="gt_bottom" value="请选择城市" name="city" readonly>
                                <ul class="city"></ul>
                            </div>
                        </div>
                        <div class="textfile lxman">
                            <span class="t">
                                <i>*</i>联系人</span>
                            <input type="text" name="contact" />
                            <div class="appellation">
                                <input type="radio" name="gender" value="1" checked="checked" />
                                <span>先生</span>
                                <input type="radio" name="gender" value="0" />
                                <span>女士</span></div>
                        </div>
                        <div class="textfile">
                            <span class="t">
                                <i></i>邮箱地址</span>
                            <input type="text" id="email_bottom3" name="email" /></div>
                        <div class="textfile suggestion">
                            <span class="t">
                                <i>*</i>反馈意见</span>
                            <textarea name="content" id="suggestion"></textarea>
                        </div>
                        <!--<div class="textfile jt">
                            <span class="t">截图</span>
                            <input type="file" name="pic" />
                            <a href="#">点击插入</a>
                        </div>-->
                        <div class="textfile jt">
                            <span class="t"></span>
                            <a href="javascript:" class="submit feedbackSubmit" style="border: 0;">提交</a></div>
                        <!-- <div class="textfile">
                        <a href="###" class="submit">提交申请</a></div> -->
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<script>$(function() {
        // 邮箱后缀名自动加载
        $('#email_bottom').mailAutoComplete();
        // 城市选择加载
        $('#gp_bottom').cityselect({
            cityNode: $('#gt_bottom'),
            districtNode: $('#gd_bottom')
        });
    });</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.form.main.js"></script>
<script>$(function() {
        var feedbackTime = true;
        $('#email_bottom3').mailAutoComplete({
            width: '306px'
        });

        function showRequest() {
            if (!feedbackTime) {
                alert('已提交，不需要重复提交！');
                return;
            }
            var form = $("#formdata");
            var company = form.find("input[name=company_name]");
            var mycall = form.find("input[name=mobile]");
            var gp = form.find("input[name=province]");
            var gt = form.find("input[name=city]");
            var name = form.find("input[name=contact]");
            var gender = form.find("input[name='gender']:checked");
            var email = form.find("input[name=email]");
            var content = form.find("textarea[name=content]");
            //var mcode = form.find("input[name=mcode]");
            //$('#hidden_value').val(admin_add);
            if (content.val() == '' || gp.val() == '' || gt.val() == '' || gp.val() == '请选择省份' || gt.val() == '请选择城市' || mycall.val() == '' || name.val() == '') {
                alert('信息不能为空!');
                return false;
            }
            if (!validate.checkMobile(mycall.val())) {
                alert('手机号码格式有误');
                return false;
            }
            if (!validate.checkEmail(email.val())) {
                alert('email格式有误');
                return false;
            }
            feedbackTime = false;
            return true;
        }

        $('.feedbackSubmit').click(function() {
            $('#formdata').ajaxSubmit({
                beforeSubmit: showRequest,
                //提交前处理
                success: function(data) {
                    if (data.status != '400') {
                        // 允许提交
                        feedbackTime = true;
                        alert('亲，我们已经收到你的意见反馈，会尽快处理');
                        return false;
                    }
                    feedbackTime = false;
                    setTimeout(function() {
                        feedbackTime = true;
                    },
                    60000);
                    alert(data.message);
                    return;
                },
                //处理完成
                resetForm: true,
                dataType: 'json'
            });
        });
    });</script>
