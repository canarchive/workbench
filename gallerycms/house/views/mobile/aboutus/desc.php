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
            <a href="/" target="">装修网</a>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
        由北京兔班长科技有限公司斥巨资打造的兔班长装修网（<a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>">www.tubanzhang.com</a>)是中国最具权威的装修建材行业平台，目前已在全国近百个大中城市开设分站，在超过110个一二线设立分支机构，入驻装饰企业超过10万家，帮助逾十万企业成功转型电子商务。
        </p>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
        从2016年成立至今，兔班长网建立了完善的装饰企业品牌推广、形象维护体系，致力于扩大装饰企业在互联网的影响力，为企业带来高速的来自于互联网的产值增长，进而推动企业整体发展，有效地结合线上线下的影响力，最终为企业成功融入互联网时代的浪潮做出最强力的支持。
        </p>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
        做中国最专业的家装门户，需要的是时间，对于兔班长人来说，敬业，职业，专业，用心，不断地提升自我，为客户提供优质的服务，帮助客户选择最优的装修公司，解决客户在家装中遇到的难题，是其发展过程中永远的话题。
        </p>
        <p style="padding:0px;font-size:14px;vertical-align:baseline;border:0px none;color:#333333;font-family:tahoma, helvetica, arial, sans-serif, 宋体;;line-height:1.75em;background-color:#ffffff;margin-top:10px;margin-bottom:0px;">
        “创新、速度、合作、共赢”是兔班长人的宗旨，兔班长正在不断努力突破，打造一个互赢的家装平台。
        </p>
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
