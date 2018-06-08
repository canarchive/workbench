<?php
use yii\helpers\Url;

Yii::$app->params['tdkInfos']['title'] =  '喀什企业注册核名网站';
Yii::$app->params['tdkInfos']['keyword'] = '';
Yii::$app->params['tdkInfos']['description'] = '';
?>
<meta name="full-screen" content="yes">
<meta name="browsermode" content="application">
<meta name="x5-orientation" content="portrait">
<meta name="x5-fullscreen" content="true">
<meta name="x5-page-mode" content="app">
<meta name="msapplication-tap-highlight" content="no">
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/hegs/css/5e5fd-1089.css" type="text/css" rel="stylesheet">
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/hegs/css/da199-3874.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="http://asset.5895306.com/assetself/design/js/jquery-1.11.3.min.js"></script>
<div class="review-bg-gradient">
    <div class="bg2"></div>
</div>
<div class="res-container">
    <div class="review-title">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/hegs/img/kashi.png" alt="" class="review-title-chn">
		<!--<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/hegs/img/568f4-6377.png" alt="" class="review-title-en">-->
    </div>
    <div class="review-search review-js-need">
        <input type="text" id="companyName" placeholder="输入公司名称核名" value="">
        <div class="review-search-btn">核名</div>
        <div class="review-hot clearfix">
            <label>
                <i class="iconfont">&#xe683;</i>热搜词：</label>
<span>喀什优装保</span>
<span>兔班长科技</span>
<span>诚聚互联</span>
<span>得容科技</span>
<span>维纳亚科技</span>
<span>设到家</span>
<span>金地集团</span>
<span>新河动力</span>
<span>喀什度云马科技有限公司</span>
<span>北纬44度</span>
<span>喀什博诚会计事务所</span>
        </div>
    </div>
    <div class="review-list">
        <ul class="clearfix">
            <li>
                <h2>注册核名</h2>
                <p>拟注册公司名称是否已被注册，注册公司前需先核名</p>
                <div class="review-btn">点击核名</div></li>
            <li>
                <h2>企业核名</h2>
                <p>带字号已注册企业列表，基本信息，可以注册的行业公司等信息</p>
                <div class="review-btn">点击核名</div></li>
            <li>
                <h2>公司核名</h2>
                <p>核名公司是否已被注册，哪些行业可以注册等信息</p>
                <div class="review-btn">点击核名</div></li>
            <li>
                <h2>在线核名</h2>
                <p>在线核名，快速反馈结果，节约核名时间</p>
                <div class="review-btn">点击核名</div></li>
        </ul>
    </div>
    <?php //echo $this->render('_hegs-ext'); ?>
</div>
<div class="review-footer">
    <div class="company-footer">
        <p>喀什企业注册核名查询网站 @版权所有2018
		<br>企业注册服务热线：<a href="tel:4000890313" style="color: #999;">400 089 0313</a></p>
    </div>
