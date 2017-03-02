<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['fc001-1027', 'f565b-1682', 'a398c-6484', '36c62-5795', 'a7311-6598', 'b8040-5022'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat1']);
$this->params['jsStr'] = $this->render('_js-header');//, ['jsFiles' => $jsFiles]);
?>
<!-- 头部 -->
<?php echo $this->render('_header'); ?>
<!-- 页面主题 start -->
<div class="main offerpath clearfix">
    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/" class="a666"><?= Yii::$app->params['currentCompany']['name']; ?>装修网</a>&gt;
    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/quote/" class="a666"><?= Yii::$app->params['currentCompany']['name']; ?>装修报价</a>&gt;
    <strong class="cGray"><?= $info['name']; ?></strong>
</div>
<!-- 精装简装套餐 start -->
<section class="detail-offer">
    <div class="main">
        <div class="top-share clearfix">
            <div class="wrap">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/img/95d6d-2970.jpg" class="share-icon">
                <span class="share-txt">分享：</span>
                <div class="bdsharebuttonbox l" data-tag="share_1">
                    <a class="bds_tsina" data-cmd="tsina" title="新浪微博"></a>
                    <a class="bds_tqq" data-cmd="tqq" title="腾讯微博"></a>
                    <a class="bds_qzone" data-cmd="qzone" title="QQ空间"></a>
                    <a class="bds_douban" data-cmd="douban" title="豆瓣网"></a>
                    <a class="bds_renren" data-cmd="renren" title="人人网"></a>
                </div>
            </div>
        </div>
        <div class="house-property cWhite">
            <h1 class="f24">北京雷捷时代广场130㎡新古典风格装修报价</h1>
            <p class="f18 mt20">
                <span class="num">6</span>室
                <span class="num">2</span>厅
                <span class="num">1</span>厨
                <span class="num">3</span>卫
                <span class="num">2</span>
                <span class="mr20">阳台</span>
                <span class="btn-gray">别墅</span>
                <span class="btn-gray">新古典风格</span>
                <span class="f14">准备装修</span></p>
        </div>
        <div id="bd-share"></div>
        <div class="hardcover f18">
            <h2 class="f20 mt30">精装价格</h2>
            <ul class="mt5">
                <li>半包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>39543</span></li>
                <li>全包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>88553</span></li>
            </ul>
        </div>
        <div class="simple f18">
            <h2 class="f20 mt30">简装价格</h2>
            <ul class="mt5">
                <li>半包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>36079</span></li>
                <li>全包装修价格：
                    <span class="f30 price">
                        <i class="f18">¥</i>85089</span></li>
            </ul>
        </div>
    </div>
</section>
<!-- 精装简装套餐 end -->
<!-- 装修明细 start -->
<section class="main detail-d">
    <h2 class="title-h2">
        <i>
        </i>装修明细</h2>
    <div class="aa-area">
        <ul class="aa-area-head">
            <li>
                <span class="ml190 w60">主卧</span>
                <span class="w60">次卧</span>
                <span class="w60">其它卧室</span>
                <span class="w60">客厅</span>
                <span class="w60">厨房</span>
                <span class="w60">卫生间</span>
                <span class="w60">阳台</span></li>
            <li class="f18">
                <form method="get" action="" class="form-offer-detail" id="createForm">房屋面积：
                    <span class="f30 cBRed mr10 " id="houseArea">130㎡</span>
                    <input type="hidden" name="type" id="type" value="1" />
                    <input type="hidden" name="square" id="all" value="130" / readonly>
                    <input type="text" name="zhuwo" id="zhuwo" value="28" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="ciwo" id="ciwo" value="19" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="kewo" id="kewo" value="37" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="ting" id="keting" value="19" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="chu" id="chufang" value="6" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="wei" id="weishengjian" value="12" class="input " maxlength="2" autocomplete="off" readonly>
                    <input type="text" name="yangtai" id="yangtai" value="9" class="input " maxlength="2" autocomplete="off" readonly>
                    <span class="f14 cGray">（单位：㎡）</span>
                    <input type="hidden" class="btn btn-orange" id="btn_detail" value="我也去算一下">
                    <a href="" class="btn btn-orange">我也去算一下</a></form>
            </li>
            <li class="tc f18 mt20">
                <span class="jz-btn active">
                    <i class="three">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/img/fde16-7385.jpg" class="threeimg"></i>精装修</span>
                <span class="jz-btn">
                    <i class="three">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/img/fde16-7385.jpg" class="threeimg"></i>简装修</span>
            </li>
        </ul>
        <!-- 精装修表格 start -->
        <div class="aa-area-con active clearfix" id="show_jing">
            <p class="total-price tc">
                <span class="f18 fB">总价格:</span>
                <span class="cBRed mr10 vm">
                    <i class="f14">¥</i>
                    <span class="f36">39543</span></span>以下是《施工报价清单》（即除主材外的半包明细）</p>
            <div class="aa-area-detail clearfix">
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <span>
                    <i class="icon bedroom"></i>
                    <span class="f24">主卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">28</span>单项合计金额：
                        <span class="cBRed">¥6958</span></span>
                    </span>
                    <span>
                    <i class="icon bedroom"></i>
                    <span class="f24">主卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">28</span>单项合计金额：
                        <span class="cBRed">¥6958</span></span>
                    </span>
                </h3>
                <!-- 主卧 end -->
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon s-bedroom"></i>
                    <span class="f24">次卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥4720</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon guest-bedroom"></i>
                    <span class="f24">客卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">37</span>单项合计金额：
                        <span class="cBRed">¥9193</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon guest-room"></i>
                    <span class="f24">客厅</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥7554</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">阳台</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">9</span>单项合计金额：
                        <span class="cBRed">¥1876</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon kitchen"></i>
                    <span class="f24">厨房</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">6</span>单项合计金额：
                        <span class="cBRed">¥2236</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon toilet"></i>
                    <span class="f24">卫生间</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">12</span>单项合计金额：
                        <span class="cBRed">¥4473</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">其它</span>
                    <span class="cDGray fN ml5">
                        <span class="cBRed mr5"></span>单项合计金额：
                        <span class="cBRed">¥2533</span></span>
                </h3>
                <!--<span class="r mt20">
                    <a href="javascript:window.print();" class="btn btn-print mr10">打印</a>
                    <a href="/" class="btn btn-down">下载</a></span>-->
            </div>
        </div>
        <!-- 精装修表格 end -->
        <!-- 简装修表格 start -->
        <div class="aa-area-con clearfix" id="show_jian">
            <p class="total-price tc">
                <span class="f18 fB">总价格:</span>
                <span class="cBRed mr10 vm">
                    <i class="f14">¥</i>
                    <span class="f36">36079</span></span>以下是《施工报价清单》（即除主材外的半包明细）</p>
            <div class="aa-area-detail clearfix">
                <!-- 主卧 start -->
                <h3 class="f14 mt30">
                    <i class="icon bedroom"></i>
                    <span class="f24">主卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">28</span>单项合计金额：
                        <span class="cBRed">¥6713</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon s-bedroom"></i>
                    <span class="f24">次卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥4553</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon guest-bedroom"></i>
                    <span class="f24">客卧</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">37</span>单项合计金额：
                        <span class="cBRed">¥8869</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon guest-room"></i>
                    <span class="f24">客厅</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">19</span>单项合计金额：
                        <span class="cBRed">¥4826</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">阳台</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">9</span>单项合计金额：
                        <span class="cBRed">¥1876</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon kitchen"></i>
                    <span class="f24">厨房</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">6</span>单项合计金额：
                        <span class="cBRed">¥2236</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon toilet"></i>
                    <span class="f24">卫生间</span>
                    <span class="cDGray fN ml5">面积：
                        <span class="cBRed mr5">12</span>单项合计金额：
                        <span class="cBRed">¥4473</span></span>
                </h3>
                <h3 class="f14 mt30">
                    <i class="icon balcony"></i>
                    <span class="f24">其它</span>
                    <span class="cDGray fN ml5">
                        <span class="cBRed mr5"></span>单项合计金额：
                        <span class="cBRed">¥2533</span></span>
                </h3>
                <!-- 主卧 end -->
                <!--<span class="r mt20">
                    <a href="javascript:window.print();" class="btn btn-print mr10">打印</a>
                    <a href="detail.php?action=excel&flag=1&area=130&shi=6" class="btn btn-down">下载</a></span>-->
            </div>
        </div>
        <!-- 简装修表格 end --></div>
</section>
<?php //echo $this->render('_show-charge'); ?>
<?php //echo $this->render('_show-sample'); ?>
<?php echo $this->render('_show-related'); ?>
<?php echo $this->render('_show-pop'); ?>
<?php //echo $this->render('_right_sao'); ?>
<!-- 页脚 start -->
<?php echo $this->render('_footer'); ?>
