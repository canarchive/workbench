<?php
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content=" 居然之家自营的家装 没有增项的家装 先行赔付消费无忧/不环保全额赔施工款/承诺预算0增加/质保领先行业1年" />
<meta name="description" content="http://www.juranliwu.com/" />
<title>大牌HUI_居然之家_乐屋装饰</title>
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/css/5586a-4275.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/css/e9b3c-8907.css">
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/js/jquery-1.8.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/js/layer.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/js/easing.js"></script>
<style>.layui-layer-page .layui-layer-content { position: relative; overflow: hidden; }</style></head>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<body>
<script type="text/javascript">function submitform() {

        var url = document.location.toString();

        var para = "未知";

        var d = new Date();
        var time = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate() + "  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

        document.getElementById("orderDate").value = time;

        /*reg = /^[\u4E00-\u9FA5]{2,4}$/;
        if (!reg.test($("#nameOfCustomer").val())) {

            alert('请输入正确的姓名!');
            return false;
        }*/

        /*var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if (!myreg.test($("#telOfCustomer").val())) {
            alert('请输入正确的手机号码!');
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
        'area_input': $('#sizeOfApartment').val(),
        'position': 'bottom'
    };

    signup($data);
    }

function signup($data)
{
    $data.position = $("#position").val() + '-' + $data.position;
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
						var redirectUrl = $("#return_url").val();
						if (redirectUrl) {
                    window.location.href = redirectUrl;
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

    function submitform2() {

        var url = document.location.toString();

        var para = "未知";

        var d = new Date();
        var time = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate() + "  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

        document.getElementById("orderDate").value = time;

        /*reg = /^[\u4E00-\u9FA5]{2,4}$/;
        if (!reg.test($("#nameOfCustomer2").val())) {

            alert('请输入正确的姓名!');
            return false;
        }

        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if (!myreg.test($("#telOfCustomer2").val())) {
            alert('请输入正确的手机号码!');
            return false;
        }*/

    var myreg = /^1[3|4|5|7|8]\d{9}$/;///^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test($("#telOfCustomer2").val())) {
        alert('请输入正确的手机号码!');
        return false;
    }
    var $data = {
        'name': $("#nameOfCustomer2").val(),
        'mobile': $("#telOfCustomer2").val(),
        'area_input': $('#sizeOfApartment2').val(),
        'position': 'bottom'
    };

    signup($data);

    }
    function submitform3() {

        var url = document.location.toString();

        var para = "未知";

        var d = new Date();
        var time = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate() + "  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

        document.getElementById("orderDate").value = time;

        /*reg = /^[\u4E00-\u9FA5]{2,4}$/;
        if (!reg.test($("#nameOfCustomer3").val())) {

            alert('请输入正确的姓名!');
            return false;
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if (!myreg.test($("#telOfCustomer3").val())) {
            alert('请输入正确的手机号码!');
            return false;
        }*/

    var myreg = /^1[3|4|5|7|8]\d{9}$/;///^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test($("#telOfCustomer3").val())) {
        alert('请输入正确的手机号码!');
        return false;
    }
    var $data = {
        'name': $("#nameOfCustomer3").val(),
        'mobile': $("#telOfCustomer3").val(),
        'area_input': $('#sizeOfApartment3').val(),
        'position': 'bottom'
    };

    signup($data);

    }</script>
