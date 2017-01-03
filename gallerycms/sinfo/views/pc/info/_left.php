<?php
use yii\helpers\Url;
?>
<div class="zq-left floatL">
    <div class="zq-menu floatL">
        <ul>
            <li class="t">访客信息攻略</li>
            <?php foreach ($model->sortInfos as $sort => $sortName) { ?>
            <li></li>
            <li class="m1">
                <a href="/info_<?= $sort; ?>/" <?php if ($sort == $currentSort) { echo 'class="active"'; } ?>><?= $sortName; ?></a>
                <ul style=""></ul>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="ad-con ad-con2">
        <a href="/sp-smobile.html" target="_blank">
            <h2>
                <span>手机号抓取</span>
                <i></i>
            </h2>
            <div class="ad-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/sinfo/pc/img/about-ad-img2.jpg" alt=""></div>
            <p>市场广泛，客户无限</p>
        </a>
    </div>
    <div class="ad-con ad-con3">
        <a href="/sp-sqq.html" target="_blank">
            <h2>QQ号抓取</h2>
            <div class="ad-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/sinfo/pc/img/about-ad-img3.jpg" alt=""></div>
            <p>精准营销，抢占先机</p>
        </a>
    </div>
</div>
