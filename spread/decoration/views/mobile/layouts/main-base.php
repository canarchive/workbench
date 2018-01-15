<?php
use yii\helpers\Url;
use yii\helpers\Html;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoTitle = isset($this->params['titlePrefix']) ? $this->params['titlePrefix'] . $seoTitle : $seoTitle;
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$formPosition = isset($this->params['formPosition']) ? $this->params['formPosition'] : '';
$formPositionName = isset($this->params['formPositionName']) ? $this->params['formPositionName'] : '';
$cid = $this->context->cid;
$cid = empty($cid) && isset($this->params['cidDefault']) ? $this->params['cidDefault'] : $cid;
$faviconUrl = isset($this->params['faviconUrl']) ? $this->params['faviconUrl'] : Yii::getAlias('@asseturl') . '/backend/img/favicon-fb.ico';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="canonical" href="<?= Yii::getAlias('@gallerycmsurl'); ?>" />
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<!--<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/images/favicon.ico" />-->
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<meta content="false" name="twcClient" id="twcClient" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="icon" href="<?= $faviconUrl; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?= $faviconUrl; ?>" type="image/x-icon" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/spread') . '/house/' . $cssFile . '.css'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/spread') . '/house/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>

<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@m.gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
</script>
<?php //echo $this->render('@spread/decoration/views/_stat', []); // 顶部 ?>
<?php if (strpos($this->context->host, 'weinaya') !== false ) { ?>
<?php if ($this->context->isMobile) { ?>
<script src="/stat.php"></script>
<?php } ?>
<?php } ?>
<?php if (strpos($this->context->host, 'tj-hl') !== false ) { ?>
<script src="http://www.sosoyun.cn/?i=32720"></script>
<?php } ?>
</head>
<body class="<?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>">
<?php if (isset($this->params['kp'])) { ?>
<script src='<?= Yii::getAlias('@m.spreadurl'); ?>/yjc.php' type='text/javascript' charset='utf-8'></script>
<?php } ?>
<?= $content; ?>
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
<?php if (isset($this->params['bodyStr'])) { echo $this->params['bodyStr']; } ?>
<?= $this->render('@spread/decoration/views/_stat', []); // 顶部 ?>
</body>
</html>
