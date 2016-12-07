<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
'common', 'public', 'guanwang'
];
$this->params['jsFiles'] = [
'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<?= $this->render('_c1_banner'); ?>
<?php //$this->render('_c2_sample'); ?>
<?php //$this->render('_c3'); ?>
<?php echo $this->render('_c4'); ?>
<?php echo $this->render('_c5'); ?>
<input type="hidden" id="admin_add" name="admin_add" value="26">
<input type="hidden" id="admin_add_value" name="admin_add_value" value="">
<!-- 第七屏 end-->
<?= $this->render('../common/_ask'); ?>
<script src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/newZ.js"></script>
<script type="text/javascript">$(function() {
        $('.flexslider').flexslider({
            directionNav: false,
            pauseOnAction: false,
            pauseOnHover: true,
            slideshowSpeed: 3000,
            animation: "fade"
        });
        $('.good_num').on('click',
        function() {
            var that = $(this);
            var id = that.attr('goodid');
            $.post('/case/good', {
                id: id
            },
            function(json) {
                if (json.status == 1) {
                    that.html('<i></i>' + (parseInt(that.text(), 10) + 1));
                } else {
                    alert('亲，出错了');
                }
            },
            'json');
        });
    })</script>