</div>
<script type="text/javascript">
var g_context = {
    context: "/qhee-maker",
    sns_home: "http://my.qheemaker.com",
    base_url: "http://maker.qheemaker.com",
    account_url: 'qheemaker'
};
var g_center = {
    isMain: true,
    key: ''
};
var g_user = null;
var params = {
    "0": "company",
    "channel": "12",
    "__none__": ""
};
var g_config = {
    "serverContext": '/qhee-maker'
}
</script>
<script src='<?= Yii::getAlias('@asseturl'); ?>/spread/snew/hegs/js/thrid-party.js'></script>
<script src='<?= Yii::getAlias('@asseturl'); ?>/spread/snew/hegs/js/qh.js'></script>
<!-- 百度统计 -->
<div id="reviewApply" class="none">
    <div class="review-dialog">
        <div class="review-form">
            <h2>企业核名</h2>
            <i class="iconfont review-close">&#xe635;</i>
            <div class="review-dialog-wrap review-step1 none">
                <form onSubmit="signupApply();return false;">
                    <dl class="clearfix">
                        <dd>
                            <span class="iconfont">&#xe637;</span>
                            <label class="none">公司名称</label>
                            <div class="review-form-control">
                                <input type="text" name="company" id="company" validator="required userName" placeholder="请输入拟注册公司名称"></div>
                        </dd>
                        <dd>
                            <span class="iconfont">&#xe60d;</span>
                            <label class="none">手机号码</label>
                            <div class="review-form-control">
                                <input type="text" name="mob" id="mobile" validator="required mobile" placeholder="请输入您的手机号码"></div>
                            <p>非常重要，真实有效的号码才能收到核名结果</p>
                        </dd>
                    </dl>
                    <input type="hidden" name="product" value="企业核名">
                    <input type="hidden" name="address" value="企业核名">
                    <input class="review-submit" type="submit" value="立即核名"></form>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
    function doSth() {
        var ele_source = $("input[name=source]");
        var ua = navigator.userAgent;
        var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
        isIphone = ipad || ua.match(/(iPhone\sOS)\s([\d_]+)/),
        isAndroid = ua.match(/(Android)\s+([\d.]+)/),
        isMobile = isIphone || isAndroid;
        if ($("#reviewApply").is(":visible")) {

            $("body").css("overflow", "hidden");
            if (isMobile) {
                if (ua.toLowerCase().match(/MicroMessenger/i) == 'micromessenger') {
                    ele_source.val("微信");
                } else {
                    ele_source.val("移动");
                }
            } else {
                ele_source.val("PC");
                $(window).resize(function() {
                    doSth()
                })
            }
        } else {
            $("body").css("overflow", "auto")
        }
    }
    var apply = $("#reviewApply");
    $(".review-btn,.review-search-btn").click(function(event) {
        var _this = $(this);
        if (event.target.className.indexOf("review-search-btn") >= 0) {
            var company = _this.siblings("input[type=text]").val();
            if (company == "") {
                var errtip = _this.siblings("input[type=text]").attr("placeholder");
                Q.tip.err(errtip, true)
            } else {
                apply.fadeIn(400,
                function() {
                    apply.find(".review-step2").hide(0);
                    apply.find(".review-step1").slideDown(400,
                    function() {
                        $(".review-form-control input[name=company]").val(company);
                        doSth();
                    })
                })

            }
        } else {
            //$("input[name=company],input[name=mobile]").val("")
            apply.fadeIn(400,
            function() {
                apply.find(".review-step2").hide(0);
                apply.find(".review-step1").slideDown(400);
                doSth();
            })
        }

    });
    $(".review-close").live("click",
    function() {
        apply.hide(0,
        function() {
            doSth()
        })
    }); Q.notify.listen(G_BIND_FORM_SUBMIT_SUCC,
    function(data) {
        $("input[name=company],input[name=mobile]").val("");
        if (apply.is(":visible")) {
            apply.find(".review-step1").hide(0);
            apply.find(".review-step2").slideDown(400,
            function() {
                _hmt.push(['_trackPageview', '/review/company?channel=12'])
            })
        } else {
            apply.fadeIn(400,
            function() {
                apply.find(".review-step1").hide(0);
                apply.find(".review-step2").slideDown(400,
                function() {
                    _hmt.push(['_trackPageview', '/review/company?channel=12'])
                })
            })
        }
    }); setInterval(function() {
        var ele = $(".review-rtime li:last");
        var h = ele.css("height");
        ele.css("height", "0px");
        $(".review-rtime ul").prepend(ele).find("li:first").animate({
            "height": h
        },
        600);
    },
    2000);
    $(".review-footer-wx").hover(function() {
        $(this).find(".wx-code").show();
    },
    function() {
        $(this).find(".wx-code").hide();
    })
})
</script>
<script>
function signupApply()
{
	var company = $('#company').val();
	if (!company) {
		alert('请您输入要验证的公司名称');
		return false;
	}
	var mobile = $('#mobile').val();
    var regex = /^(((1[3456789]{1}))+\d{9})$/gi;
	if (regex.test(mobile) == false) {
		alert('请输入正确的手机号码');
	}

	var $data = {};
    var positionName = $('#position_name').val();
    $data.position = $('#position').val();
    $data.position_name = positionName + company;
    $data.cid = $("#cid").val();
	$data.mobile = mobile;
	$data.name = company;
    $data._csrf = $("#_csrf").val();
    console.log($data);
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
				alert('报名成功，稍候会有财会顾问跟您沟通公司名称的详细信息');
                //window.location.href = '';
            }else if ( data.status == 400 ) {
                alert(data.message);
            } else {
                alert('报名失败，请您重新报名！');
            }
        }//end success

    })// end ajax
    return false;
}
</script>
