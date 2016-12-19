<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$formPosition = isset($this->params['formPosition']) ? $this->params['formPosition'] : '';
$formPositionName = isset($this->params['formPositionName']) ? $this->params['formPositionName'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="canonical" href="<?= $this->context->pcMappingUrl; ?>" />
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/favicon.ico" />
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
<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/css/' . $cssFile . '.css'; ?>" />
<?php } } ?>
<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
<script type="text/javascript">
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    window.location.href = "<?= $this->context->pcMappingUrl; ?>";
}
window.BASE_URL = "<?= Yii::getAlias('@m.gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@spreadurl') . '/jz-signup-cms.html'; ?>';
</script>
<?= $this->render('@gallerycms/house/views/_stat', []); // 顶部 ?>
</head>
<body class="<?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>">
<?= $content; ?>
<?php echo $this->render('../common/_footer', []); ?>
<?php echo $this->render('../common/_custom_service', []); ?>
<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?= Yii::$app->params['statUrl']; ?>
</div>
</body>
</html>
