<?php
use yii\helpers\Url;
?>
<div class="products-why">
    <div class="products-why-con">
        <div class="products-why-con-01">
            <h2 class="title">为什么选择兔班长？</h2>
            <p>网络营销一站式服务商</p>
        </div>
        <div class="products-why-con-02">
            <div>
                <a class="products-why-cell" href="<?= Url::to(['/aboutus/index']); ?>" >
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/s-why17.png" alt='17年行业服务经验' />
                    <h3>9年SEM行业经验</h3>
                    <p>9年SEM实战经验，服务过亿级账户</p>
                    <u>了解中企</u>
                </a>
            </div>
            <span></span>
            <div style="width:330px;">
                <a class="products-why-cell" href="<?= Url::to(['/aboutus/index']); ?>" >
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/s-why80.png" alt='80家分公司为您的网站进行全方面服务' />
                    <h3>360套</h3>
                    <p>针对360行专属落地营销解决方案</p>
                </a>
            </div>
            <span></span>
            <div style=" width:455px;">
                <a class="products-why-cell" href="<?= Url::to(['/sample/index', 'page' => 1]); ?>" >
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/s-whyzhan.png" alt='几百名资深高级设计师为您的网站提供一对一服务' />
                    <h3>品牌合作案例</h3>
                    <p>全国1000家品牌合作案例，因为专业所以专注</p>
                    <u>查询更多案例</u>
                </a>
            </div>
        </div>
    </div>
</div>
