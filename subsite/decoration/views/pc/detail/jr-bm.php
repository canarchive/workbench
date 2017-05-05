<?php
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/js/jquery-1.8.3.min.js" charset="utf-8"></script>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>
<style>body, ul, ol, li, p, h1, h2, h3, h4, h5, h6, form, fieldset, table, td, img, div { margin: 0; padding: 0; border: 0; font-family: "微软雅黑", "宋体"; } .inputForm { width: 900px; height: 300px; margin: 0 auto; } .oo{ position:absolute; top:350px; left: 50.5%; transform: translateX(-50%) } .inputForm div { width: 450px; height: 65px; font-size: 25px; float: left; position: relative; top: 100px; left: 5%; } .inputForm span { width: 90px; height: 30px; color: #fff; line-height: 30px; } .inputForm input { height: 35px; width: 250px; border: #c3c3c3 solid 1px; } [placeholder] { font-size: 14px; color: #8a8a8a; } ::-moz-placeholder { text-indent: 10px; /* 没有用 */ opacity: 1 !important; } :-ms-input-placeholder { text-indent: 10px; } ::-webkit-input-placeholder { text-indent: 10px; } .none { display: none; } .submit { width: 231px; height: 63px; float: left; margin-top: 20px; position: absolute; top: 230px; left: 50%; transform: translateX(-50%) } #container { width: 300px; position: relative; top: 400px; left:50%; transform: translateX(-50%) } #scrollBox { width: 300px; height: 24px; overflow: hidden; margin-bottom: 30px; } #scrollBox ul { height: 144px; width: 300px; } #scrollBox ul li { height: 24px; width: 100%; text-align: center; font-size: 24px; line-height: 24px; } #scrollBox ul li a { text-decoration: none; color: #1a1a1a; } /* #scrollBox ul li a:hover { color: #000; font-size: smaller; }*/</style>
<script type="text/javascript">function submitform() {
    var d = new Date();
    var time = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate() + "  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    document.getElementById("orderDate").value = time;
    /*reg = /^[\u4E00-\u9FA5]{2,4}$/;
    if (!reg.test($("#nameOfCustomer").val())) {
        alert('请输入正确的姓名！');
        return false;
    }
    var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test($("#telOfCustomer").val())) {
        alert('请输入正确的手机号码！');
        return false;
    }*/

    var myreg = /^1[3|4|5|7|8]\d{9}$/;///^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test($("#telOfCustomer").val())) {
        alert('请输入正确的手机号码!');
        return false;
    }
    var $data = {
        'name': $("#nameOfCustomer").val(),
        'mobile': $("#telOfCustomer").val(),
        'position': 'top'
    };

    signup($data);

    /*if ($("#nameOfCustomer").val() == '') {
        alert("请填写您的姓名");
        $("#nameOfCustomer").focus();
        return false;
    }
    if ($("#telOfCustomer").val() == '') {
        alert("请填写您的联系方式");
        $("#telOfCustomer").focus();
        return false;
    }
    if ($("#telOfCustomer").val() == '' && $("#nameOfCustomer").val() == '') {
        alert("请填写您的联系方式");
        $("#nameOfCustomer").focus();
        return false;
    }*/

}

function signup($data)
{
    $data.position = $("#position").val() + '-' + $data.position;
    $data.position_name = $("#position_name").val();
    $data.info_id = $("#info_id").val();
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
						var redirectUrl = $("#return_url").val();
						if (redirectUrl) {
                //var redirectUrl = window.BASE_URL + '/bm-result.html';
                    parent.location.href = redirectUrl;
						}
						alert('报名成功');
            }else if ( data.status == 400 ) {
                alert(data.message);
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            } else {
                alert('报名失败');
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            }
        }//end success

    })// end ajax
    return false;
}

</script>

