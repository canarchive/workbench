<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'plat-style', 'plat-jmw_shangqiao', 'plat-bzCommon2', 
];
$this->params['jsFiles'] = [
    'plat-jquery-1.6.min', 'plat-jquery-1.10.2.min', 'plat-sucaijiayuan', 
    'plat-myJs', 'plat-jmw_city', 'plat-jquery-ui', 'plat-jquery.newslides.min', 
    'plat-topToolbar', 'plat-searchList', 'plat-bookmark', 'plat-tongji', 
    'plat-ScrollPic-min', 'plat-main', 'plat-xmlHttp', 'plat-ga', 
    'plat-Cookie', 'plat-jmw_util', 'plat-jmw_com', 'plat-liuyan_from', 
    'plat-jquery-1.8.2.min', 'plat-showAuthenticationYear', 'plat-log', 
    'plat-advertisePv', 'plat-vote', 'plat-grade', 'plat-searchPublic', 
    'plat-browseRecord', 'plat-addPageView', 'plat-newBaiDuShangqi', 'plat-loginStatus',
];
?>
<?php echo $this->render('@gallerycms/views/common/pc/jmw-style'); ?>
<div class="topToolbar" id="testDiv"></div>
<input type="hidden" id="projectId" value="60614" />
<p class="clr"></p>
<!--行业列-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-top'); ?>
<!--广告图-->
<div class="advertis clearfix wrapper">
    <a title="阳光喔作文加盟" class="fl" ad_need_click="true" ad_id="432" href="http://search.jmw.com.cn/jmw_user/ygw/" target="_blank">
        <img src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2016/0327/20160327093842873.gif" width='714' height='60' /></a>
    <a title="福汽启腾加盟" class="fr" ad_need_click="true" ad_id="433" href="http://www.jmw.com.cn/xm6676136/" target="_blank">
        <img src="http://attachment.jmw.com.cn/jmw_search_uploadfile/2017/0111/20170111043231438.gif" width='266' height='60' /></a>
</div>
<!--加盟网LOGO+搜索框-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-logo-search'); ?>
<script>var is_login = "login";</script>
<!--导航-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-top-nav'); ?>
<!--通用短信验证-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-msg-check'); ?>
<!--面包屑-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-breadnav'); ?>
<!--brand information-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-merchant-banner'); ?>
<!--在线咨询 屏幕中间 E-->
<?php echo $this->render('@gallerycms/views/common/pc/jmw-signup-form'); ?>
<!--content-->
<div class="content wrapper clearfix">
    <div class="fl cont_left">
        <!--imgs begin-->
        <!--图片查看器-->
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-left-pic'); ?>
        <!---留言--->
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-left-gblist'); ?>
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-left-guestbook'); ?>
    </div>

    <!---右-->
    <div class="fr cont_right">
        <!-- 网友点评 -->
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-right-comment'); ?>
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-right-hotelem'); ?>
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-right-recommend'); ?>
        <?php echo $this->render('@gallerycms/views/common/pc/jmw-right-ad'); ?>
    </div>
    <?php //echo $this->render('@gallerycms/views/common/pc/jmw-webcall'); ?>
</div>
<!--项目关注弹出层 开始-->
<?php //echo $this->render('@gallerycms/views/common/pc/jmw-pop'); ?>
<!--底部 开始-->
<?php //echo $this->render('@gallerycms/views/common/pc/jmw-footer'); ?>
<div class="footer">
