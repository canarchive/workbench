<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?= $this->context->currentSiteInfo['name']; ?>登陆</title>
<script>
window.location.href="http://www.mixici.com/";
</script>
</head>
<body> <!--<div>style="margin:0;padding:0;scroll:none; background: url(<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/reg.jpg) center repeat-x #ffe5e5"></div>-->
<div style="width:100%; margin:0 auto;">
<p style=" text-align:center; margin-top:200px;"><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/logo/pc_login_<?= $this->context->siteCode; ?>.png" width="280" height="72" alt="登陆"/></p>
</div>
<iframe id="frmDialog" scrolling="no" src="http://www.mixici.com/" frameborder="0" height="358px" width="100%" style="margin:0 auto;"></iframe>
<div style="width:100%; margin:0 auto;">
    <p align="center" style="color:#037C11; font-family: 'Microsoft YaHei Mono', 'Microsoft YaHei UI'">
        <a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" class="lookall" target="_blank"><?= $this->context->currentSiteInfo['name']; ?>  客服QQ：<?= Yii::$app->params['siteQQ']; ?></a><br />
    </p>
</div>
</body>
</html>
