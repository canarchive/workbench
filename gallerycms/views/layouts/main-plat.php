<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['0e165-7624', 'd6112-7354', '683ed-3544'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('@gallerycms/views/platj/pc/_js', []);
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>

<!--head-->
<div class="topToolbar" id="testDiv"></div>
<input type="hidden" id="projectId" value="137829" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/loginstatus.js"></script>
<p class="clr"></p>
<!--行业列-->
<?= $this->render('@gallerycms/views/platj/pc/_toplist'); ?>
<!--广告图-->
<div class="advertis clearfix wrapper">
    <a title="阳光喔作文加盟" class="fl" ad_need_click="true" ad_id="432" href="http://search.jmw.com.cn/jmw_user/ygw/" target="_blank">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/19d11-1599.gif" width='714' height='60' /></a>
    <a title="福汽启腾加盟" class="fr" ad_need_click="true" ad_id="433" href="http://www.jmw.com.cn/xm6676136/" target="_blank">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4e047-3593.gif" width='266' height='60' /></a>
</div>
<!--加盟网LOGO+搜索框-->
<?= $this->render('@gallerycms/views/platj/pc/_logo'); ?>
<!--导航-->
<?= $this->render('@gallerycms/views/platj/pc/_nav'); ?>
<!-----------PC公共短信验证 start-------------->
<?= $this->render('@gallerycms/views/platj/pc/_topvalid'); ?>
<!--面包屑-->
<?= $this->render('@gallerycms/views/platj/pc/_breadnav'); ?>
<!--brand information-->
<?= $this->render('@gallerycms/views/platj/pc/_brandinfo'); ?>
<!--在线咨询 屏幕中间 E-->
<?= $this->render('@gallerycms/views/platj/pc/_middlevalid'); ?>
<!--content-->
<div class="content wrapper clearfix">
    <div class="fl cont_left">
        <?= $content; ?>
        <?= $this->render('@gallerycms/views/platj/pc/_left-comment'); ?>
        <?= $this->render('@gallerycms/views/platj/pc/_left-guestbook'); ?>
    </div>
    <!---右-->
    <?= $this->render('@gallerycms/views/platj/pc/_right'); ?>
</div>
<!--footer-->
<?= $this->render('@gallerycms/views/platj/pc/_footer'); ?>
<?php $this->endContent(); ?>
