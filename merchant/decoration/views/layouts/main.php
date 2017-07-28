<?php
use yii\helpers\Url;

$currentElem = isset($this->params['currentElem']) ? $this->params['currentElem'] : 'index';
$navDatas = [
    'cpa' => 'CPA服务',
    'sem' => '竞价托管',
    'seo' => '网站SEO',
    'opinion' => '舆情监控',
    'semopen' => '渠道开户',
    'customizing' => '企业定制',
    'ask' => '合作须知',
    'material' => '合作商家助手',
];
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
                            <!--<a rel="nofollow" href="/signup.html" class="button tiny radius info" title="注册会员">注册</a>-->
                            <?php } else { ?>
                            <span class="is-login">
                                <a rel="nofollow" href="/admin/" class="button radius success tiny" title="进入管理中心">进入管理中心</a>
                            </span>
                            <?php } ?>
                        </div>
                        <nav class="nav right">
                            <a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>" <?php if ($currentElem == 'index') { echo 'class="active"'; } ?>>首页</a>
                            <?php foreach ($navDatas as $nav => $nName) { ?>
                            <a href="/sp-<?= $nav; ?>.html" title="<?= $nName; ?>" <?php if ($currentElem == $nav) { echo 'class="active"'; } ?>><?= $nName; ?></a>
                            <?php } ?>
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
                        <?php foreach ($navDatas as $nav => $nName) { ?>
                        <li><a href="/sp-<?= $nav; ?>.html" title="<?= $nName; ?>"><?= $nName; ?></a></li>
                        <?php } ?>
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
