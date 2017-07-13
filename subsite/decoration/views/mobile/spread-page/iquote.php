<?php
use yii\helpers\Url;

$this->params['formPosition'] = 'hd-tobj';
$this->params['formPositionName'] = '活动-报价详情';

Yii::$app->params['tdkInfos']['title'] =  '装修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2017装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';

?>
<script type="text/javascript">var postFix = 'bj';</script>
<link href="http://60.205.145.0/filesys/spider/pages/asset/collect/m/css/8f81b-4054.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/jquery.min.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/cookie.utils.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/first.visit.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/user.source.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/reservation.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/jquery.animatenumber.min.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/geetest.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/countdown.js"></script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/gt.js"></script>

<header class="head headTitle">
    <a class="back" href="javascript:history.go(-1)">
        <img src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/img/6580d-1297.png" alt="返回"></a>
    <h1 class="title">装修费用计算</h1></header>
<section class="costCount">
    <div class="countBox">
        <img src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/img/883a4-8158.jpg" alt="免费获取装修报价" />
        <div class="useNum">已有
            <span id="num">0</span>个业主获取了装修报价</div>
        <div class="count">
            <p>
                <input type="number" name="area" id="area" value="" placeholder="请输入您的房屋面积">
                <span>m²</span></p>
            <p>
                <input type="text" name="userName" id="userName" value="" placeholder="请输入您的姓名"></p>
            <p>
                <input type="tel" name="mobile" id="mobile" value="" placeholder="请输入手机号，报价结果将发送到您的手机"></p>
            <button class="submitBtn">立即获取报价</button></div>
    </div>
    <div class="countResult" style="display:none;">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/money.png" alt="">
        <p class="result">费用约<span id="total">92965</span>元</p>
        <div class="tips">因材料及工程量不同，具体报价以量房实测为准。<br>
            稍后装修顾问将给您回电，为您提供免费装修咨询服务。
        </div>
    </div>
</section>
<script type="text/javascript">
$(document).ready(function() {
    function reservationNum(data) 
    {
        $('#num').animateNumber({
            number: data
        },
        1500);
    } 
    var rNum = 13293;
    reservationNum(rNum);
    $('.submitBtn').click(function() {
        var userName = $('#userName').val(),
        mobile = $('#mobile').val(),
        area = $('#area').val();
        if (area == null || area == '' || !(area >= 1 && area <= 10000)) {
            error('请填写正确的房屋面积');
            return;
        }
        if (userName == null || userName == '') {
            error('用户名不能为空');
            return;
        }
        if (mobile == null || mobile == '') {
            error('手机号不能为空');
            return;
        }

        var $data = {};
    $data.name = userName;
    $data.mobile = mobile;
    $data.area_input = area;
    var positionName = $('#position_name').val();
    $data.position = $('#position').val();
    $data.position_name = positionName;
    $data.city_input = '';
    $data.cid = $("#cid").val();
    $data._csrf = $("#_csrf").val();
    console.log($data);
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
                $("#total").text(data.quoteInfo.price);
                $(".countResult").show();

                var scroll_offset = $(".countResult").offset(); //得到pos这个div层的offset，包含两个值，top和left
                $("body,html").animate({
                    scrollTop:scroll_offset.top //让body的scrollTop等于pos的top，就实现了滚动
                },0); 
                //var returnUrl = $('#returnUrl').val();
                //window.location.href = '';
            }else if ( data.status == 400 ) {
                alert(data.message);
            } else {
                alert('报名失败，请您重新报名！');
            }
        }
    })
        /*$(this).initCaptcha(function() {
            $.decorateCost(userName, mobile, area,
            function() {
                $('#userName, #mobile, #area').val('');
            })
        })*/
    })
})
</script>
<script type="text/javascript">function errorCss() {
        $('.loginPop').css({
            'position': 'fixed',
            'width': '100%',
            'height': '100%',
            'background': 'rgba(2,2,7,.5)',
            'top': '0',
            'left': '0',
            'z-index': '3'
        }), $('.loginPopDiv').css({
            'background': '#fff',
            'margin': '50% auto 0',
            'border-radius': '0.572rem',
            'width': '19.286rem',
            'min-height': '8.572rem',
            'display': 'table',
        }), $('.loginPopDivBno').css({
            'border-radius': '0.572rem 0.572rem 0 0',
            'min-height': '7.3rem'
        }), $('.loginPopDiv p').css({
            'font-size': '1.14286rem',
            'text-align': 'center',
            'display': 'table-cell',
            'vertical-align': 'middle',
            'padding': '1.64282rem',
            'line-height': '2rem'
        }), $('.loginPopAn').css({
            'background': '#fff',
            'margin': '0 auto',
            'border-radius': '0 0 0.572rem 0.572rem',
            'width': '19.286rem',
            'height': '3.3rem',
            'line-height': '3.3rem',
            'border-top': '0.1rem solid #E8E8EF',
            'overflow': 'hidden'
        }), $('.loginPopAn a').css({
            'text-align': 'center',
            'float': 'left',
            'font-size': '1.14286rem',
            'width': '50%'
        }), $('.loginPopAn a').eq('0').css({
            'border-right': '0.1rem solid #E8E8EF'
        })
    }
    function error(text) {
        var divPop = $('<div/>').addClass('loginPop'),
        divText = $('<div/>').addClass('loginPopDiv'),
        p = $('<p/>').text(text);
        $('body').append(divPop.append(divText.append(p))); errorCss();
        setTimeout(function() {
            $(".loginPop").remove();
        },
        1500);
    }</script>
<noscript>
    <p><img src="//piwik.ikongjian.com/piwik.php?idsite=5" style="border:0;" alt="" /></p>
</noscript>
<!-- End Piwik Code -->
<!-- 品友访客 -->
<script type="text/javascript">var _py = _py || [];
    _py.push(['a', 'g684T..yx2WkNsu_FIXccucE4J2lP']);
    _py.push(['domain', 'stats.ipinyou.com']);
    _py.push(['e', '']); -
    function(d) {
        var s = d.createElement('script'),
        e = d.body.getElementsByTagName('script')[0];
        e.parentNode.insertBefore(s, e),
        f = 'https:' == location.protocol;
        s.src = (f ? 'https': 'http') + '://' + (f ? 'fm.ipinyou.com': 'fm.p0y.cn') + '/j/adv.js';
    } (document);</script>
<noscript>
    <img src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/img/a360f-1320.gif" style="display:none;" /></noscript>
<img src="http://c.cnzz.com/wapstat.php?siteid=1261312677&r=&rnd=804664944" width="0" height="0" />