<body>
<div class="oo">
    <div style="height:50px; line-height:30px; text-align:center; color: #red; font-size=2">
        <marquee scrollamount="2" width="260" height="100" direction="up">
            <span>曾先生 185******78·</span>
            <span>1分钟前报名</span>
            <br>
            <span>邹女士 150******32·</span>
            <span>1分钟前报名</span>
            <br>
            <span>王女士 139******65·</span>
            <span>1分钟前报名</span>
            <br>
            <span>党先生 137******21·</span>
            <span>1分钟前报名</span>
            <br>
            <span>安先生 136******94·</span>
            <span>2分钟前报名</span>
            <br>
            <span>米女士 187******46·</span>
            <span>2分钟前报名</span>
            <br>
            <span>韩女士 136******40·</span>
            <span>3分钟前报名</span>
            <br>
            <span>周女士 137******09·</span>
            <span>5分钟前报名</span>
            <br>
            <span>郭先生 186******31·</span>
            <span>15分钟前报名</span>
            <br>
            <span>王女士 187******11·</span>
            <span>19分钟前报名</span>
            <br>
            <span>张女士 136******51·</span>
            <span>20分钟前报名</span>
            <br>
            <span>袁先生 153******26·</span>
            <span>20分钟前报名</span>
            <br>
            <span>张先生 138******43·</span>
            <span>20分钟前报名</span>
            <br>
            <span>赵先生 137******97·</span>
            <span>21分钟前报名</span>
            <br>
            <span>王女士 138******24·</span>
            <span>21分钟前报名</span>
            <br>
            <span>吴先生 136******75·</span>
            <span>23分钟前报名</span>
            <br>
            <span>罗女士 136******72·</span>
            <span>23分钟前报名</span>
            <br>
            <span>李女士 137******81·</span>
            <span>23分钟前报名</span>
            <br>
            <span>段先生 185******74·</span>
            <span>25分钟前报名</span>
            <br>
            <span>周先生 134******10·</span>
            <span>26分钟前报名</span>
            <br>
            <span>曾先生 185******78·</span>
            <span>26分钟前报名</span>
            <br>
            <span>邹女士 150******32·</span>
            <span>27分钟前报名</span>
            <br>
            <span>王女士 139******65·</span>
            <span>27分钟前报名</span>
            <br>
            <span>党先生 137******21·</span>
            <span>30分钟前报名</span>
            <br>
            <span>安先生 136******94·</span>
            <span>31分钟前报名</span>
            <br>
            <span>米女士 187******46·</span>
            <span>34分钟前报名</span>
            <br>
            <span>韩女士 136******40·</span>
            <span>34分钟前报名</span>
            <br>
            <span>周女士 137******09·</span>
            <span>34分钟前报名</span>
            <br>
            <span>郭先生 186******31·</span>
            <span>34分钟前报名</span>
            <br>
            <span>王女士 187******11·</span>
            <span>34分钟前报名</span>
            <br>
            <span>张女士 136******51·</span>
            <span>34分钟前报名</span>
            <br>
            <span>袁先生 153******26·</span>
            <span>35分钟前报名</span>
            <br>
            <span>张先生 138******43·</span>
            <span>35分钟前报名</span>
            <br>
            <span>赵先生 137******97·</span>
            <span>35分钟前报名</span>
            <br>
            <span>王女士 138******24·</span>
            <span>36分钟前报名</span>
            <br>
            <span>吴先生 136******75·</span>
            <span>36分钟前报名</span>
            <br>
            <span>罗女士 136******72·</span>
            <span>37分钟前报名</span>
            <br>
            <span>李女士 137******81·</span>
            <span>37分钟前报名</span>
            <br>
            <span>段先生 185******74·</span>
            <span>38分钟前报名</span>
            <br>
            <span>周先生 134******10·</span>
            <span>38分钟前报名</span>
            <br>
            <span>曾先生 185******78·</span>
            <span>38分钟前报名</span>
            <br>
            <span>邹女士 150******32·</span>
            <span>39分钟前报名</span>
            <br>
            <span>王女士 139******65·</span>
            <span>39分钟前报名</span>
            <br>
            <span>党先生 137******21·</span>
            <span>39分钟前报名</span>
            <br>
            <span>安先生 136******94·</span>
            <span>39分钟前报名</span>
            <br>
            <span>米女士 187******46·</span>
            <span>40分钟前报名</span>
            <br>
            <span>韩女士 136******40·</span>
            <span>40分钟前报名</span>
            <br>
            <span>周女士 137******09·</span>
            <span>41分钟前报名</span>
            <br>
            <span>郭先生 186******31·</span>
            <span>42分钟前报名</span>
            <br>
            <span>王女士 187******11·</span>
            <span>45分钟前报名</span>
            <br>
            <span>张女士 136******51·</span>
            <span>45分钟前报名</span>
            <br>
            <span>袁先生 153******26·</span>
            <span>48分钟前报名</span>
            <br>
            <span>张先生 138******43·</span>
            <span>49分钟前报名</span>
            <br>
            <span>赵先生 137******97·</span>
            <span>49分钟前报名</span>
            <br>
            <span>王女士 138******24·</span>
            <span>49分钟前报名</span>
            <br>
            <span>吴先生 136******75·</span>
            <span>50分钟前报名</span>
            <br>
            <span>罗女士 136******72·</span>
            <span>50分钟前报名</span>
            <br>
            <span>李女士 137******81·</span>
            <span>50分钟前报名</span>
            <br>
            <span>段先生 185******74·</span>
            <span>52分钟前报名</span>
            <br>
            <span>周先生 134******10·</span>
            <span>52分钟前报名</span>
            <br>
            <span>曾先生 185******78·</span>
            <span>52分钟前报名</span>
            <br>
            <span>邹女士 150******32·</span>
            <span>52分钟前报名</span>
            <br>
            <span>王女士 139******65·</span>
            <span>55分钟前报名</span>
            <br>
            <span>党先生 137******21·</span>
            <span>55分钟前报名</span>
            <br>
            <span>安先生 136******94·</span>
            <span>55分钟前报名</span>
            <br>
            <span>米女士 187******46·</span>
            <span>56分钟前报名</span>
            <br>
            <span>韩女士 136******40·</span>
            <span>56分钟前报名</span>
            <br>
            <span>周女士 137******09·</span>
            <span>57分钟前报名</span>
            <br>
            <span>郭先生 186******31·</span>
            <span>57分钟前报名</span>
            <br>
            <span>王女士 187******11·</span>
            <span>57分钟前报名</span>
            <br>
            <span>张女士 136******51·</span>
            <span>58分钟前报名</span>
            <br>
            <span>袁先生 153******26·</span>
            <span>58分钟前报名</span>
            <br>
            <span>张先生 138******43·</span>
            <span>58分钟前报名</span>
            <br>
            <span>赵先生 137******97·</span>
            <span>1小时前报名</span>
            <br>
            <span>王女士 138******24·</span>
            <span>1小时前报名</span>
            <br>
            <span>吴先生 136******75·</span>
            <span>1小时前报名</span>
            <br>
            <span>罗女士 136******72·</span>
            <span>1小时前报名</span>
            <br>
            <span>李女士 137******81·</span>
            <span>1小时前报名</span>
            <br>
            <span>段先生 185******74·</span>
            <span>1小时前报名</span>
            <br>
            <span>周先生 134******10·</span>
            <span>1小时前报名</span>
            <br>
            <span>曾先生 185******78·</span>
            <span>1小时前报名</span>
            <br>
            <span>邹女士 150******32·</span>
            <span>1小时前报名</span>
            <br>
            <span>王女士 139******65·</span>
            <span>1小时前报名</span>
            <br>
            <span>党先生 137******21·</span>
            <span>1小时前报名</span>
            <br>
            <span>安先生 136******94·</span>
            <span>1小时前报名</span>
            <br>
            <span>米女士 187******46·</span>
            <span>1小时前报名</span>
            <br>
            <span>韩女士 136******40·</span>
            <span>1小时前报名</span>
            <br>
            <span>周女士 137******09·</span>
            <span>1小时前报名</span>
            <br></marquee>
    </div>
