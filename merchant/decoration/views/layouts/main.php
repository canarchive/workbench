<?php
use yii\helpers\Url;

$currentElem = isset($this->params['currentElem']) ? $this->params['currentElem'] : 'index';
?>
<?php $this->beginContent('@merchant/decoration/views/layouts/main-base.php'); ?>
<div class="off-canvas-wrap">
    <div class="inner-wrap">
        <div class="index-header">
            <div class="header hide-for-small">
                <div class="row doc-width">
                    <div class="small-12 columns">
                        <div class="logo">
                            <a href="<?= Yii::getAlias('@web'); ?>" title="返回首页"></a>
                        </div>
                        <div class="menu right">
                            <?php if (Yii::$app->user->isGuest) { ?>
                            <a rel="nofollow" href="/signin.html" class="button tiny radius success" title="登录">登录</a>
                            <!--<a rel="nofollow" href="<?= Url::to(['/site/signup']); ?>" class="button tiny radius info" title="注册tuanjiahui会员">注册</a>-->
                            <?php } else { ?>
                            <span class="is-login">
                                <a rel="nofollow" href="<?= Url::to(['/info/index']); ?>" class="button radius success tiny" title="进入管理中心">进入管理中心</a>
                            </span>
                            <?php } ?>
                        </div>
                        <nav class="nav right">
                            <a href="<?= Yii::getAlias('@web'); ?>" title="<?= Yii::$app->params['siteNameBase']; ?>" <?php if ($currentElem == 'index') { echo 'class="active"'; } ?>>首页</a>
                            <a href="/sp-cpa.html" title="CPA服务" <?php if ($currentElem == 'cpa') { echo 'class="active"'; } ?>>CPA服务</a>
                            <a href="/sp-sem.html" title="竞价托管" <?php if ($currentElem == 'sem') { echo 'class="active"'; } ?>>竞价托管</a>
                            <a href="/sp-seo.html" title="网站SEO" <?php if ($currentElem == 'seo') { echo 'class="active"'; } ?>>网站SEO</a>
                            <a href="/sp-customizing.html" title="企业定制" <?php if ($currentElem == 'customizing') { echo 'class="active"'; } ?>>企业定制</a>
                            <a href="/sp-ask.html" title="合作须知" <?php if ($currentElem == 'ask') { echo 'class="active"'; } ?>>合作须知</a>
                            <a href="/sp-material.html" title="合作商家助手" <?php if ($currentElem == 'material') { echo 'class="active"'; } ?>>合作商家助手</a>
                        </nav>
                    </div>
                </div>
            </div>
            <header class="header-mini show-for-small">
                <div class="left logo"><a href="<?= Yii::getAlias('@web'); ?>"></a></div>
                <div class="menu right">
                    <a href="#" class="right-off-canvas-toggle"><i class="fa fa-bars"></i></a>
                </div>
            </header>
            <aside class="right-off-canvas-menu side-panel">
                <?php if (!Yii::$app->user->isGuest) { ?>
                <div class="user-block"><span class="name"><?= Yii::$app->user->identity->name; ?></span></div>
                <?php } ?>
                <nav class="nav">
                    <ul class="nav-list">
                        <li>
                            <a href="<?= Yii::getAlias('@web'); ?>" title="首页">首页</a>
                        </li>
                        <li><a href="/sp-cpa.html" title="CPA服务" >CPA服务</a></li>
                        <li><a href="/sp-sem.html" title="竞价托管" >竞价托管</a></li>
                        <li><a href="/sp-seo.html" title="网站SEO" >网站SEO</a></li>
                        <li><a href="/sp-customizing.html" title="企业定制" >企业定制</a></li>
                        <li><a href="/sp-ask.html" title="合作须知" >合作须知</a></li>
                        <li><a href="/sp-material.html" title="合作商家助手">合作商家助手</a></li>
                        <?php if (Yii::$app->user->isGuest) { ?>
                        <li>
                            <a href="/signin.html" class="button small radius success expand" title="登录">登录</a>
                        </li>
                        <?php } else { ?>
                        <li><a href="<?= Url::to(['/info/index']); ?>" class="button radius success small expand" title="进入管理中心">进入管理中心</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </aside>
        </div>
        <?= $content; ?>
        <footer class="footer">
            <div class="row site-width">
                <div class="small-12 columns">
                    <div class="company-logo">
                        <a rel="nofollow" href="javascript:" title="Weinaya"></a>
                    </div>
                    <div class="footer-inner">
                        <div class="bottom-link">
                            <a rel="nofollow" href="/signin.html" title="地址">地址：<?= Yii::$app->params['siteAddressInfo']; ?></a>
                        </div>
                        <div class="company-info ">
                            <div class="footer-tips ">
                                <span class="bottom-tips">7x24小时客服热线 <?= Yii::$app->params['siteHotline']; ?> &nbsp;</span>
                                <span class="bottom-tips">关注公众号"zxjcjjq"，获取更多精彩内容</span>
                                <!--<span class="bottom-tips">客服工作时间 9:00-18:00（周日和节日除外）</span>-->
                            </div>
                            <a rel="nofollow" href="javascript: void(0);"><?= Yii::$app->params['siteCopyRightInfo']. ' ' . Yii::$app->params['siteIcpInfo']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="exit-off-canvas"></a>
    </div>
</div>
<?php $this->endContent(); ?>
