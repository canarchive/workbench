<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'askbase-new_global_forold', 'askbase-global', 'askbase-k306_style_new',
];
$this->params['jsFiles'] = [
    'askbase-jquery', 'askbase-jq', 'askbase-common', 'askbase-user_login',
];
?>
<div class="w970">
    <div class="grid">
        <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
        <div class="about_main">
            <div class="company_intro about_box">
                <div class="about_center_title">
                    <h5 class="noBold">公司简介<span>Company Profile</span></h5>
                </div>
                <ul class="c_intro_list">
                    <li>
                        <div class="c_intro_text fr">
                            <div class="c_intro_img fl">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/hplat/askbase/img/companyBg1.jpg" alt="" width="262" height="184" /></div>
                            <p>　　<?= Yii::$app->params['siteNameBase']; ?>—互联网装修领导者（中国建筑装饰行业协会认证），<?= Yii::$app->params['siteNameBase']; ?>由深圳市彬讯科技有限公司创办，总部位于深圳市南山区科技园，是国家级的高新技术企业。
                                <br/>　　自2008年创办以来，<?= Yii::$app->params['siteNameBase']; ?>始终秉承“用心服务用户来赢得口碑和利益”的经营理念，并始终处于高速而稳健的发展态势。截止目前，<?= Yii::$app->params['siteNameBase']; ?>已开通250个城市分站，汇聚全国近7万多家正规装修公司、95万名室内设计师，已成立北京、上海、广州、武汉、长沙、南京、杭州、厦门、福州等27家分公司，当前拥有员工超过1500人。</p>
                            <p>　　根据百度发布的一份报告显示，中国每天大约有500万人检索装修、家具、建材相关的信息，而<?= Yii::$app->params['siteNameBase']; ?>平台当前每天有超过400万的独立用户，也就是说每2个中国人寻找装修、家具、建材相关的信息，就有超过一个会通过<?= Yii::$app->params['siteNameBase']; ?>平台来完成。2015年，<?= Yii::$app->params['siteNameBase']; ?>获得了全球著名投资基金红杉资本、经纬创投等机构的C轮2亿美金投资，这也是迄今为止，装修家居电子商务领域获得的一笔高额投资。</p>
                            <p>　　<?= Yii::$app->params['siteNameBase']; ?>致力于让天下没有烦心的装修。为实现这个使命，全体<?= Yii::$app->params['siteNameBase']; ?>人不断努力，推动装修、建材、家居市场的规范化，改变着数千万家庭的装修方式和置家理念，为用户创造卓越的互联网装修体验。作为互联网装修企业，<?= Yii::$app->params['siteNameBase']; ?>将通过O2O的模式，为传统装修及家居领域带来新的变革，不断为用户创造价值，推动行业发展。</p>
                            <p>　　打造开放、共赢的装修家居生态系统，推动行业更阳光、更透明。<?= Yii::$app->params['siteNameBase']; ?>用实际行动获得众多的关注，相继受到央视网、光明网、新华网、凤凰网、第一财经周刊、21世纪商业评论、IT经理世界、36氪 等多家媒体的关注与报道。2011年<?= Yii::$app->params['siteNameBase']; ?>和腾讯、华为一并入选《深圳质量报告》当作质量工程典范；2014年当选《中国企业家》主办的“未来之星”100强企业、荣膺“全国工商联家居电商专委会执行会长单位”、“中国互联网诚信示范企业”荣誉称号，同年还获得“21世纪中国最佳商业模式奖”。</p>
                        </div>
                    </li>
                </ul>
                <?php //$this->render('_service'); ?>
                <?php //echo $this->render('_point'); ?>
            </div>
        </div>
    </div>
</div>
