<?php
use yii\helpers\Url;
$siteCode = $this->context->siteCode;

$currentSite = $this->context->currentSiteInfo;
?>
<div class="navbar navbar-yq" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?= $currentSite['url']; ?>" target="_blank">
                        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/logo.png" alt="顶部logo" /></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right navbar-yq">
                        <li class="active">
                            <a href="<?= $currentSite['url']; ?>" title=""><b>首页</b><br/>HOME</a>
                        </li>
                        <li class="dropdown">
                            <a rel="nofollow" href="<?= $currentSite['url'] . '/desc.html'; ?>" class="dropdown-toggle" data-toggle="dropdown"><b>关于我们</b><br/>ABOUT<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a rel="nofollow" href="<?= $currentSite['url'] . '/desc.html'; ?>" title="">快速了解右视觉</a></li>
                                <li>
                                    <a rel="nofollow" href="<?= $currentSite['url'] . '/company.html'; ?>" title="">右视觉公司介绍</a></li>
                                <li>
                                    <a rel="nofollow" href="<?= $currentSite['url'] . '/customer.html'; ?>" title="">右视觉合作客户</a></li>
                                <li>
                                    <a rel="nofollow" href="<?= $currentSite['url'] . '/star.html'; ?>" title="">右视觉合作艺人</a></li>
                                <li>
                                    <a rel="nofollow" href="<?= $currentSite['url'] . '/joinus.html'; ?>" title="">加入右视觉</a></li>
                            </ul>
                        </li>
                        <?php if ($siteCode == 'eale') { ?>
                        <li>
                            <a href="<?= $currentSite['url'] . '/commercial/'; ?>" title=""><b>广告摄影</b><br/>COMMERCIAL</a>
                        </li>
                        <li>
                            <a href="<?= $currentSite['url'] . '/fashion/'; ?>" title=""><b>服装摄影</b><br/>FASHION</a>
                        </li>
                        <li>
                            <a href="<?= $currentSite['url'] . '/star/'; ?>" title=""><b>艺人摄影</b><br/>STAR</a>
                        </li>
                        <?php } elseif ($siteCode == 'ieale') { ?>
                        <li><a href="<?= $currentSite['url'] . '/star/'; ?>" title=""><b>明星摄影</b><br>STAR</a></li>
                        <li><a href="<?= $currentSite['url'] . '/people/'; ?>" title=""><b>个人写真</b><br>PEOPLE</a> </li>
                        <li><a href="<?= $currentSite['url'] . '/wedding/'; ?>" title=""><b>婚纱摄影</b><br>WEDDING</a></li>
                        <li><a href="<?= $currentSite['url'] . '/campus/'; ?>" title=""><b>校园志</b><br>CAMPUS</a></li>
                        <?php } elseif ($siteCode == 'iealecn') { ?>
                        <li><a href="<?= $currentSite['url'] . '/work/'; ?>" title="右视觉作品内页"><b>右视觉作品</b><br>WORKS</a></li>
                        <li><a href="<?= $currentSite['url'] . '/train/'; ?>" title=""><b>招生信息</b><br>EDUCATION</a></li>
                        <li><a href="<?= $currentSite['url'] . '/studentwork/'; ?>" title="学生作品内页"><b>学生作品</b><br>WORKS</a></li>
                        <li><a href="<?= $currentSite['url'] . '/student/'; ?>" title=""><b>学生专题</b><br>STUDENT</a></li>
                        <?php } ?>
                        <li><a href="<?= $currentSite['url'] . '/info/'; ?>" title=""><b>新闻</b><br/>NEWS</a></li>
                        <?php if ($siteCode == 'eale' || $siteCode == 'ieale') { ?>
                        <li><a href="<?= $currentSite['url'] . '/service/'; ?>" title=""><b>服务</b><br/>SERVICE</a></li>
                        <?php } ?>
                        <li><a href="<?= $currentSite['url'] . '/contactus.html'; ?>" title=""><b>联系我们</b> <br/>CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
