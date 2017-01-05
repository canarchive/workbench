<?php
use yii\helpers\Url;
?>
<section class="nav">
    <header>
        <div class="logo">
            <a href="/"><img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/logo.png" alt=""></a>
        </div>
        <div class="close"><a href="javascript:;"></a></div>
    </header>
    <nav>
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/sp-smobile.html">手机号抓取</a></li>
            <li><a href="/sp-sqq.html">QQ抓取</a></li>
            <li><a href="/sp-login.html">登陆</a></li>
            <li><a href="/sp-register.html">免费体验</a></li>
            <li><a href="/aboutus.html">关于我们</a></li>
        </ul>
    </nav>
</section>
