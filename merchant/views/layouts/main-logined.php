<?php
use yii\helpers\Url;

$this->params['cssFiles'] = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : ['dashboard'];
//$this->params['jsFiles'] = [];
//$this->params['jsFooterFiles'] = ['jquery-2.1.0', 'foundation.min', 'main'];
$jsFooterFiles = ['jquery-2.1.0', 'foundation.min', 'main'];
$this->params['jsFooterFiles'] = isset($this->params['jsFooterFiles']) ? $this->params['jsFooterFiles'] : $jsFooterFiles;

$userInfo = $this->context->userInfo;
$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<?php $this->beginContent('@merchant/views/layouts/main-base.php'); ?>
<div class="off-canvas-wrap">
    <div class="inner-wrap">
        <header class="header hide-for-small">
            <div class="logo">
                <a href="<?= Url::to(['/info/index']); ?>"><?= Yii::$app->params['siteNameBase']; ?></a>
            </div>
            <nav class="nav">
                <a class="link <?php if ($currentNav == 'index') { echo 'active'; } ?>" href="<?= Url::to(['/info/index']); ?>">个人面板</a>
                <?php if ($userInfo['role'] == 'valid') { ?>
                <a class="link <?php if ($currentNav == 'useful-user') { echo 'active'; } ?>" href="<?= Url::to(['/useful-user/index']); ?>">有效信息</a>
                <?php } else { ?>
                <a class="link <?php if ($currentNav == 'user') { echo 'active'; } ?>" href="<?= Url::to(['/user/index']); ?>">用户信息</a>
                <?php if ($userInfo['role'] == 'admin') { ?>
                <!--<a class="link <?php if ($currentNav == 'merchant') { echo 'active'; } ?>" href="<?= Url::to(['/merchant/index']); ?>">公司信息</a>-->
                <a class="link <?php if ($currentNav == 'statistic') { echo 'active'; } ?>" href="<?= Url::to(['/statistic/index', 'type' => 'day']); ?>">统计</a>
                <?php } ?>
                <?php } ?>
            </nav>
            <div class="menu right">
                <!--<span class="contact-info">
                    <a href="#" data-dropdown="drop-header-contact" aria-controls="drop-header-contact" aria-expanded="false">
                        <i class="fa fa-support"></i>联系我们</a>
                </span>-->
                <!--<ul id="drop-header-contact" class="f-dropdown contact-info-drop" data-dropdown-content aria-hidden="true" tabindex="-1">
                    <li><i class="fa fa-phone"></i><?= Yii::$app->params['siteJoinusTel']; ?></li>
                </ul>-->
                <a class="logout" href="<?= Url::to(['/site/logout']); ?>">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </header>
        <header class="header-mini show-for-small">
            <div class="left logo">
                <a href="<?= Url::to(['/info/index']); ?>"></a>
            </div>
            <div class="menu right">
                <a href="#" class="right-off-canvas-toggle"><i class="fa fa-bars"></i></a>
            </div>
        </header>
        <aside class="right-off-canvas-menu side-panel">
            <div class="user-block">
            <span class="name"><?= $this->context->userInfo['truename']; ?></span>
                <a href="<?= Url::to(['/info/setting']); ?>" class="setting" title="个人设置">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <ul class="contact-info">
                <!--<li>
                    <a href="tel:<?= Yii::$app->params['siteJoinusTel']; ?>"><i class="fa fa-phone"></i><?= Yii::$app->params['siteJoinusTel']; ?></a>
                </li>-->
            </ul>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="<?= Url::to(['/info/index']); ?>" title="个人面板">个人面板</a></li>

                    <?php if ($userInfo['role'] == 'valid') { ?>
                    <li><a href="<?= Url::to(['/useful-user/index']); ?>" title="有效信息">有效信息</a></li>
                    <?php } else { ?>
                    <li><a href="<?= Url::to(['/user/index']); ?>" title="用户信息">用户信息</a></li>
                    <?php if ($userInfo['role'] == 'admin') { ?>
                    <li><a href="<?= Url::to(['/statistic/index', 'type' => 'day']); ?>">统计</a></li>
                    <?php } ?>
                    <?php } ?>
                    <li>
                        <a href="<?= Url::to(['/site/logout']); ?>" class="button alert small expand radius" title="退出">退出</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <?= $content; ?>
        <a href="#" class="exit-off-canvas"></a>
    </div>
</div>
<?php $this->endContent(); ?>
