<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$cssAllFiles = isset(Yii::$app->params['cssFiles']) ? Yii::$app->params['cssFiles'] : [];
$jsAllFiles = isset(Yii::$app->params['jsFiles']) ? Yii::$app->params['jsFiles'] : [];
$faviconUrl = isset($this->params['faviconUrl']) ? $this->params['faviconUrl'] : Yii::getAlias('@asseturl') . '/favicon.ico';
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="with=device-width, initial-scale=1.0,minimum-scalable=1.0,user-scalable=no" />

<meta name="viewport" content="with=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="telephone=no">
<meta content="false" name="twcClient" id="twcClient" />
<?php if ($this->context->isMobile) { ?>
<link rel="canonical" href="<?= $this->context->pcMappingUrl; ?>">
<?php } else { ?>
<meta http-equiv="mobile-agent" content="format=xhtml;url=<?= $this->context->mobileMappingUrl; ?>" />
<meta http-equiv="mobile-agent" content="format=html5;url=<?= $this->context->mobileMappingUrl; ?>" />
<meta http-equiv="mobile-agent" content="format=wml;url=<?= $this->context->mobileMappingUrl; ?>" />
<?php } ?>

<title><?= $seoTitle; ?></title>
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<?php if (isset(Yii::$app->params['robotRule'])) { echo Yii::$app->params['robotRule']; } ?>
<link rel="icon" href="<?= $faviconUrl; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?= $faviconUrl; ?>" type="image/x-icon" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { $cssFile = isset($cssAllFiles[$cssFile]) ? $cssAllFiles[$cssFile] : $cssFile; ?>
<link rel="stylesheet" type="text/css" href="<?= $cssFile; ?>" />
<?php } } ?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
<?php if (isset($this->params['jsFilePre'])) { echo $this->params['jsFilePre']; } ?>
</script>
<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { $jsFile = isset($jsAllFiles[$jsFile]) ? $jsAllFiles[$jsFile] : $jsFile; ?>
<script type="text/javascript" src="<?= $jsFile; ?>"></script>
<?php } } ?>
<?= isset($this->params['headerOtherStr']) ? $this->params['headerOtherStr'] : ''; ?>
<?= isset($this->params['statCodeStr']) ? $this->params['statCodeStr'] : ''; ?>
</head>
<body <?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>>
<?= $content; ?>
<?php 
$jsFooterFiles = isset($this->params['jsFooterFiles']) ? $this->params['jsFooterFiles'] : []; foreach ($jsFooterFiles as $jsFile) { $jsFile = isset($jsAllFiles[$jsFile]) ? $jsAllFiles[$jsFile] : $jsFile; ?>
<script type="text/javascript" src="<?= $jsFile; ?>"></script>
<?php } ?>
<?=  isset($this->params['footerJsStr']) ? $this->params['footerJsStr'] : ''; ?>
<input type="hidden" id="position" value="<?= $this->context->pagePosition; ?>" />
<input type="hidden" id="position_name" value="<?= $this->context->pagePositionName; ?>" />
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none"></div>
</body>
</html>
