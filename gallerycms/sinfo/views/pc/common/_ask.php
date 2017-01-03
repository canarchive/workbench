<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!-- 免费咨询 begin-->
<div class="free-ask">
    <div class="title">
        <span>免费咨询</span></div>
    <div class="con">
        <div class="form">
            <form action="" id="formbottom" onsubmit="return false">
                <input type="hidden" name="ischeckMobile" value="0" />
                <div class="textfile">
                    <span class="t">公司名称</span>
                    <input type="text" name="company" id="company_bottom"></div>
                <div class="textfile">
                    <span class="t">手机号码</span>
                    <input type="text" name="mobile" id="mycall_bottom"></div>
                <div class="textfile wherecity wrap">
                    <span class="t">所在城市</span>
                    <div class="nice-select marginr gpp" name="nice-select">
                        <input type="text" class="gp" value="请选择省份" readonly="" id="gp_bottom2" name="province"></div>
                    <div class="nice-select marginr gtt" name="nice-select">
                        <input type="text" class="gt" value="请选择城市" readonly="" id="gt_bottom2" name="city">
                        <ul class="city" style="display: none;"></ul>
                    </div>
                    <div class="nice-select gbb" name="nice-select">
                        <input type="text" class="gd" value="请选择区/县" readonly="" id="gd_bottom2" name="district">
                        <ul class="district" style="display: none;"></ul>
                    </div>
                </div>
                <div class="textfile lxman">
                    <span class="t">联系人</span>
                    <input type="text" name="truename" id="name_bottom">
                    <div class="appellation">
                        <input type="radio" name="sex" checked="checked" value="先生">
                        <span>先生</span>
                        <input type="radio" name="sex" value="女士">
                        <span>女士</span></div>
                </div>
                <div class="textfile z2">
                    <span class="t">邮箱地址</span>
                    <input type="text" name="email" id="email_bottom2"></div>
                <div class="textfile">
                    <a href="javascript:void(0);" data-formId="formbottom" class="submit zixunsubmit" value="99">提交</a></div>
            </form>
        </div>
        <div class="free-tips">我们会尽快联系您，等待期间需要获取更多信息，请
            <a href="/">继续访问</a>或
            <a href="/contactus.html" >联系我们</a>。感谢您对<?= Yii::$app->params['siteNameBase']; ?>产品及服务的支持。</div></div>
</div>
