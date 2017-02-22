<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['0e165-7624', 'd6112-7354', '683ed-3544', '35fe8-8296'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('_js-header', []);
$info = $this->context->mDatas['info'];
?>
<?= $this->render('_style'); ?>
<!--head-->
<?= $this->render('@gallerycms/views/layouts/platj/_top'); ?>
<input type="hidden" id="projectId" value="137829" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/loginstatus.js"></script>
<p class="clr"></p>
<!--行业列-->
<?php //echo $this->render('@gallerycms/views/layouts/platj/_toplist'); ?>
<!--热门项目-->
<div style="clear: both;"></div>
<!--广告图-->
<div class="advertis clearfix wrapper" style='margin-top:15px'>
    <a title="" class="fl" ad_need_click="true" ad_id="432" href="/" target="_blank">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/19d11-1599.gif" width='714' height='60' /></a>
    <a title="" class="fr" ad_need_click="true" ad_id="433" href="/" target="_blank">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4e047-3593.gif" width='266' height='60' /></a>
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
<div class="brand wrapper">
    <div class="brand_title clearfix">
        <div id="wrapper">
            <div class="menuBox">
                <span style="font-size: 22px;color: #444;font-weight: normal;" title="<?= $info['name_full']; ?>"><?= $info['name_full']; ?></span></div>
        </div>
        <style>#wrapper{width:990px;margin:0 auto;} .menuBox{line-height:23px; position:relative;} .menuBox h1,.menu1{display:inline-block;} .menuBox h1{font-size:24px;font-weight:normal;position:absolute;top:0;left:0;} .menu1{margin-left:10px; position:absolute;top:0;right:0;} .menu1 a { border: 1px solid #3399FF; border-radius: 3px; color: #444; display: inline-block; height: 30px; line-height: 30px; padding: 0 8px; text-decoration: none; margin-left:10px; } .guanZhu_fixed{ background:rgba(0,0,0,.3) url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/bf220-9676.png') no-repeat 8px; width:62px; height:28px; z-index:1000; position:absolute; right:7px; top:8px; line-height:28px; color:#fff; padding-left:28px; }</style></div>
    <!--content-->
    <div class="content wrapper clearfix">
    <?= $this->render('_content'); ?>
    </div>
    <!-- 找资金 找场地 找装修 找优惠 合伙开店 找委托弹框 start-->
    <?= $this->render('_pop'); ?>
    <!-- 在线咨询弹框 start-->
    <?php //echo $this->render('_ask'); ?>
</div>
<!-- 热搜品牌排行榜 start -->
<?= $this->render('_hotinfo', ['merchantInfos' => $merchantInfos, 'askInfos' => $askInfos, 'quoteInfos' => $quoteInfos]); ?>
<!-- 选项卡 加盟怎么样 -->
<?= $this->render('_how', ['infos' => $merchantRelateInfos]); ?>
<script type="text/javascript">
$(function() {
    $('.p_howLiao > .ul_nav > .li_hover').click(function() {
        $(this).addClass('hover_select').siblings('.hover_select').removeClass('hover_select');
        //$('.p_howLiao .how_con .howLiao_list').eq($(this).index()).show().siblings().hide();
    }); $('#li_hover1').click(function() {
        $('#howLiao_list1').show();
        $('#howLiao_list2').hide();
    }); $('#li_hover2').click(function() {
        $('#howLiao_list2').show();
        $('#howLiao_list1').hide();
    })
})
</script>
<!--footer-->
<?= $this->render('@gallerycms/views/layouts/platj-merchant/_footer'); ?>
