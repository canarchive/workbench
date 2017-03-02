<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609', '235a4-6274', 'cd7cd-5015'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-merchant/_js-header');//, ['jsFiles' => $jsFiles]);
$info = $this->context->mDatas['info'];
?>
<!--<标项页头部定位 start-->
<?= $this->render('@gallerycms/views/layouts-m/platj-merchant/_top'); ?>
<!--图片轮播 start-->
<?= $this->render('@gallerycms/views/layouts-m/platj-merchant/_slide'); ?>
<!-- 品牌信息 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_brandinfo'); ?>
<?php //echo $this->render('_dynamic'); ?>
<!-- 项目介绍 -->
<ul class="main-title">
    <li><a rel="nofollow" href="#xiangmujieshao"><?= $info['name_full']; ?>介绍</a></li>
    <!--<li><a rel="nofollow" href="#jiamengfeiyong">加盟费用</a></li>
    <li><a rel="nofollow" href="#jiamengyoushi">加盟优势</a></li>
    <li><a rel="nofollow" href="#jiamengdianpu">加盟店铺</a></li>-->
</ul>
<style>#directory p{ color:#333; }</style>
<?php echo $this->render('_desc'); ?>
<?php //echo $this->render('_fee'); ?>
<?php //echo $this->render('_advantage'); ?>
<?php //echo $this->render('_info'); ?>

<?php //echo $this->render('_info-ext'); ?>
<!--我要咨询项目 start-->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_comment'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_guestbook'); ?>
<?php //echo $this->render('_related'); ?>
<?php echo $this->render('_ask'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_merchant'); ?>

<?php //echo $this->render('_footer-ext'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer'); ?>
