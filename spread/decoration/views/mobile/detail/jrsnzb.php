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
<title>承诺十年质保 居然之家-乐屋装饰</title>
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/css/29c8f-8918.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/css/3cd01-9519.css">
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

}
</script>
<div class="zong">
    <a id="bm"></a>
    <table id="__01" width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/c6ef6-9798.jpg" width="100%" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/ddca4-5766.jpg" width="100%" alt=""></td>
        </tr>
    </table>
    <div class="baoming">
        <div class="imgDiv">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/584ef-8708.jpg" width="100%" alt="" />
            <div class="content">
                <form action="http://www.juranliwu.com/juran/jrSignup/save" method="post" id="form1" class="form1" style="margin-top:3%;">
                    <input name="nameOfCustomer" type="text" id="nameOfCustomer" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="您的姓名" />
                    <input name="telOfCustomer" type="text" id="telOfCustomer" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="您的电话" />
                    <input name="sizeOfApartment" type="text" id="sizeOfApartment" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="房屋面积" />
                    <input type="button" name="button" onclick="javascript:submitform()" id="cbBtn" /></form>
                <form>
                    <!--客户ID-->
                    <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
                    <!--活动ID-->
                    <input id="codeOfEvent" hidden="true" value="170217" htmlEscape="false" maxlength="36" class="input-xlarge " />
                    <!--活动标题-->
                    <input id="titleOfEvent" hidden="true" value="承诺十年质保质" htmlEscape="false" maxlength="50" class="input-xlarge " />
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
        <tr>
            <td>
                <a href="#bm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/d271f-6744.jpg" width="100%" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#bm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/c786f-5759.jpg" width="100%" alt=""></a>
            </td>
        </tr>
        <tr>
            <td style="position:relative;">
                <a href="#bm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/ab453-1029.jpg" width="100%" alt=""></a>
                <input type="button" name="button" id="btn1" />
                <div class="content3" style="display:none;">
                    <form action="http://www.juranliwu.com/juran/jrSignup/save" method="post" id="form3" class="form1" style="margin-top:3%;">
                        <input name="nameOfCustomer" type="text" id="nameOfCustomer3" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="您的姓名" />
                        <input name="telOfCustomer" type="text" id="telOfCustomer3" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="您的电话" />
                        <input name="nameOfCommunity" type="text" id="nameOfCommunity3" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="小区名称" />
                        <input name="sizeOfApartment" type="text" id="sizeOfApartment3" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="房屋面积" />
                        <input type="button" name="button" onclick="javascript:submitform3()" id="cbBtn3" /></form>
                    <form>
                        <!--客户ID-->
                        <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
                        <!--活动ID-->
                        <input id="codeOfEvent" hidden="true" value="170217" htmlEscape="false" maxlength="36" class="input-xlarge " />
                        <!--活动标题-->
                        <input id="titleOfEvent" hidden="true" value="承诺十年质保" htmlEscape="false" maxlength="50" class="input-xlarge " />
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
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/85d04-3049.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/c00c9-5256.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="iSlider-wrapper" class="ab islider islider1"></div>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/2da19-5048.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn2" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/09465-5398.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/943b1-1215.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/9d8f3-5050.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn3" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/8f43a-1621.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/179d0-7464.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/f823c-2722.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn4" /></td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/9188f-4107.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/72929-4925.jpg" width="100%" alt=""></a>
                </td>
            </tr>
            <tr>
                <td style="position:relative;">
                    <a href="#bm">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/d8d9e-6634.jpg" width="100%" alt=""></a>
                    <input type="button" name="button" id="btn5" /></td>
            </tr>
            <tr>
                <td>
                    <div class="content2">
                        <form action="http://www.juranliwu.com/juran/jrSignup/save" method="post" id="form2" class="form1" style="margin-top:3%;">
                            <input name="nameOfCustomer" type="text" id="nameOfCustomer2" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="您的姓名" />
                            <input name="telOfCustomer" type="text" id="telOfCustomer2" htmlEscape="false" maxlength="11" class="input-xlarge" placeholder="您的电话" />
                            <input name="sizeOfApartment" type="text" id="sizeOfApartment2" htmlEscape="false" maxlength="4" class="input-xlarge" placeholder="房屋面积" />
                            <input type="button" name="button" onclick="javascript:submitform2()" id="cbBtn2" /></form>
                        <form>
                            <!--客户ID-->
                            <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
                            <!--活动ID-->
                            <input id="codeOfEvent" hidden="true" value="170217" htmlEscape="false" maxlength="36" class="input-xlarge " />
                            <!--活动标题-->
                            <input id="titleOfEvent" hidden="true" value="承诺十年质保" htmlEscape="false" maxlength="50" class="input-xlarge " />
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
            content: '<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/a.jpg'
        },
        {
            content: '<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/b.jpg'
        },
        {
            content: '<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/m/img/07.jpg'
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
