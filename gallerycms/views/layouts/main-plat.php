<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['0e165-7624', 'd6112-7354', '683ed-3544'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('platj-merchant/_js', []);
$info = $this->context->mDatas['info'];
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>

<!--head-->
<?= $this->render('platj/_top'); ?>
<input type="hidden" id="projectId" value="<?= $info['id']; ?>" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/loginstatus.js"></script>
<p class="clr"></p>
<!--行业列-->
<?php //echo $this->render('@gallerycms/views/layouts/platj/_toplist'); ?>
<!--广告图-->
<div class="advertis clearfix wrapper">
    <a title="" class="fl" ad_need_click="true" ad_id="432" href="javascript:void(0);">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/19d11-1599.gif" width='714' height='60' />
    </a>
    <a title="" class="fr" ad_need_click="true" ad_id="433" href="javascript: void(0);">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4e047-3593.gif" width='266' height='60' />
    </a>
</div>
<!--加盟网LOGO+搜索框-->
<?= $this->render('@gallerycms/views/layouts/platj/_logo'); ?>
<!--导航-->
<?= $this->render('@gallerycms/views/layouts/platj-merchant/_nav'); ?>
<!-----------PC公共短信验证 start-------------->
<?= $this->render('@gallerycms/views/layouts/platj/_topvalid'); ?>
<!--面包屑-->
<?= $this->render('@gallerycms/views/layouts/platj-merchant/_breadnav'); ?>
<!--brand information-->
<?= $this->render('@gallerycms/views/layouts/platj-merchant/_brandinfo'); ?>
<!--在线咨询 屏幕中间 E-->
<?= $this->render('@gallerycms/views/layouts/platj/_middlevalid'); ?>
<!--content-->
<div class="content wrapper clearfix">
    <div class="fl cont_left">
        <?= $content; ?>
        <?php if (!isset($this->params['noCommentList'])) { echo $this->render('platj-merchant/_left-comment'); } ?>
        <?= $this->render('platj-merchant/_left-guestbook'); ?>
    </div>
    <!---右-->
    <?= $this->render('platj-merchant/_right'); ?>
</div>
<!--footer-->
<?= $this->render('platj-merchant/_footer'); ?>
<?php //echo $this->render('@gallerycms/views/layouts/platj/_pop-merchant'); ?>
<?php $this->endContent(); ?>
