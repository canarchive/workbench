<div class="ff">
    <span class="line"></span>
    <p><?= Yii::$app->params['siteCopyRightInfo']; ?></p>
    <p><a rel="nofollow"><?= Yii::$app->params['siteIcpInfo']; ?></a></p>
</div>
<div class="fud">
    <a class="fudzuo fudzuo_left" rel="nofollow" href="<?= $this->context->serviceUrl; ?>" target="_blank" title="预约拍摄">
        <i class="icon_left"></i> 预约
    </a>
	<a class="fudzuo fudzuo_right" href="tel:<?= Yii::$app->params['siteHotline']; ?>">
        <i class="icon_right"></i> 电话
    </a>
</div>

<script type="text/javascript" src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/m/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/m/js/swiper.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/m/js/m_template.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/js/jquery-ui.min.js"></script>

<script>
$('.bm li').click(function(){
    $(this).addClass('cur').siblings('li').removeClass('cur');
})
//console.log($('.bm .cur').attr('data-type'));
</script>
<script>
$('#date_time').datepicker();
var currentDate = $( "#date_time" ).datepicker( "getDate" );
$( "#date_time" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
</script>
