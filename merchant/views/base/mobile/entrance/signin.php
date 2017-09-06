<?php
use yii\bootstrap\ActiveForm;

Yii::$app->params['seoTitle'] = '登录-' . $this->appDatas('seoTitle');

$fields = ['mobile', 'password'];
$data = [];
foreach ($fields as $field) {
    $data[$field]['value'] = !isset($info[$field]) || $field == 'password' ? '' : $info[$field]['value'];
    $data[$field]['error'] = isset($info[$field]['error']) ? $info[$field]['error'] : '';
}

?>
<?= $this->render('_signin-style'); ?>

<div class="showhide" id="main"> 
    <header> 
        <!--<h1></h1>--> 
        <h3 class="logo"></h3> 
    </header> 
    <form id="myForm" method="post"> 
    <section> 
         <input type="hidden" id="loginErrorCount" value="" /> 
         <div class="writeBox"> 
             <div class="bb"> 
                 <i class="ic ic_1"></i> 
                 <input type="text" placeholder="用户名" class="ui-input" id="username" /> 
             </div> 
             <div class="bb"> 
                 <i class="ic ic_2"></i> 
                 <input type="password" placeholder="密码" class="ui-input" id="password" /> 
             </div> 
             <div class="verifyCode-box bb" style="display:none;"> 
                 <img src="/captcha.html" alt="验证码" title="点击刷新" class="verifyCodeImg" /> 
                 <i class="ic ic_3"></i> 
                 <input type="text" class="ui-input verifycode" name="verifyCode" placeholder="输入右侧字符" autocomplete="off" /> 
             </div> 
         </div> 
    </section> 
    <footer> 
         <input type="button" value="登 录" class="ui-btn" id="login" /> 
         <!--    <p class="ptips">输入您的易订货账号，即可完成绑定！</p> --> 
    </footer> 
    </form> 
</div> 
<a class="forget-pwd" id="forgetPwd" href="/findpwd.html">忘记密码？</a> 
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/m/js/zepto.min.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/shop/m/js/common.js?v=20151126"></script> 
<script>
// 设置链接的margin-top值
function setLinkPos() {
	var bodyObj = document.getElementsByTagName('body');
	var bodyHeight = bodyObj[0].clientHeight;
	var mainHeight = document.getElementById('main').clientHeight;
	document.getElementById("forgetPwd").style.marginTop=(bodyHeight-mainHeight-30)+'px';
}
setLinkPos();

var loginErrorCount = 0;
$('#login').click(function(e){
	e.preventDefault();
	var $_this = $(this);
	var username = $.trim($('#username').val());
	if(username === '') {
		Public.tips({ content:'用户名不能为空！'});
		return false;
	};
	var password = $.trim($('#password').val());
	if(password === '') {
		Public.tips({ content:'密码不能为空！'});
		return false;
	};
	var postData = {};
	postData.mobile = username;
	postData.password = password;
	postData.captcha = $.trim($("input[name=verifyCode]").val());
    postData._csrf = $('#_csrf').val();
    $.ajax({
        type: "POST",
        url:"/signin-api.html",
        dataType: "json",
        data: postData,

		beforeSend: function(){
			$_this.val("正在登录...").attr("disabled",true);
		},
		success:function(responseText){
			console.log(responseText);
			if(responseText.status == 200){
                window.location.href = '/admin/';
				//$("input[name=lt]").val(responseText.split("OK_")[1]);
				//$("#myForm").submit();
			/*}else if(responseText == "login_error"){
				loginErrorCount++;
				Public.tips({ content:'用户名或密码错误！'});
				$_this.removeAttr("disabled").val("重新登录");
				if(loginErrorCount >= 3){
					$(".verifyCode-box").show();
					setLinkPos();
				}
				ChangeFnCode();
			}else if(responseText == "need_verfCode"){
				Public.tips({ content:'请输入验证码！'});
				$(".verifyCode-box").show();
				$_this.removeAttr("disabled").val("重新登录");
				ChangeFnCode();
			}else if(responseText == "wrong_verfCode"){
				Public.tips({ content:'验证码输入错误！'});
				$_this.removeAttr("disabled").val("重新登录");
				ChangeFnCode();
			}else if(responseText.indexOf("limit") != -1){
				Public.tips({ content:'连续输错密码五次,请30分钟后再试!'});
				$_this.removeAttr("disabled").val("重新登录");
			}else if(responseText == "user_disabled"){
				Public.tips({ content:'账户已被禁用，请联系厂商（管理员）开通'});
				$(".verifyCode-box").show();
				$_this.removeAttr("disabled").val("重新登录");
				ChangeFnCode();*/
			}else{
				alert(responseText.message);
				$_this.removeAttr("disabled").val("重新登录");
				//ChangeFnCode();
			}
		},
		error:function(){
			Public.tips({ content:'网络请求失败，请稍后再试！'});
			$_this.removeAttr("disabled").val("重新登录");
		}
	});
});
$(".verifyCodeImg").click(function(){
	ChangeFnCode();
});
function ChangeFnCode(){
	$_this = $(".verifyCodeImg");
	var time = new Date();
	time = Date.parse(time);
	$_this.attr('src','/captcha.html?v='+time)
}
</script>   
