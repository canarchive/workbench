<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609', 'c3a8c-8745'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-merchant/_js-header-1');
?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_topdown'); ?>
<header class="b_header">
    <div class="wrap">
        <div class="fl header_1">
            <a href="javascript:;" onclick="goBack()" title="" class="icon icon1"></a>
        </div>
        <h2 style="width:86%;text-align:center;float:left;font-size:1.2rem;color:#fff;">晨阳水漆品牌图库</h2>
        <div class="fr header_2">
            <a href="http://m.jmw.com.cn/seek.php" title="" class="icon icon2"></a>
        </div>
    </div>
</header>
<!-- 晨阳水漆官网 -->
<section class="guanWang2">
    <dl class="clear">
        <dt class="fl">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/f3dc5-2512.jpg" alt="晨阳水漆加盟" title="晨阳水漆加盟" /></dt>
        <dd class="fl">
            <h2>晨阳水漆品牌图库</h2>
            <p>
                <a href="http://m.jmw.com.cn" title="中国加盟网">中国加盟网</a>
                <i>></i>
                <a href="http://m.jmw.com.cn/so/i24/" title="建材">建材</a>
                <i>></i>
                <a href="http://m.jmw.com.cn/so/i89/" title="油漆">油漆</a>
                <i>></i>
                <a href="http://m.jmw.com.cn/xm137829/" title="晨阳水漆">晨阳水漆</a>
                <i>></i>
                <a href="http://m.jmw.com.cn/xm137829/pinpaituku/" title="晨阳水漆品牌图库">晨阳水漆品牌图库</a></p>
        </dd>
    </dl>
</section>
<?php echo $this->render('_content-merchant'); ?>
<!--我要咨询项目 start-->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_guestbook'); ?>
<!-- 晨阳水漆相关信息项目 -->
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_related'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_footer'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_check'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_pop-show'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-new'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_guestbook'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_valid-common'); ?>
