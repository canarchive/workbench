<?php 
$qq = Yii::$app->params['siteQQ'];
$qqUrl = $this->context->isMobile ? "mqqwpa://im/chat?chat_type=wpa&uin={$qq}&version=1&src_type=web&web_src=weinaya.com" : "http://wpa.qq.com/msgrd?v=3&uin={$qq}&site=qq&menu=yes";
Yii::$app->params['tdkInfos'] = [
    'title' => '我们的优势-专注装修建材行业CPA效果营销推广服务商',
    'keyword' => 'weinaya，维纳亚，北京维纳亚科技有限公司',
    'description' => '【(weinaya) 维纳亚——为装企而生】北京维纳亚科技有限公司，国内首家专注装修建材行业CPA效果营销推广服务商。',
];
$this->params['currentElem'] = 'advantage';
?>
<?= $this->render('../_banner'); ?>
<div class="captcha-main" style="background-color:#e7e7e7;">
    <div class="row site-width" style="height:370px;overflow:hidden;padding-top:20px;" >
        <div class="small-12 medium-6 columns">
            <div class="screen-shot">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/screenshot1.jpg" alt=""></div>
        </div>
        <div class="small-12 medium-6 columns">
            <div class="main-des">
                <div class="title">我们想对客户说</div>
                <div class="summary">一分钱一分货，我们服务项目和收费，都是为我们所做的效果负责的，请在能接受我

们的收费标准的基础进行咨询（非诚勿扰）以免浪费各自的时间。我们的客户资源都

是各行业高质量长期客户，如果我们是您要找的 “那一位”，你只需要轻轻点击下鼠标

或手指划一下你手机，等着钱掉进你的口袋吧。</div></div>
        </div>
    </div>
</div>

<div class="captcha-example">
    <div class="row site-width" style="padding-top:20px;">
       
         <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_01.png" border="0" width="1200"> 
          <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_02.png" border="0" width="1200">
           <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_03.png" border="0" width="1200">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_04.png" border="0" width="1200">
             <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_05.png" border="0" width="1200">
              <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_06.png" border="0" width="1200">
               <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_07.png" border="0" width="1200">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_08.png" border="0" width="1200">
                <a rel="nofollow" href="<?= $qqUrl; ?>"> <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_09.png" border="0" width="1200"></a>
                  <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_10.png" border="0" width="1200">
                   <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_11.png" border="0" width="1200"> 
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_12.png" border="0" width="1200"> 
           <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_13.png" border="0" width="1200"> 
             <a rel="nofollow" href="<?= $qqUrl; ?>"><img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_14.png" border="0" width="1200"> </a>
             <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_15.png" border="0" width="1200"> 
              <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_16.png" border="0" width="1200"> 
               <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_17.png" border="0" width="1200"> 
                <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_18.png" border="0" width="1200"> 
                 <a rel="nofollow" href="<?= $qqUrl; ?>"> <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_19.png" border="0" width="1200"> </a>
                  <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_20.png" border="0" width="1200"> 
                    <a rel="nofollow" href="<?= $qqUrl; ?>"><img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_21.png" border="0" width="1200"> </a>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_22.png" border="0" width="1200"> 
                     <a rel="nofollow" href="<?= $qqUrl; ?>"> <img src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/img/pic_23.png" border="0" width="1200"> </a>
       
    </div>
</div>

