<?php
use yii\helpers\Url;
$this->params['cssFiles'] = [
    'wlbj/css/iui', 'wlbj/css/main',
];
$this->params['jsFiles'] = [
    'wlbj/js/jquery-1.7.2.min', 'wlbj/js/main', 'wlbj/js/iui', 'wlbj/js/layer',
];
$this->params['formPosition'] = 'hd-wlbj';
$this->params['formPositionName'] = '活动-万链报价';
Yii::$app->params['siteHotline'] = '400-8118-088';
Yii::$app->params['tdkInfos']['title'] = '美宅客_互联网家装平台';
Yii::$app->params['tdkInfos']['keyword'] = '家装 装修 互联网家装 装修套餐 主材套餐美宅客 imeizhaike 建材选购';
Yii::$app->params['tdkInfos']['description'] = '美宅客是一家C2M+O2O的互联网家装平台；提供瓷砖、地板、抽油烟机、马桶、淋浴房、水槽等建材购买，提供自有工人的精品施工服务，提供1对1的房屋设计服务；同品质优惠40%以上；我们不用品牌掩盖品质，我们只提供一线工厂品质产品；';
$this->params['cidDefault'] = '667';
$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/spread/house/mzk/pc/images/ico.ico';
$this->params['bodyClass'] = 'background:#FFFFFF;';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width"> 
<meta id="viewPorts" name="viewport" content="width=640,target-densitydpi=640,user-scalable=on">
<style>.nav-top-mb .icon-menu{margin:10px;}</style>
<script>var appVersion = window.navigator.appVersion;
    var platform = '',
    viewPorts = '';

    if (appVersion.toLowerCase().indexOf('android')) {
        platform = 'android';
    } else if (appVersion.indexOf('iPhone') || appVersion.indexOf('iPod') || appVersion.indexOf('iPad')) {
        platform = 'ios';
    }

    var winWidth = window.screen.width,
    targetDensitydpi = winWidth / 640;
    switch (platform) {
    case 'android':
        var devicePixelRatio = window.devicePixelRatio;

        targetDensitydpi = 640 / winWidth * devicePixelRatio * 160;

        viewPorts = 'width=640,target-densitydpi=' + targetDensitydpi + ',user-scalable=on';
        break;
    case 'ios':
        viewPorts = 'width=640,initial-scale=' + targetDensitydpi + ',mininum-scale=' + targetDensitydpi + ',maxinum-scale=' + targetDensitydpi + ',user-scalable=no';
        break;
    }
    if (viewPorts) {
        document.getElementById('viewPorts').setAttribute('content', viewPorts);
    }</script>
<header class="header">
    <div class="nav-top-mb">
        <a href="/wap">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/wlbj/images/logo.png" class="logo"></a>
        <i class="icon iconfont icon-menu">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/wlbj/images/lo2.png"></i>
        <div id="msslogin">
            <a class="icon iconfont iconsw" href="/user/login.php">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/wlbj/images/lo1.png"></a>
        </div>
        <ul class="second-menu">
            <li class="item">
                <a href="/wap">首页</a></li>
            <li class="item">
                <a href="/plus/list.php?tid=23">产品中心</a></li>
            <li class="item">
                <a href="/plus/list.php?tid=24">直播工地</a></li>
            <li class="item">
                <a href="/plus/list.php?tid=26">关于我们</a></li>
            <li class="item">
                <a href="/plus/list.php?tid=52">推荐有奖</a></li>
            <li class="item">
                <a href="/plus/list.php?tid=47">装修百科</a></li>
        </ul>
    </div>
</header>
<div class="body">
    <!-------- 模态窗 - 计算器 S -------->
    <div class="iui-modal-one calculator-modal" style="display:block;">
        <div class="content-wrap calculator clearfix">
            <i class="icon iconfont close">&#xe619;</i>
            <h2 class="name">快速报价</h2>
            <h2 class="haspeo">已有<span class="num"></span>人使用满意</h2>
            <input type="button" value="新房" onclick="newold(this.value)" class="room new-room active" />
            <input type="button" value="老房" onclick="newold(this.value)" class="room old-room" />
            <input type="tel" placeholder="您的房屋面积（㎡）" name="mianji" id="mianji" class="size" />
            <input type="tel" placeholder="您的手机号" name="tel" id="tel" class="size" />
            <div class="iui-select-one product">
                <select class="selected" id="chanpin">
                    <option value="0">请选择产品</option>
                    <option value="v+灰色系">v+灰色系</option>
                    <option value="v+原木色">v+原木色</option></select>
                <i class="icon iconfont drop-down">&#xe620;</i></div>
            <div class="iui-select-one apart">
                <select class="selected" id="huxing">
                    <option value="0">请选择户型</option>
                    <option value="一居室">一居室</option>
                    <option value="两居室">两居室</option>
                    <option value="三居室">三居室</option>
                    <option value="四居室">四居室</option>
                    <option value="五居室">五居室</option>
                    <option value="五居室以上">五居室以上</option></select>
                <i class="icon iconfont drop-down">&#xe620;</i></div>
            <!--input type="text" placeholder="您的手机" name="shouji" id="shouji" class="phone" /-->
            <input type="button" value="立即计算" onclick="jisuan()" class="btn-calc" />
            <input type="hidden" value="新房" name="newold" id="newold">
            <h2 class="us">此报价为参考价格，如需更详细报价，请联系我们</h2></div>
    </div>