<div class="zong">
    <a id="bm"></a>
    <table id="__01" width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/a9f94-2515.jpg" width="100%" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/b42b2-2513.jpg" width="100%" alt=""></td>
        </tr>
    </table>
    <div class="baoming">
        <div class="imgDiv">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/32420-8684.jpg" width="100%" alt="" />
            <div class="content">
                <form action="http://lohohd.juran.com.cn/juran/jrSignup/save" method="post" id="form1" class="form1" style="margin-top:3%;">
                    <input name="nameOfCustomer" type="text" id="nameOfCustomer" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="您的姓名" />
                    <input name="telOfCustomer" type="text" id="telOfCustomer" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="您的电话" />
                    <input name="sizeOfApartment" type="text" id="sizeOfApartment" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="房屋面积" />
                    <input type="button" name="button" onclick="javascript:submitform()" id="cbBtn" /></form>
                <form>
                    <!--客户ID-->
                    <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
                    <!--活动ID-->
                    <input id="codeOfEvent" hidden="true" value="170223" htmlEscape="false" maxlength="36" class="input-xlarge " />
                    <!--活动标题-->
                    <input id="titleOfEvent" hidden="true" value="大牌HUI" htmlEscape="false" maxlength="50" class="input-xlarge " />
                    <!--活动类型-->
                    <input id="typeOfEvent" hidden="true" value="乐屋移动" htmlEscape="false" maxlength="50" class="input-xlarge " />
                    <!--渠道-->
                    <input id="channelOfCustomer" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
                    <!--报名时间-->
                    <input id="orderDate" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
                    <!--抽奖信息-->
                    <input id="infoOfLottery" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " /></form>
            </div>
        </div>
    </div>
    <table id="_01" width="100%" border="0" cellpadding="0" cellspacing="0">
        <div>
            <div class="test">
                <marquee class="scrollInfo" scrollamount="2" direction="up">
                    <font color=#lalala>
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
                        <br></font>
                </marquee>
            </div>
            <a href="#bm">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/0d020-1257.jpg" width="100%" alt=""></a>
        </div>
        <tr>
            <td>
                <a href="#bm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/6a401-2640.jpg" width="100%" alt=""></a>
            </td>
        </tr>
        <tr>
            <td style="position:relative;">
                <a href="#bm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/3f6a5-4237.jpg" width="100%" alt=""></a>
                <input type="button" name="button" id="btn1" />
                <div class="content3" style="display:none;">
                    <form action="http://lohohd.juran.com.cn/juran/jrSignup/save" method="post" id="form3" class="form1" style="margin-top:3%;">
                        <input name="nameOfCustomer" type="text" id="nameOfCustomer3" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="您的姓名" />
                        <input name="telOfCustomer" type="text" id="telOfCustomer3" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="您的电话" />
                        <input name="nameOfCommunity" type="text" id="nameOfCommunity3" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="小区名称" />
                        <input name="sizeOfApartment" type="text" id="sizeOfApartment3" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="房屋面积" />
                        <input type="button" name="button" onclick="javascript:submitform3()" id="cbBtn3" /></form>
                    <form>
                        <!--客户ID-->
                        <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
                        <!--活动ID-->
                        <input id="codeOfEvent" hidden="true" value="170223" htmlEscape="false" maxlength="36" class="input-xlarge " />
                        <!--活动标题-->
                        <input id="titleOfEvent" hidden="true" value="大牌HUI" htmlEscape="false" maxlength="50" class="input-xlarge " />
                        <!--活动类型-->
                        <input id="typeOfEvent" hidden="true" value="乐屋移动" htmlEscape="false" maxlength="50" class="input-xlarge " />
                        <!--渠道-->
                        <input id="channelOfCustomer" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
                        <!--报名时间-->
                        <input id="orderDate" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
                        <!--抽奖信息-->
                        <input id="infoOfLottery" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " /></form>
                </div>
            </td>
        </tr>
        <tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/1b4ec-1771.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/bcb2b-5283.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/37829-2159.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/bb683-2519.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/b350b-8081.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn2" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/419b0-1957.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/acdb1-7286.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/375ef-6789.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn3" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/12e26-7702.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/11358-3046.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/61737-6818.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn6" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/bbaec-9752.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/01854-7302.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn4" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/d6269-1867.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/c147d-5150.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/8f645-7517.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn7" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/8308f-5918.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/565c8-5772.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/2aae5-4982.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/136ea-7641.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/24762-8880.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn5" /></td>
            </tr>
            <tr>
                <td>
                    <div class="content2">
                        <form action="http://lohohd.juran.com.cn/juran/jrSignup/save" method="post" id="form2" class="form1" style="margin-top:3%;">
                            <input name="nameOfCustomer" type="text" id="nameOfCustomer2" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="您的姓名" />
                            <input name="telOfCustomer" type="text" id="telOfCustomer2" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="您的电话" />
                            <input name="sizeOfApartment" type="text" id="sizeOfApartment2" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="房屋面积" />
                            <input type="button" name="button" onclick="javascript:submitform2()" id="cbBtn2" /></form>
                        <form>
                            <!--客户ID-->
                            <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
                            <!--活动ID-->
                            <input id="codeOfEvent" hidden="true" value="170223" htmlEscape="false" maxlength="36" class="input-xlarge " />
                            <!--活动标题-->
                            <input id="titleOfEvent" hidden="true" value="大牌HUI" htmlEscape="false" maxlength="50" class="input-xlarge " />
                            <!--活动类型-->
                            <input id="typeOfEvent" hidden="true" value="乐屋移动" htmlEscape="false" maxlength="50" class="input-xlarge " />
                            <!--渠道-->
                            <input id="channelOfCustomer" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
                            <!--报名时间-->
                            <input id="orderDate" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
                            <!--抽奖信息-->
                            <input id="infoOfLottery" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " /></form>
                    </div>
                </td>
            </tr>
    </table>
    <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/js/islider.js"></script>
    <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/js/button.js"></script>
    <script type="text/javascript">var list = [{
            content: './images/a.jpg'
        },
        {
            content: './images/b.jpg'
        },
        {
            content: './images/07.jpg'
        }];

        var S = new iSlider({
            dom: document.getElementById('iSlider-wrapper'),
            data: list,
            animateType: 'opacity',
            //default, rotate, flip, depth, flow 和 card self
            isAutoplay: true,
            //自动播放
            duration: 3000,
            //间隔时间
            useTime: 500,
            //每次动画所需时间 ！必须小于duration
            isLooping: true,
            isVertical: false,
            //是否垂直播放
            plugins: ['button']
        });
        //isliderArr[i].addback(e);
        //isliderArr.addDot('white');
        //}
        //isliderArr.play();
        </script>
    <!----lohohd---->
    <script>var _hmt = _hmt || []; (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?b2d11bdabef8edff2cc2cb1f5eb8becd";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();</script>
    <!--------liwu------------>
    <script>var _hmt = _hmt || []; (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?ea65826feb6b26509d43d8a073887777";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();</script>
    <script type="text/javascript">$('#btn1').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }); $('#btn2').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }); $('#btn3').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }); $('#btn4').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }); $('#btn5').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }); $('#btn6').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        }); $('#btn7').click(function(e) {
            e.preventDefault();
            layer.open({
                type: 1,
                shade: 0.3,
                area: ['80%', '410px'],
                title: false,
                //不显示标题
                content: $('.content3') //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
            });
        })</script>
</div>
<input type="hidden" id="return_url" value="http://m.juranliwu.com/" />
<input type="hidden" id="cid" value="672" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
</body>

</html>
