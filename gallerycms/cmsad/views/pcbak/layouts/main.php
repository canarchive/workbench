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
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?= $seoTitle; ?></title>
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<?php if (isset(Yii::$app->params['robotRule'])) { echo Yii::$app->params['robotRule']; } ?>
<link rel="icon" href="<?= Yii::getAlias('@asseturl'); ?>/cmsad/faviocon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/cmsad/favicon.ico" type="image/x-icon" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl') . '/cmsad/pc/css/' . $cssFile . '.css'; ?>" />
<?php } } ?>
<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl') . '/cmsad/pc/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
<script type="text/javascript">
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= $mobileMappingUrl; ?>";
}
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@spreadurl') . '/jz-signup-cms.html'; ?>';
</script>
<!--[if lte IE 6]>
    <script src="http://s.300.cn/current/home/js/png_0.0.8a-min.js" type="text/javascript"></script>
    <script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
<?= $this->render('@gallerycms/cmsad/views/_stat', []); // 顶部 ?>
</head>
<body>
<?php echo $this->render('../common/_header', []); // 顶部 ?>
<?= $content; ?>
<?php echo $this->render('../common/_footer', []); ?>
<?php 
$jsFooterFiles = ['common', 'position', 'public', 'createCity', 'submit', 'jquery.cityselect', 'jquery.mailAutoComplete', 'right', 'count']; foreach ($jsFooterFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl') . '/cmsad/pc/js/' . $jsFile . '.js'; ?>"></script>
<?php } ?>
<?php echo $this->render('../common/_pop', []); ?>
<input type="hidden" name="admin_add" id="admin_add" value="88" />
<input name="areacode" id="area_code" type="hidden" value="" />

<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?= Yii::$app->params['statUrl']; ?>
</div>
</body>
</html>