</div>
<footer class="footer">
    <!-- 版权 S -->
    <div class="copy-wrap">
        <div class="rows">
            <span class="statement">
                <a href="/wap/subsidiary/statement/" class="ui-link">网站声明</a></span>
            <span class="clause">
                <a href="/wap/subsidiary/policy/" class="ui-link">隐私条款</a></span>
        </div>
        <div class="rows">
            <span>Copyright &copy; 2015-2016 万科链家（北京）装饰有限公司 版权所有 京ICP备15047981号</span></div>
    </div>
    <!-- 版权 E -->
    <!-- 底部工具 S -->
    <div class="footer-tools clearfix">
        <i class="icon iconfont icon-qq">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3444691425&amp;site=qq&amp;menu=yes" class="ui-link">在线咨询</a></i>
        <i class="icon iconfont icon-tel">
            <a href="tel:400-1110-365" class="ui-link">电话咨询</a></i>
        <i class="icon iconfont icon-personal">
            <a href="/wap/Calculator.html" class="ui-link">快速报价</a></i>
    </div>
    <!-- 底部工具 S -->
    <a id="returno" href="javascript:scroll(0,0)"></a>
</footer>
<!---------- footer E ---------->
<script>
function CheckLogin() {
    $.ajax({
        "url": "/user/ajax_waplogins.php?temptime=" + new Date().getTime(),
        "success": function(data) {
            $("#msslogin").html(data);
        }
    });
}
//判断是否登录
//CheckLogin();
</script>
<script type="text/javascript">
var referer = $('#return_url').val();
function parseURL(url) {
    var a = document.createElement('a');
    a.href = url;
    return {
        source: url,
        protocol: a.protocol.replace(':', ''),
        host: a.hostname,
        port: a.port
    };
}
</script>
<script>//计算器
var dianhua = /^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$/;
var mianjiji = /^\d{1,4}$/;
function newold(va) {
    $("#newold").val(va);
}
function jisuan() {
    var newold = $("#newold").val(); //新老房
    var mianji = $("#mianji").val(); //面积
    var tel = $("#tel").val(); //手机号
    var chanpin = $("#chanpin").val(); //产品
    var huxing = $("#huxing").val(); //户型
    if (!mianjiji.test(mianji)) {
        layer.alert('请填写面积只能为数字', {
            title: "万科链家提醒您"
        });
        //alert("请填写面积");
        return false;
    }
    if (!dianhua.test(tel)) {
        layer.alert('您的手机号码格式错误', {
            title: "万科链家提醒您"
        });
        //alert("请填写面积");
        return false;
    }
    if (chanpin == 0) {
        //alert("请选择产品");
        layer.alert('请选择产品', {
            title: "万科链家提醒您"
        });
        return false;
    }
    if (huxing == 0) {
        //alert("请选择户型");
        layer.alert('请选择户型', {
            title: "万科链家提醒您"
        });
        return false;
    }

    var note = "房屋类别：" + newold + ";产品：" + chanpin + ";户型：" + huxing;
    var $data = {
        name: '',
        mobile: tel,
        input_area: mianji,
        note: note
    };


    $data.position = $("#position").val();
    $data.cid = $("#cid").val();
    $data.position_name = $("#position_name").val();
    $data.info_id = $("#info_id").val();
    $data.cid = $("#cid").val();
    $data._csrf = $("#_csrf").val();
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
                layer.alert('装修报价已发送到您的手机，请注意查收', {
                    title: "万科链家提醒您"
                });
                $(".btn-sqgdcg-now").parents('.iui-modal-one').hide();
                return false;
            }else if ( data.status == 400 ) {
                layer.alert('计算失败请联系客服', {
                    title: "万科链家提醒您"
                });
                $(".btn-sqgdcg-now").parents('.iui-modal-one').hide();
                return false;
            } else {
                layer.alert('计算失败请联系客服', {
                    title: "万科链家提醒您"
                });
                $(".btn-sqgdcg-now").parents('.iui-modal-one').hide();
                return false;
            }
        }//end success

    })// end ajax
}</script>
