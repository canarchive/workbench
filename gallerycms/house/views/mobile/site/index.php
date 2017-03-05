<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['cd7cd-5015', '556dc-3586', '92ee4-2657', '235a4-6274', 'df376-8815', '0d0c2-9033'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('_js-header');
?>
<?php //echo $this->render('@gallerycms/views/layouts-m/platj/_topdown'); ?>
<?php echo $this->render('_slide'); ?>
<?php //echo $this->render('_text'); ?>
<?php echo $this->render('_icon'); ?>
<?php echo $this->render('_activity'); ?>
<?php //echo $this->render('_sort'); ?>
<?php //echo $this->render('_seckill'); ?>
<?php echo $this->render('_content', ['infos' => $merchantInfos]); ?>
<?php //echo $this->render('_content2'); ?>
<?php echo $this->render('_sorthot'); ?>
<?php //echo $this->render('_list'); ?>
<?php //echo $this->render('_tag'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_footer'); ?>
<a class="returntop" href="#top" style="display: none;">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/41560-7162.png"></a>
<script>$(document).scroll(function() {
        var top = $(document).scrollTop();
        if (top == 0) {
            $(".returntop").hide();
        } else {
            $(".returntop").show();
        }
    }); $(".returntop").click(function() {
        $({
            aa: $(window).scrollTop()
        }).animate({
            aa: 0
        },
        {
            duration: 1200,
            step: function() {
                $(window).scrollTop(this.aa);
            }
        })
    })</script>
<!-- 留言验证 start -->
<?php echo $this->render('_pop'); ?>
<?php echo $this->render('_pop-1'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_valid-common'); ?>
<?php echo $this->render('_js-footer'); ?>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/jquery.textslider.js"></script>
