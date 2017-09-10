<script src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/js/jquery.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/js/swiper.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/js/jquery.mousewheel.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/js/template.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/js/jquery-ui.min.js"></script>
<script>
$('#date_time').datepicker();
var currentDate = $( "#date_time" ).datepicker( "getDate" );
$( "#date_time" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
</script>
