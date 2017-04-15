<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['07e93-6450', 'd560a-7187', '9c07e-2206'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/plat8/_js-header');
?>

<?php echo $this->render('@gallerycms/views/layouts-m/plat8/_header'); ?>
<style>
.shareto-wrap h2 {
  padding-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
}

</style>

<article>
    <header>
        <br /><br />
        <h1><?= Yii::$app->params['siteNameBase']; ?>装修网：装修就找<?= Yii::$app->params['siteNameBase']; ?></h1>
        <!--<span><a href="/news/pinpai/">品牌风向</a>|</span><time>2015-08-31</time><span>| 点击次数：593451</span>-->
    </header>
    <div class="details">
        <p style="text-align:center;line-height:1.75em;margin-top:10px;">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/6b375-9554.jpg" title="土巴兔logo" alt="网页端RGB_1.jpg" border="0" hspace="0" vspace="0" /></p>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
            <span style="background-color:transparent;font-size:14px"><?= Yii::$app->params['siteNameBase']; ?></span>
            <a href="<?= "/{$this->context->currentCityCode}/"; ?>" title="<?= Yii::$app->params['siteNameBase']; ?>">装修网</a>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
兔班长装修网（<a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>">www.tu8zhang.com</a>)是北京维纳亚科技有限公司全力打造的互联网装修建材平台。兔班长装修网认为，要深化家装行业服务品质、提升业主体验，就要解决装修业主重决策与家装企业长服务链条的矛盾，建立起公平、透明、可持续深入的综合平台，满足业主与装企的刚性需求！</p>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
兔班长装修网以“创新、速度、合作、共赢”为宗旨，欲打造中国最具权威的互联网装修建材平台，计划在全国近百个大中城市开设分站，用全新的商业模式营造共赢的商业氛围！</p>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
做中国最专业的互联网家装建材门户！是兔班长装修网的目标，我们将以专业，职业、敬业的执行标准，不断地提升自我、实现突破、为客户提供优质的服务！</p>
    </div>
</article>
<section class="zx-wtg-wrap" style='margin:0 10px 0 10px;'>
    <i class="zx-wtg-logo"></i>
    <h2>关注<?= Yii::$app->params['siteNameBase']; ?>微信，领装修大礼包</h2>
    <p>打开微信，关注微信号：
    <em><?= Yii::$app->params['siteWechat']; ?></em></p>
</section>
<!--分享-->
<script>if (!window.jQuery || !window.$) {
        var jq_lh = document.createElement('script');
        jq_lh.type = 'text/javascript';
        jq_lh.src = "http://static.to8to.com/wap/js/jquery-1.9.0.min.js";
        document.getElementsByTagName('head')[0].appendChild(jq_lh);
    };</script>

<?php echo $this->render('_share'); ?>
<script>$('.sns').on('click',
    function() {
        var ptag = $(this).attr('dataptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag); //埋点
    });</script>
<?php //echo $this->render('_recommend'); ?>
<?= $this->render('@gallerycms/views/layouts-m/plat8/_footer'); ?>
<?= $this->render('@gallerycms/views/layouts-m/plat8/_js-footer'); ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/share.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/share2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/h5appdownload_sourcecharge.min.js"></script>
