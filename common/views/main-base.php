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
$mobileMappingUrl = isset($this->context->mobileMappingUrl) ? $this->context->mobileMappingUrl : '';
$cssAllFiles = isset(Yii::$app->params['cssFiles']) ? Yii::$app->params['cssFiles'] : [];
$jsAllFiles = isset(Yii::$app->params['jsFiles']) ? Yii::$app->params['jsFiles'] : [];
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="with=device-width, initial-scale=1.0,minimum-scalable=1.0,user-scalable=no" />
<title><?= $seoTitle; ?></title>
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<?php if (isset(Yii::$app->params['robotRule'])) { echo Yii::$app->params['robotRule']; } ?>
<link rel="icon" href="<?= Yii::getAlias('@asseturl'); ?>/cmsad/faviocon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/cmsad/favicon.ico" type="image/x-icon" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { $cssFile = isset($cssAllFiles[$cssFile]) ? $cssAllFiles[$cssFile] : ''; if (empty($cssFile)) { continue; }?>
<link rel="stylesheet" type="text/css" href="<?= $cssFile; ?>" />
<?php } } ?>
<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { $jsFile = isset($jsAllFiles[$jsFile]) ? $jsAllFiles[$jsFile] : ''; if (empty($jsFile)) { continue; } ?>
<script type="text/javascript" src="<?= $jsFile; ?>"></script>
<?php } } ?>
<script type="text/javascript">
<?php if (isset($this->adaptive)) { ?>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= $mobileMappingUrl; ?>";
}
<?php } ?>
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
</script>
<?= isset($this->params['headerOtherStr']) ? $this->params['headerOtherStr'] : ''; ?>
<?= isset($this->params['statCodeStr']) ? $this->params['statCodeStr'] : ''; ?>
</head>
<body>
<?= $content; ?>
<?php 
$jsFooterFiles = isset($this->params['jsFooterFiles']) ? $this->params['jsFooterFiles'] : []; foreach ($jsFooterFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl') . '/cmsad/pc/js/' . $jsFile . '.js'; ?>"></script>
<?php } ?>
<?=  isset($this->params['footerJsStr']) ? $this->params['footerJsStr'] : ''; ?>
<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none"></div>
</body>
</html>
