<?php
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>居然装饰-西境进口家装-门外北京 门内北欧</title>
<link href="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/css/5a261-1812.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/js/jquery-1.8.3.min.js" charset="gb2312"></script>
<link href="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/css/04769-5249.css" rel="stylesheet" type="text/css" />
<script src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/js/layer.js" type="text/javascript"></script>
<link href="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/css/3ac86-7586.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>

<body>
<script type="text/javascript">function submitform() {

    var url = document.location.toString();

    var note = "top";

    /*reg = /^[\u4E00-\u9FA5]{2,4}$/;
    if (!reg.test($("#nameOfCustomer").val())) {
        alert('请输入正确的姓名!');
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
}

function submitform2() {

    var url = document.location.toString();

    /*reg = /^[\u4E00-\u9FA5]{2,4}$/;
    if (!reg.test($("#nameOfCustomer2").val())) {
        alert('请输入正确的姓名!');
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
                //var redirectUrl = window.BASE_URL + '/bm-result.html';
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
</script>
<script type="text/javascript">$(document).ready(function() {
        $('.fsdx').on('click',
        function() {
            layer.open({
                type: 2,
                title: '',
                shadeClose: true,
                shade: 0.8,
                area: ['1000px', '510px'],
                content: 'tc.html' //iframe的url
            });
        });
    });</script>
<!--placeholder兼容不同浏览器-->
<script>$(document).ready(function() {
        var doc = document,
        inputs = doc.getElementsByTagName('input'),
        supportPlaceholder = 'placeholder' in doc.createElement('input'),

        placeholder = function(input) {
            var text = input.getAttribute('placeholder'),
            defaultValue = input.defaultValue;
            if (defaultValue == '') {
                input.value = text
            }
            input.onfocus = function() {
                if (input.value === text) {
                    this.value = ''
                }
            };
            input.onblur = function() {
                if (input.value === '') {
                    this.value = text
                }
            }
        };

        if (!supportPlaceholder) {
            for (var i = 0,
            len = inputs.length; i < len; i++) {
                var input = inputs[i],
                text = input.getAttribute('placeholder');
                if (input.type === 'text' && text) {
                    placeholder(input)
                }
            }
        }
    });</script>
<!--placeholder结束-->
<div class="foot_applyBox">
    <div class="foot_apply">
        <input type="text" id="nameOfCustomer2" placeholder="您的姓名" />
        <input type="text" id="telOfCustomer2" placeholder="您的电话" />
        <input class="tijiao" type="submit" value="点击报名" onclick="submitform2()" /></div>
</div>
    <!--客户ID-->
    <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
    <!--活动ID-->
    <input id="codeOfEvent" hidden="true" value="161013" htmlEscape="false" maxlength="36" class="input-xlarge " />
    <!--活动标题-->
    <input id="titleOfEvent" hidden="true" value="西境进口家装-门外北京 门内北欧" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--活动类型-->
    <input id="typeOfEvent" hidden="true" value="快屋PC" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--渠道-->
    <input id="channelOfCustomer" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--报名时间-->
    <input id="orderDate" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
<div class="middle">
    <a href="http://www.juranliwu.com/" id="fb">
        <div class="returenKw">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/30342-7019.jpg" /></div>
    </a>
    <div class="topBanner_01">
        <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/e5505-4047.jpg" /></div>
    <a name="1F">
        <div class="topBanner_02">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/abbad-2281.jpg" /></div>
    </a>
    <div class="baoming">
        <input id="nameOfCustomer" style=" width:246px; height:36px; border:1px solid #728655; margin-left:610px;  float:left; margin-top:110px; text-indent:1em; " name="" type="text" />
        <input id="telOfCustomer" style=" width:246px; height:36px; border:1px solid #728655; margin-left:610px;  float:left; margin-top:18px; text-indent:1em; " name="" type="text" />
        <a href="javascript:void(0);" onclick="submitform()" style=" width:363px; height:49px; margin:14px 0px 0px 496px; float:left;">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/b2491-3220.jpg" /></a>
        <a href="javascript:void(0);" onclick="submitform()" style=" width:363px; height:49px; margin:14px 0px 0px 496px; float:left;">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/83b5b-2176.jpg" /></a>
    </div>
    <table id="__01" width="1000" height="10946" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/ccada-1016.jpg" width="1000" height="84" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/3e29e-2196.jpg" width="1000" height="94" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/b6d85-1983.jpg" width="1000" height="369" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/532ec-6149.jpg" width="1000" height="374" alt=""></td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/63f34-8152.jpg" width="1000" height="254" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/fc54c-8918.jpg" width="1000" height="154" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/0289c-5465.jpg" width="1000" height="170" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/726ea-3146.jpg" width="1000" height="134" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/6fbab-6676.jpg" width="1000" height="385" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/f988d-5873.jpg" width="1000" height="392" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/5b912-4524.jpg" width="1000" height="141" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/5e41a-1484.jpg" width="1000" height="221" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/d14dd-1642.jpg" width="1000" height="219" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/1f71d-8475.jpg" width="1000" height="221" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/8910b-3780.jpg" width="1000" height="222" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/57c4e-8478.jpg" width="1000" height="146" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/2132a-3374.jpg" width="1000" height="249" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/f4095-9452.jpg" width="1000" height="552" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/9e16e-2982.jpg" width="1000" height="142" alt=""></td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/89857-2238.jpg" width="1000" height="283" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/a2862-8726.jpg" width="1000" height="151" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/8fabb-1315.jpg" width="1000" height="582" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/a1eda-7717.jpg" width="1000" height="105" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/234ca-3326.jpg" width="1000" height="701" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/c5f79-4447.jpg" width="1000" height="411" alt=""></td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/f5c1f-4026.jpg" width="1000" height="95" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/cffe1-9345.jpg" width="1000" height="759" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/5f917-7495.jpg" width="1000" height="112" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/9ccd1-5308.jpg" width="1000" height="514" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/0dc34-2566.jpg" width="1000" height="301" alt=""></td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/f58b4-8671.jpg" width="1000" height="111" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/fca20-5324.jpg" width="1000" height="571" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/67c92-3762.jpg" width="1000" height="172" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/96956-9654.jpg" width="1000" height="108" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/84486-1473.jpg" width="1000" height="368" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="#1F">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/8839d-1914.jpg" width="1000" height="251" alt=""></a>
            </td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/0be24-8572.jpg" width="1000" height="271" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/d0c34-5939.jpg" width="1000" height="398" alt=""></td>
        </tr>
        <tr>
            <td>
                <img src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/img/2141e-4061.jpg" width="1000" height="159" alt=""></td>
        </tr>
    </table>
</div>
<div>
    <a class="fb" href="#fb"></a>
</div>
<!--<div class="lxth">
    <input name="telInput" id="telInput" type="text" placeholder="请输入电话号码" class="ione" />
    <input name="callBtn" id="callBtn" type="button" value="" class="itwo" /></div>
<script>document.getElementById("callBtn").onclick = function() {
        lxb.call(document.getElementById("telInput"));
    };</script>
<script>document.write('<script type="text/javascript"  data-lxb-uid="3191419" data-lxb-gid="11468" src="http://60.205.145.0/filesys/spider/pages/asset/spreadjr/js/api.js" charset="utf-8"><\/script>');</script>-->
<map name="Map" id="Map">
    <area shape="rect" coords="176,60,230,80" href="http://www.juranliwu.com/" target="_blank" />
    <area shape="rect" coords="285,60,355,79" href="http://www.juranliwu.com/kw/jrDesigner" target="_blank" />
    <area shape="rect" coords="419,60,502,79" href="http://www.juranliwu.com/kw/readme" target="_blank" />
    <area shape="rect" coords="563,61,640,79" href="http://www.juranliwu.com/kw/wiki" target="_blank" />
    <area shape="rect" coords="701,61,777,78" href="http://www.juranliwu.com/kw/readme" target="_blank" /></map>
<input type="hidden" id="position" value="jrzj" />
<input type="hidden" id="position_name" value="居然之家" />
<input type="hidden" id="info_id" value="1" />
<input type="hidden" id="return_url" value="http://www.juran.com.cn/" />
<input type="hidden" id="cid" value="672" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
</body>

</html>
