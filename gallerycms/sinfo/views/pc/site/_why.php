<?php
use yii\helpers\Url;
?>
<div class="products-why">
    <div class="products-why-con">
        <div class="products-why-con-01">
            <h2 class="title">为营销而生、马上试试</h2>
            <p>已有超过680万多家名客户通过“QQ云统计”实现业绩增长!</p>
        </div>
        <div class="products-why-con-02">
            <div>
                <a class="products-why-cell" href="<?= Url::to(['/aboutus/index']); ?>" >
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/s-why17.png" alt='17年行业服务经验' />
                    <h3>注册用户</h3>
                    <p>添加域名、部署代码</p>
                </a>
            </div>
            <span></span>
            <div style="width:330px;">
                <a class="products-why-cell" href="<?= Url::to(['/aboutus/index']); ?>" >
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/s-why80.png" alt='80家分公司为您的网站进行全方面服务' />
                    <h3>获取手机号、QQ号</h3>
                    <p>进行智能推送，主动会话</p>
                </a>
            </div>
            <span></span>
            <div style=" width:455px;">
                <a class="products-why-cell" href="<?= Url::to(['/sample/index', 'page' => 1]); ?>" >
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/s-whyzhan.png" alt='几百名资深高级设计师为您的网站提供一对一服务' />
                    <h3>提升业绩</h3>
                    <p>持续跟进，提升10业绩</p>
                </a>
            </div>
        </div>
    </div>
</div>
