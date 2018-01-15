<?php
$currentPage = $this->context->currentPage;
$siteCode = $this->context->siteCode;
$siteInfos = $this->context->siteInfos;
$pageInfos = $this->context->pageInfos;
$currentSite = $this->context->currentSiteInfo;
$navInfos = [
    'eale' => ['sample-commercial', 'sample-fashion', 'sample-star', 'info-list', 'service-list', 'aboutus-contactus'],
    'ieale' => ['sample-star', 'sample-people', 'sample-wedding', 'sample-campus', 'info-list', 'service-list', 'aboutus-contactus'],
    'iealecn' => ['sample-work', 'info-train', 'sample-studentwork', 'sample-student', 'info-list', 'aboutus-contactus'],
];

$aboutusNavs = ['aboutus-desc', 'aboutus-company', 'aboutus-customer', 'aboutus-star', 'aboutus-joinus'];

?>
<div class="navbar navbar-yq" role="navigation">
    <div class="container">
        <div class="row navbar-header">
            <div class="col-xs-2 col-sm-2" align="center">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-xs-8 col-sm-8 logo" align="center">
                <a href="<?= $currentSite['urlMobile']; ?>" title="" target="_blank">
                    <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/74d3763b-0667-46f0-b47e-be9fc2446a01.png" alt="logo" class="img-responsive" /></a>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 search">
                <form id="demo-b">
                    <input type="search" placeholder="请输入关键字" onclick="search()" id="tb_yq_artcleseek1"></form>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-border">
                <li <?php if ($currentPage == 'site-index') { echo 'class="active"'; } ?>>
                    <a href="<?= $currentSite['urlMobile']; ?>" title="">首页</a></li>
                <li class="dropdown" <?php if (in_array($currentPage, $aboutusNavs)) { echo 'class="active"'; } ?>>
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" rel="nofollow">关于我们
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <?php foreach ($aboutusNavs as $aboutusNav) { ?>
                        <li <?php if ($currentPage == $aboutusNav) { echo 'class="active"'; } ?>><a rel="nofollow" href="<?= $pageInfos[$aboutusNav]['mobile-url']; ?>" title=""><?= $pageInfos[$aboutusNav]['name']; ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <?php foreach ($navInfos[$siteCode] as $navInfo) { ?>
                <li <?php if ($currentPage == $navInfo) { echo 'class="active"'; } ?>><a href="<?= $pageInfos[$navInfo]['mobile-url']; ?>" title=""><?php if ($siteCode == 'eale' && $navInfo == 'sample-star') { echo '艺人摄影'; } else { echo $pageInfos[$navInfo]['name']; } ?></a></li>
                <?php } ?>
                <?php foreach ($siteInfos as $siteInfo) { ?>
                <li><a href="<?= $siteInfo['urlMobile']; ?>"><?= $siteInfo['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="padding-left:0; padding-right:0;">
    <div class="top-title"><?= $pageInfos[$currentPage]['name']; ?>
        <div class="dropdown pull-right">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/glyphicon-triangle-bottom.png" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="dropdownMenu1" class="dropdown-toggle pull-right" />
            <ul class="dropdown-menu nav navbar-nav navbar-border" aria-labelledby="dropdownMenu1">
                <li <?php if ($currentPage == 'site-index') { echo 'class="active"'; } ?>>
                    <a href="<?= $currentSite['urlMobile']; ?>" title="">首页</a></li>
                <li class="dropdown" <?php if (in_array($currentPage, $aboutusNavs)) { echo 'class="active"'; } ?>>
                    <a rel="nofollow" href="/desc.html" class="dropdown-toggle" data-toggle="dropdown">关于我们
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <?php foreach ($aboutusNavs as $aboutusNav) { ?>
                        <li <?php if ($currentPage == $aboutusNav) { echo 'class="active"'; } ?>><a rel="nofollow" href="<?= $pageInfos[$aboutusNav]['mobile-url']; ?>" title=""><?= $pageInfos[$aboutusNav]['name']; ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <?php foreach ($navInfos[$siteCode] as $navInfo) { ?>
                <li <?php if ($currentPage == $navInfo) { echo 'class="active"'; } ?>><a href="<?= $pageInfos[$navInfo]['mobile-url']; ?>" title=""><?= $pageInfos[$navInfo]['name']; ?></a></li>
                <?php } ?>
                <?php foreach ($siteInfos as $siteInfo) { ?>
                <li><a href="<?= $siteInfo['urlMobile']; ?>"><?= $siteInfo['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
