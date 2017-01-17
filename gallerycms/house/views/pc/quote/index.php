<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'quote1-common_pc', 'quote1-poplayer', 'quote1-animate.min', 'quote1-poplunbo', 'quote1-offer', 'quote1-common',
];
$this->params['jsFiles'] = [
    'quote1-jquery-1.11.3.min', 'quote1-common', 'quote1-jquery.lazyload.min', 
    'quote1-provinces', 'quote1-poplayer', 'quote1-poplunbo', 'quote1-offer',
];
?>
<style type="text/css">.iclose{width:26px;height: 26px;background: url(http://beijing.17house.com/images/close.png) no-repeat;position: absolute; right: 3px;top:10px;} .iclose:hover{background: url(http://beijing.17house.com/images/close-h.png) no-repeat;}</style>
<div style="background: url(http://static.17house.com/web/cp/201612/29/161229092714283802dbb5c131f527768f4673991a12.gif) 50% 0 no-repeat;position: relative;height: 70px;overflow: hidden;">
    <a href="http://tuan.17house.com/bj/2764.html" style="display:block; height:70px; width:100%;"></a>
    <a href="javascript:;" class="iclose"></a>
</div>
<!-- 头部 -->
<div class="header">
    <!-- 顶部导航 start -->
    <?php echo $this->render('_nav'); ?>
    <!-- 登录弹窗 -->
    <?php echo $this->render('_login'); ?>
</div>
<div class="main offerpath clearfix">
    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/quote/" class="a666"><?= Yii::$app->params['currentCompany']['name']; ?>装修报价</a>&gt;
    <span class="cGray">列表</span></div>
<div class="main clearfix">
    <?php echo $this->render('_leftnav'); ?>
    <div class="offerlist-r">
        <!-- 右侧列表 start -->
        <div class="offer-plist list-container">
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644868.html" class="a1">雷捷时代广场130平米新古典风格装修报价</a>
                        <span class="graytag">别墅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 36087</span>全包装修价格：
                        <span class="cOrange">¥ 85097</span></p>
                </div>
                <a href="/baojia/644868.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644867.html" class="a1">桃花苑120平米中式风格装修报价</a>
                        <span class="graytag">别墅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 36707</span>全包装修价格：
                        <span class="cOrange">¥ 81947</span></p>
                </div>
                <a href="/baojia/644867.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644866.html" class="a1">万年花城110平米美式风格装修报价</a>
                        <span class="graytag">普通住宅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 33839</span>全包装修价格：
                        <span class="cOrange">¥ 75309</span></p>
                </div>
                <a href="/baojia/644866.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644865.html" class="a1">对视70平米地中海风格装修报价</a>
                        <span class="graytag">小户型</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 22503</span>全包装修价格：
                        <span class="cOrange">¥ 48893</span></p>
                </div>
                <a href="/baojia/644865.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644864.html" class="a1">漷县镇商业广场住宅小区200平米田园风格装修报价</a>
                        <span class="graytag">别墅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 53670</span>全包装修价格：
                        <span class="cOrange">¥ 129070</span></p>
                </div>
                <a href="/baojia/644864.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644863.html" class="a1">五矿万科·如园(如园作品壹号)190平米东南亚风格装修报价</a>
                        <span class="graytag">普通住宅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 56513</span>全包装修价格：
                        <span class="cOrange">¥ 128143</span></p>
                </div>
                <a href="/baojia/644863.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644862.html" class="a1">华凯花园180平米新古典风格装修报价</a>
                        <span class="graytag">别墅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 53670</span>全包装修价格：
                        <span class="cOrange">¥ 121530</span></p>
                </div>
                <a href="/baojia/644862.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644861.html" class="a1">西路时代大厦160平米美式风格装修报价</a>
                        <span class="graytag">普通住宅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 47919</span>全包装修价格：
                        <span class="cOrange">¥ 108239</span></p>
                </div>
                <a href="/baojia/644861.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644860.html" class="a1">国展家园140平米混搭风格装修报价</a>
                        <span class="graytag">别墅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 38647</span>全包装修价格：
                        <span class="cOrange">¥ 91427</span></p>
                </div>
                <a href="/baojia/644860.html" class="ata">查看TA的方案</a></div>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/baojia/644859.html" class="a1">酷特区130平米现代风格装修报价</a>
                        <span class="graytag">别墅</span></p>
                    <p class="p2">半包装修价格：
                        <span class="cOrange mr20">¥ 36087</span>全包装修价格：
                        <span class="cOrange">¥ 85097</span></p>
                </div>
                <a href="/baojia/644859.html" class="ata">查看TA的方案</a></div>
            <!-- 右侧列表 end -->
            <!-- 分页 start -->
            <div class="offer-page-box">
                <div class="dib tc">
                    <a href="/baojia/b0a0o0/p1/" class="pbtn w80">首页</a>
                    <a href="/baojia/b0a0o0/p1/" class="pbtn  active ">1</a>
                    <a href="/baojia/b0a0o0/p2/" class="pbtn ">2</a>
                    <a href="/baojia/b0a0o0/p3/" class="pbtn ">3</a>
                    <a href="/baojia/b0a0o0/p4/" class="pbtn ">4</a>
                    <a href="/baojia/b0a0o0/p5/" class="pbtn ">5</a>
                    <a href="/baojia/b0a0o0/p6/" class="pbtn ">6</a>
                    <a href="/baojia/b0a0o0/p7/" class="pbtn ">7</a>
                    <a href="/baojia/b0a0o0/p2/" class="pbtn w80">下一页</a>
                    <a href="/baojia/b0a0o0/p64487/" class="pbtn w80">尾页</a>
                </div>
            </div>
        </div>
    </div>
    <!-- fixed右侧板子 start -->
    <?php //echo $this->render('_right_sao'); ?>
</div>
<!-- fixed右侧板子 end -->
<!-- 页脚 start -->
<?php echo $this->render('_footer'); ?>
