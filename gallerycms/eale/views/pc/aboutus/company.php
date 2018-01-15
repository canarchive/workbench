<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'bootstrap', 'yq_docs',
];
$this->params['jsFiles'] = [
    'jquery', 'bootstrap', 'unveil', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<!-- /wrap -->
<div class="wrap">
    <div class="container about-index">
        <?= $this->render('../common/_breadnav', ['datas' => ['/desc.html' => '关于我们', '/desc.html' => '右视觉公司介绍']]); ?>
        <div class="row titleimg">
            <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/20ec7319-bc57-4974-824d-b04732d468cc.png" alt="右视觉公司介绍" /></div>
        <div>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 one">
                    <div align="center">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/f7405aee-9c85-4489-bbb1-edf36344befc.png" alt="">
                        <h4>右视觉三个字本身，就是一个著名的品牌。</h4></div>
                    <p>右视觉为全国著名摄影机构，有国内顶尖的策划、摄影师、化妆师、服装、设计师团队，合作众多品牌和艺人，右视觉有数以百计的经典作品，几乎每天都有精品诞生，右视觉作品已经成为一种现象，通过各个途径广为流传，产生的作用不可限量。</p>
                    <p>右视觉核心价值：灵魂透视</p>
                    <p>右视觉口号：用镜头透视灵魂，发现最美的自己！</p>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 one">
                    <div align="center">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/cd7656bd-4248-4e66-a1b2-2e1df09320bc.png" alt="">
                        <h4>摄影太过于综合，好作品需要每一个环节的人都是最好的。</h4></div>
                    <ul>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/9638ae21-c53d-4cd6-b46c-86dccede47e7.png" alt="">
                            <br>
                            <p>eale老秘</p>右视觉创始人
                            <br>著名摄影师
                            <br>视觉艺术家</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/20f9e477-03c9-455a-bba5-01795d1d4e1b.png" alt="">
                            <br>
                            <p>瑞星</p>后期部主管
                            <br>著名修图师
                            <br>视觉督导</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/6bb3af25-ba92-46f7-b322-08402c58e52d.png" alt="">
                            <br>
                            <p>流戈</p>策划总监
                            <br>创意文案
                            <br>新锐作家</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/b0342d9f-67d3-4d7f-a381-566d9b1feb2c.png" alt="">
                            <br>
                            <p>老亮</p>创意总监
                            <br>资深品牌顾问</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/9e5851f5-e856-4939-ba68-7f174c8accd7.png" alt="">
                            <br>
                            <p>老黄</p>右视觉联合创始人
                            <br>海外拓展部主管
                            <br>新锐导演
                            <br>视觉艺术家</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/48477e19-a496-4459-87e0-7963a48cf5c7.png" alt="">
                            <br>
                            <p>赵建华</p>视频部主管
                            <br>著名导演
                            <br>央视编导</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/494d6865-bc9b-4fda-ab56-5be5dfbb5271.png" alt="">
                            <br>
                            <p>孔杨</p>右视觉摄影师
                            <br>新锐摄影师</li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/21e96009-f5e5-48f3-a72a-2af6796334eb.png" alt="">
                            <br>
                            <p>何君</p>右视觉摄影师
                            <br>新锐摄影师</li></ul>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 one two">
                    <div align="center">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/2b70527f-2caa-408e-81d0-91b01d5fbb11.png" alt="" class="img-responsive">
                        <br>
                        <h4>好的作品，除了最优秀的团队，还必须要有下面的硬件条件来作为保障</h4></div>
                    <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/242991df-f1ab-4d24-8f87-5fd8c7bafa97.png" alt="" class="img-responsive mar">
                    <div class="col-xs-12 col-md-6 col-sm-12 left">
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有国内顶尖的化妆师团队</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有国内众多的服装资源</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有国外旅拍合作机构</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有出片质量最好的相机和镜头</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有300平超舒服拍摄空间和众多拍摄道具</p></div>
                    <div class="col-xs-12 col-md-6 col-sm-12">
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有国内外最好的模特资源</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有国内一线的媒体资源</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉有顶尖的影视闪光灯</p>
                        <p>
                            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/361a7a66-6115-4026-8beb-9e483afbc9e0.png" style="text-align: -webkit-center;" alt="">右视觉在艺术氛围浓厚的艺术区与艾未未三影堂为邻</p></div>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 one thr">
                    <div align="center">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/d24e6733-540a-45d1-abc1-6a78195b8691.png" alt="" class="img-responsive">
                        <h4>右视觉的合作伙伴们，右视觉客户遍布国内外，在业内外广受好评！这些品牌和个人都选择了右视觉！</h4></div>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12 one fou">
                    <div class="col-xs-12 col-md-6 col-sm-6 right2">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/8b75451b-976e-4695-969b-32a3f06d8095.png" alt="" class="img-responsive"></div>
                    <div class="col-xs-12 col-md-6 col-sm-6 left2">右视觉摄影机构是众多品牌的选择，包括可口可乐、联想、中国普天、同方、紫光、海美迪、丰田锐志、丰田普拉多、锐志翼神、奥林巴斯、CCTV、北京卫视、创维、瑞贝卡、sleek等。</div>
                    <div class="col-xs-12 col-md-6 col-sm-6 left3">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/9b88ea8c-d2f3-4373-bf04-17b4332a7812.png" alt="" class="img-responsive"></div>
                    <div class="col-xs-12 col-md-6 col-sm-6 right3">众多时尚服装服饰品牌选择，这些品牌包括：海澜之家、阿迪达斯、奈纳、恺王、深白礼服、CK内衣、艾唯艾漾、VOCHAIN、SCFASHION.祁刚、阮仕珍珠、EITIE、CNE、WQ私人定制、依蕾斯、每日新礼服等</div>
                    <div class="col-xs-12 col-md-6 col-sm-6 right2">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/7c748d58-c5a9-4e2b-8266-b30b5673e5a0.png" alt="" class="img-responsive"></div>
                    <div class="col-xs-12 col-md-6 col-sm-6 left2">右视觉为众多的明星艺人拍过宣传片、专辑封面。广告等，这些包括：张信哲、吴镇宇、焦恩俊、杨恭如、刘惜君、黄海波、周海媚、王学兵、陈翔、魏晨、袁珊珊、张馨予、刘璇、何晟铭、MIC男团等。
                        <br>右视觉写真和婚纱高级定制出过太多的经典：画意复古、唯美视觉、梦幻森系、时尚女王、欧美大片等。并且每一次拍摄都是在创新，结合每个人特点和潜质，让每一次的拍摄也成为经典！</div></div>
            </div>
        </div>
        <input id="shareTitle" type="hidden" value="右视觉公司介绍" />
        <input id="shareContent" type="hidden" value="右视觉三个字本身，就是一个著名的品牌。右视觉为全国著名摄影机构，有国内顶尖的策划、摄影师、化妆师、服装、设计师团队，合作众多..." />
        <input id="shareLink" type="hidden" value="http://www.eale.cc/gongsi/d87545d476674cd3b43c9ca56121d9a3.html" />
        <input id="shareImg" type="hidden" value="http://www.eale.cc/gongsi/Images/@f7405aee-9c85-4489-bbb1-edf36344befc.png" /></div>
</div>
