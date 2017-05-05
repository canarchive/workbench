<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'manyi/css/main', 'manyi/css/list', 'manyi/css/tmypage',
];
$this->params['formPosition'] = 'hd-manyi';
$this->params['formPositionName'] = '活动推广-满意';
$this->params['kp'] = true;
?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    window.location.href = "<?= Yii::getAlias(Yii::$app->params['hostAliasPc']) . Url::to(['/decoration/detail/feature', 'view' => 'sjlfb', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>";
}
</script>
<article class="tmyCon tmy_index">
<header>
    <a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>" class="addres">
        <!--<em class="ico_city"></em><span ><?= Yii::$app->params['currentCompany']['name']; ?></span>-->
    </a>
    <a href="javascript:;" class="logo"><?= Yii::$app->params['siteNameBase']; ?></a>
</header>
<figure class="filter_img">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/index_banner.png" alt="<?= Yii::$app->params['siteNameBase']; ?>比其他渠道找装修公司便宜20%">
</figure>
<nav class="index_nav">
    <ul class="clear">
        <li>
            <a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="ico1">
                <i></i>装修公司
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/house/mobile-sample/index', 'page' => 1, 'tag' => '']); ?>" class="ico3">
                <i></i>装修案例
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="ico2">
                <i><em>免费</em></i>量房设计
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="ico4">
                <i></i>靠谱装修
            </a>
        </li>
    </ul>
</nav>
<section class="bg_eee">
    <article class="sjbj_article_con">
        <section class="mod_form ptb15 mt10">
            <h2>10秒登记，免费获取设计方案</h2>
            <form id="bid_form">
                <span class="inp_name">
                    <input name="yourname" errorid="yourname" type="text" placeholder="您的称呼"></span>
                <span class="inp_phone">
                    <input name="yourphone" errorid="yourphone" type="text" placeholder="您的手机号"></span>
                <span class="sel_city">
                    <select name="User_Shen" id="User_Shen" errorid="User_Shen">
                        <option value="">省/市</option></select>
                    <select name="User_City" id="User_City" errorid="User_City" class="ml10">
                        <option value="">市/地区</option></select>
                </span>
                <!--<span class="inp_check">
                    <input type="checkbox" value="checkbox" checked="checkbox" disabled="">
                    <a rel="nofollow" href="/about/help.html">
                        <b>我已阅读并接受《装修常见问题条款》</b>
                    </a>
                </span>-->
                <input id="bid_submit" data-ptag="1002_1_1_295" type="button" value="免费户型设计"></form>
            <mark class="mark">已为<strong style="color: #ff8c1b;">32382</strong>位业主提供装修服务</mark></section>
    </article>
    <figure class="index_fig">
        <img class=" lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/index_img_01.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/grey.gif?v=1384541692" alt="<?= Yii::$app->params['siteNameBase']; ?>已覆盖28个城市近60万业主,提供了专业的装修服务" />
        <figcaption>
            <h1>覆盖更广</h1>
            <em class="ico_quotation"></em>
            <p><?= Yii::$app->params['siteNameBase']; ?>已覆盖28个城市近60万业主
                <br/>提供了专业的装修服务</p></figcaption>
    </figure>
    <figure class="index_fig">
        <img class=" lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/index_img_02.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/grey.gif?v=1384541692" alt="95%的业主反馈，在<?= Yii::$app->params['siteNameBase']; ?>找装修公司比其他渠道便宜20%" />
        <figcaption>
            <h1>装修更省</h1>
            <em class="ico_quotation"></em>
            <p>95%的业主反馈，在<?= Yii::$app->params['siteNameBase']; ?>找装修公司
                <br/>比其他渠道便宜20%</p></figcaption>
    </figure>
    <figure class="index_fig">
        <img class=" lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/index_img_03.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/grey.gif?v=1384541692" alt="99%的工地证明，<?= Yii::$app->params['siteNameBase']; ?>监管严格，施工质量高于行业标准，装修质量更满意" />
        <figcaption>
            <h1>质量更好</h1>
            <em class="ico_quotation"></em>
            <p>99%的工地证明，<?= Yii::$app->params['siteNameBase']; ?>监管严格，
                <br/>施工质量高于行业标准，装修质量更满意</p></figcaption>
    </figure>
    <figure class="index_fig">
        <img class=" lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/index_img_04.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/images/grey.gif?v=1384541692" alt="一键预约专业的设计方案和报价免费送，多套方案更多选择，多套报价挤干水份" />
        <figcaption>
            <h1>选择更多</h1>
            <em class="ico_quotation"></em>
            <p>一键预约专业的设计方案和报价免费送，
                <br/>多套方案更多选择，多套报价挤干水份</p></figcaption>
    </figure>
    <article class="index_nav_bottom">
        <nav class="index_nav ">
            <ul class="clear">
                <li><a href="javascript:;" class="ico1"><i></i>设计报价免费</a></li>
                <li><a href="javascript:;" class="ico2"><i></i>五星装修服务</a></li>
                <li><a href="javascript:;" class="ico3"><i></i>满意后付款装修</a></li>
            </ul>
        </nav>
    </article>
</section>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/js/sea.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/js/seaconfig.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/manyi/js/component.js"></script>
<footer>
    <article>
        <p class="copy">Copyright © 2015 <?= Yii::$app->params['siteNameBase']; ?> All Rights Reserved
            <br/><?= Yii::$app->params['siteIcpInfo']; ?>
        </p>
    </article>
</footer>
<script type="text/javascript">
document.body.addEventListener("touchstart",
    function() {},
    false
);
</script>
</article>
<script type="text/javascript">
seajs.use('index');
seajs.use(['bottomseo']); 
seajs.use('common',
    function(common) {
        common.init();
    }
);
</script>
