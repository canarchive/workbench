<?php

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$faviconUrl = isset($this->params['faviconUrl']) ? $this->params['faviconUrl'] : Yii::getAlias('@asseturl') . '/favicon.ico';
?>
<title><?= $seoTitle; ?></title>
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<link rel="icon" href="<?= $faviconUrl; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?= $faviconUrl; ?>" type="image/x-icon" />
