<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['25195-6919', '167a4-9368', '859bc-4030', '00ce0-6662', '73eaa-5273'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat1/m']);
//$this->params['jsStr'] = $this->render('_js-header');
?>
<?= $this->render('_header'); ?>
<?php //echo $this->render('_nav'); ?>
<!-- 正文 start -->
<div class="container" data-page="gujia">
    <!-- 标题栏 start -->
    <div class="  bar-nav cMdGray clearfix">
        <i class="iconfont icone620 l"></i>
        <strong class="title">估价结果</strong>
        <i class="share-more iconfont icone614 cKGray r mr5"></i>
    </div>
    <!-- 标题栏 end -->
    <div class="mask-layer1 zp-mask-layer1"></div>
    <div id="share-msg" class="bdsharebuttonbox bdshare-button-style0-32">
        <ul class="clearfix">
            <li data-cmd="sqq">
                <img data-cmd="sqq" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/2f434-4058.png">
                <p data-cmd="sqq">QQ</p></li>
            <li data-cmd="qzone">
                <img data-cmd="qzone" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/87c8a-7345.png">
                <p data-cmd="qzone">空间</p></li>
            <li data-cmd="tsina">
                <img data-cmd="tsina" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/fe879-1757.png">
                <p>微博</p>
            </li>
            <li data-cmd="renren">
                <img data-cmd="renren" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/3b993-8854.png">
                <p>人人</p>
            </li>
        </ul>
        <div class="share-msg-btn">取消</div>
    </div>
    <div class="concl-banner">
        <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/5aab6-3943.jpg">
        <div class="con-wrap">
            <div class="ban-tit">
                <h1 style="font-size:1.8rem;"><?= $info['name']; ?></h1></div>
            <p class="size-value-box" style="padding-top: 0;">房屋面积:
                <span class="size-value"><?= $info['area_real']; ?></span>
                <em class="m2-unit">m <i>2</i></em>
            </p>
            <div class="ban-bot">
                <input type="text" value="6">
                <span class="mr1">室</span>
                <input type="text" value="2">
                <span class="mr1">厅</span>
                <input type="text" value="1">
                <span class="mr1">厨</span>
                <input type="text" value="3">
                <span class="mr1">卫</span>
                <input type="text" value="2">
                <span class="mr1">阳台</span>
            </div>
        </div>
    </div>
    <!-- 切换-->
    <div class="com-labelchange-container">
        <!-- 切换导航-->
        <ul class="com-labelchange-btngroup border1-bottom clearfix">
            <li class="com-labelchange-btn width50 active txt" data-index="1">
                <span>简装报价</span></li>
            <li class="com-labelchange-btn width50  txt" data-index="0">
                <span>精装报价</span></li>
        </ul>
        <!-- 切换导航 end-->
        <!-- 切换内容-->
        <div class="com-labelchange-list zt-link-list">
            <div class="concl-list com-labelchange-item active">
                <div class="list-con">
                    <em class="iconfont icone68d cBlue "></em>
                    <div class="txt">
                        <p>半包价格（纯施工）</p>
                        <span>
                            <i>￥</i>36079</span>
                    </div>
                </div>
                <div class="list-con">
                    <em class="iconfont icone688 cBlue "></em>
                    <div class="txt no">
                        <p>全包价格（施工+主材）</p>
                        <span>
                            <i>￥</i>85089</span>
                    </div>
                </div>
            </div>
            <div class="concl-list com-labelchange-item">
                <div class="list-con">
                    <em class="iconfont icone68d cBlue "></em>
                    <div class="txt">
                        <p>半包价格（纯施工）</p>
                        <span>
                            <i>￥</i>39543</span>
                    </div>
                </div>
                <div class="list-con">
                    <em class="iconfont icone688 cBlue "></em>
                    <div class="txt no">
                        <p>全包价格（施工+主材）</p>
                        <span>
                            <i>￥</i>88553</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- 切换内容 end--></div>
    <!--切换 end-->
    <!--taocan-bo end-->
    <h2 class="com-title-tag border1-bottom mt2">
        <i>
        </i>
        <span>施工明细</span></h2>
    <div class="  bar-nav cMdGray calc-t">
        <a href="javascript:void(0);" style="display: block;">
            <em style="font-size: 1.2rem; color: #999;">以下是除主材外的施工明细</em>
            <i class="iconfont icone60c r cIGray" style="margin-top: -1px;"></i>
        </a>
    </div>
    <!-- 表格视图-->
    <ul class="msg-list box88 msg-list-icon mycom-disinput">
        <li>
            <a href="/baojia/644868_1.html">
                <i class="media-object iconfont icone67d l"></i>
                <label class="title">主&nbsp;&nbsp;&nbsp;&nbsp;卧 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="28" style="opacity: 1;" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>6713</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_2.html">
                <i class="media-object iconfont icone68a l"></i>
                <label class="title">次&nbsp;&nbsp;&nbsp;&nbsp;卧 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="19" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>4553</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_3.html">
                <i class="media-object iconfont icone67e l"></i>
                <label class="title">客&nbsp;&nbsp;&nbsp;&nbsp;卧 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="37" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>8869</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_4.html">
                <i class="media-object iconfont icone68a l"></i>
                <label class="title">客&nbsp;&nbsp;&nbsp;&nbsp;厅 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="19" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>4826</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_6.html">
                <i class="media-object iconfont icone67c l"></i>
                <label class="title">厨&nbsp;&nbsp;&nbsp;&nbsp;房 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="6" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>2236</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_7.html">
                <i class="media-object iconfont icone68b l"></i>
                <label class="title">卫生间 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="12" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>4473</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_8.html">
                <i class="media-object iconfont icone67b l"></i>
                <label class="title">阳&nbsp;&nbsp;&nbsp;&nbsp;台 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="9" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>1876</span>
            </a>
        </li>
        <li>
            <a href="/baojia/644868_9.html">
                <i class="media-object iconfont icone680 l"></i>
                <label class="title">其&nbsp;&nbsp;&nbsp;&nbsp;他 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input class="input-hasunit" type="text" value="" readonly/>&nbsp;&nbsp;
                    <em class="cGray m2-unit" style="visibility: hidden;">m
                        <i>2</i>
                    </em>
                </span>
                <span class="span-right">
                    <i class="iconfont icone67a l"></i>2533</span>
            </a>
        </li>
    </ul>
    <?php //echo $this->render('_charge'); ?>
    <?php //echo $this->render('_recomend'); ?>
</div>
<!-- 正文 end -->
<!--页脚 start-->
<?= $this->render('_footer'); ?>
