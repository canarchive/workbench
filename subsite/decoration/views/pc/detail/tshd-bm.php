<?php
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>在线报名</title>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/js/jquery.min.js"></script><script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>
<style>
body{
	background-color:#3d3d3d;
	color:#000000;
	margin: 0px;
	padding: 0px;
	}
</style>
<body>
<FORM onsubmit="return false;">  <input type="hidden" value="2017家装庙会" name="class">
          <input type="hidden" value="北京" name="city">
          <input type="hidden" value="add" name="action">
<INPUT type="hidden" value="tisa" name="biaoji"><table align="center" width="153" cellpadding="0" cellspacing="0" background="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/bg.jpg" style="font-size:12px"><tr><Td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a1.jpg" width="153" height="40" /></Td></tr><tr>
  <Td><a href="javascript:void(0)" onclick="doyoo.util.openChat('g=58308');return false;"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a2.jpg" width="153" height="104" border="0" /></a></Td></tr><tr>
  <Td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a3.jpg" width="153" height="15" /></Td></tr>
<tr><Td style="padding-left:54px; height:23px; padding-top:1px; background-repeat:no-repeat; background-image:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a4.jpg)"><input name="name" id="name" type="text" style="width:85px; font-size:12px; border:0; background-color:transparent;" ></Td></tr>
<tr><Td height="12px"></Td></tr>
<tr><Td style="padding-left:54px; height:21px; background-repeat:no-repeat; background-image:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a5.jpg)"><input name="sex" checked="checked" value="男" type="radio">男&nbsp;
<input name="sex" value="女"  type="radio">女</Td></tr>
<tr><Td height="12px" style="height:12px"></Td></tr>
<tr><Td  style="padding-left:54px; height:22px; background-repeat:no-repeat; background-image:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a6.jpg)"><input id="tel" name="Phone" size="5" maxlength="11" type="text" style="width:85px; font-size:12px; border:0; background-color:transparent;"></Td></tr>
<tr><Td style="height:9px"></Td></tr>
<tr><Td  valign="top" style="padding-left:54px; height:32px; background-repeat:no-repeat; padding-top:3px; background-image:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a7.jpg)"><input id="address" name="address1"  type="text" style="width:85px; font-size:12px; border:0; background-color:transparent;"></Td></tr>

<tr><Td style="padding-left:54px; height:32px; background-repeat:no-repeat; padding-top:3px; background-image:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a8.jpg)" valign="top"><input id="area" name="mj" type="text" style="width:85px; font-size:12px; border:0; background-color:transparent;"></Td></tr>
<tr><Td height="56" align="center" style="; background-repeat:no-repeat; background-image:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/a9.jpg); padding-top:6px; height:61px;" valign="top"><input type="image" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tshd/img/s1.jpg" width="103" height="33" onclick="yuyue(); return false;"></Td></tr>
<tr><Td style="height:7px"></Td></tr>
</table></form>
<script>
function yuyue(){
    var name=$("#name").val();;
    var tel=$("#tel").val();
    var note=$("#address").val();
    if(!(/^1[3|4|5|7|8]\d{9}$/.test(tel))){
        alert("手机号格式错误，请填写正确的手机号");
        return false;
    }
    var $data = {
        name: name,
        mobile: tel,
    };

    $data.position = 'tshd';
    $data.position_name = '天盛家装庙会节活动' + note;
    $data.info_id = 1;
    $data.cid = 669;
    $data._csrf = $("#_csrf").val();
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
                alert('报名成功');
                var redirectUrl = $("#return_url").val();
                if (redirectUrl) {
                //var redirectUrl = window.BASE_URL + '/bm-result.html';
                    window.location.href = redirectUrl;
                }
            }else if ( data.status == 400 ) {
                alert(data.message);
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            } else {
                alert('报名失败');
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            }
        }
    });
    return false;
}
</script>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
</body>
</html>