</div>
<form action="http://lohohd.juran.com.cn/juran/jrSignup/save" method="post">
    <!--客户ID-->
    <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
    <!--活动ID-->
    <input id="codeOfEvent" hidden="true" value="170222" htmlEscape="false" maxlength="36" class="input-xlarge " />
    <!--活动标题-->
    <input id="titleOfEvent" hidden="true" value="大牌HUI" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--活动类型-->
    <input id="typeOfEvent" hidden="true" value="乐屋PC" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--渠道-->
    <input id="channelOfCustomer" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--报名时间-->
    <input id="orderDate" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " /></form>
<form id="inputForm" class="inputForm">
    <div>
        <span>您的姓名：</span>
        <input type="text" id="nameOfCustomer" htmlEscape="false" maxlength="30" class="input-xlarge" placeholder="请填写您的姓名"></div>
    <div>
        <span>您的手机：</span>
        <input type="text" id="telOfCustomer" htmlEscape="false" maxlength="20" class="input-xlarge" placeholder="请填写您的手机"></div>
    <div>
        <span>装修小区：</span>
        <input type="text" id="nameOfCommunity" htmlEscape="false" maxlength="20" class="input-xlarge" placeholder="请填写小区名称"></div>
    <div>
        <span>装修面积：</span>
        <input type="text" id="sizeOfApartment" htmlEscape="false" maxlength="20" class="input-xlarge" placeholder="请填写房屋面积"></div>
</form>
<input class="submit" type="image" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/anniu.jpg" onclick="javascript:submitform()" id="cbBtn" /></div>
<script type="text/javascript">//window.onload=function(){
    //获取滚动部分
    var area = document.getElementById("scrollBox");

    var strs = ['<li><a href="#">张女士 185******75 已报名</a></li>', '<li><a href="#">冯女士 184******49 已报名</a></li>'];
    var ul = $("#kk");

    //设置全局定时器
    var timer = null;
    //定义延迟
    var delay = 2000;
    //获取高度
    var oLiHeight = $("#scrollBox li").height();
    //速度
    var speed = 50;
    area.scrollTop = 0;
    //            area.innerHTML+=area.innerHTML;
    var i = 0;
    function startScroll() { //开始运动
        timer = setInterval("scrollUp()", speed);
        area.scrollTop++;
    }
    function scrollUp() { //循环运动
        if (area.scrollTop % oLiHeight == 0) {
            clearInterval(timer);

            setTimeout(startScroll, delay);
            var li = ul.find('li');
            ul.append(strs[i % strs.length]);
            i = i % strs.length + 1;
            li.first().remove();
        } else {
            area.scrollTop++;
        }
    }
    //页面加载两秒后运动
    setTimeout(startScroll, delay)</script>

<input type="hidden" id="return_url" value="http://www.juran.com.cn/" />
<input type="hidden" id="cid" value="672" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
</body>

</html>
