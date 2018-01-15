<?php
use yii\helpers\Url;
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
                    <a href="/" target="_blank">
                        <img class="img-responsive" src="images/@141e2bf8-80cf-4f1d-bcf5-2f5f7b74c918.png" alt="顶部logo" /></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right navbar-yq">
                        <li class="active">
                            <a href="/" title="商业摄影"><b>首页</b><br/>HOME</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?= Url::to(['/eale/aboutus/index']); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                <b>关于我们</b><br/>ABOUT<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= Url::to(['/eale/aboutus/index']); ?>" title="">快速了解右视觉</a></li>
                                <li>
                                    <a href="<?= Url::to(['/eale/aboutus/company']); ?>" title="">右视觉公司介绍</a></li>
                                <li>
                                    <a href="<?= Url::to(['/eale/aboutus/company']); ?>" title="">右视觉合作客户</a></li>
                                <li>
                                    <a href="<?= Url::to(['/eale/aboutus/company']); ?>" title="">右视觉合作艺人</a></li>
                                <li>
                                    <a href="<?= Url::to(['/eale/aboutus/company']); ?>" title="">加入右视觉</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/eale/product/commercial']); ?>" title="">
                                <b>广告摄影</b>
                                <br/>COMMERCIAL
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/eale/product/fashions']); ?>" title="">
                                <b>服装摄影</b>
                                <br/>FASHION
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/eale/product/star']); ?>" title="">
                                <b>艺人摄影</b>
                                <br/>PEOPLE
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/eale/info/index']); ?>" title="">
                                <b>新闻</b>
                                <br/>NEWS
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/eale/aboutus/service']); ?>" title="">
                                <b>服务</b><br/>SERVICE
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/eale/aboutus/contact']); ?>" title="">
                                <b>联系我们</b> <br/>CONTACT
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
