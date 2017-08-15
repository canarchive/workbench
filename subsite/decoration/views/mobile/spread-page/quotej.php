<?php
use yii\helpers\Url;

$this->params['formPosition'] = 'hd-tobj';
$this->params['formPositionName'] = '活动-报价详情';

Yii::$app->params['tdkInfos']['title'] =  '装修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2017装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';

?>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/css/380c8-1741.css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/css/90900-5757.css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/css/78520-4650.css" />
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/screen.js"></script>
<script type="text/javascript">smsContent = "免费获取装修报价";
    activity = "getQuote-mobile";</script>
<div class="box_pop_validate" id="j_validate">
    <div class="box_bg"></div>
    <div class="box_container">
        <div class="box_section">
            <div class="box_header">
                <h3>提示</h3>
                <a class="btn btn-close"></a>
            </div>
            <div class="box_content">
                <br>您需要输入验证码:
                <div class="box-validate">
                    <img src="" />
                    <input class="box-input" /></div>
                <button class="box-submit">确定</button></div>
            <div class="box_bottom"></div>
        </div>
    </div>
</div>
<div class="main">
    <div class="header">
        <h2>免费获取装修报价</h2></div>
    <div class="swiper-container container-wrap" id="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide item-1">
                <h2 class="slide-title">请选择房屋类型1/4</h2>
                <ul class="select-xinjiu" data-name="xinjiu">
                    <li data-value="new" data-value2="新房装修">
                        <dd>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/db2bf-2217.png" alt="极装吉住家装季" />
                            <i></i>
                        </dd>
                        <dt>新房装修</dt></li>
                    <li data-value="old" data-value2="老房装修">
                        <dd>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/489b3-6230.png" alt="极装吉住家装季" />
                            <i></i>
                        </dd>
                        <dt>老房装修</dt></li>
                </ul>
            </div>
            <div class="swiper-slide item-2">
                <h2 class="slide-title">请选择房屋户型2/4</h2>
                <ul class="select-huXing" data-name="shi-ting">
                    <li class="page-li" data-value="1-1" data-value2="一室一厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/3a6f2-2244.jpg" alt="极装吉住家装季" />
                        <span>一室一厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="1-2" data-value2="一室两厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/6496c-7537.jpg" alt="极装吉住家装季" />
                        <span>一室两厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="2-1" data-value2="两室一厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/f6de0-9201.jpg" alt="极装吉住家装季" />
                        <span>两室一厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="2-2" data-value2="两室两厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/ccb49-5162.jpg" alt="极装吉住家装季" />
                        <span>两室两厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="3-1" data-value2="三室一厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/eb665-3913.jpg" alt="极装吉住家装季" />
                        <span>三室一厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="3-2" data-value2="三室两厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/6831d-6023.jpg" alt="极装吉住家装季" />
                        <span>三室两厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="4-1" data-value2="四室一厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/b3e7c-1767.jpg" alt="极装吉住家装季" />
                        <span>四室一厅</span>
                        <i>
                        </i>
                    </li>
                    <li class="page-li" data-value="4-2" data-value2="四室两厅">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/ca3f5-9830.jpg" alt="极装吉住家装季" />
                        <span>四室两厅</span>
                        <i>
                        </i>
                    </li>
                </ul>
            </div>
            <div class="swiper-slide item-3">
                <h2 class="slide-title">请选择装修类型3/4</h2>
                <ul class="select-xinjiu" data-name="xinjiu">
                    <li data-value="1" data-value2="全包装修">
                        <dd>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/27e21-4576.png" alt="极装吉住家装季" />
                            <i>
                            </i>
                        </dd>
                        <dt>全包装修</dt></li>
                    <li data-value="2" data-value2="半包装修">
                        <dd>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/b089c-1207.png" alt="极装吉住家装季" />
                            <i>
                            </i>
                        </dd>
                        <dt>半包装修</dt></li>
                </ul>
            </div>
            <div class="swiper-slide item-4">
                <h2 class="slide-title">请选择装修档次4/4</h2>
                <ul class="select-dangci" data-name="xinjiu">
                    <li data-value="1" data-value2="简单装修">
                        <dd>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/4bef2-4938.png" alt="极装吉住家装季" />
                            <i>
                            </i>
                        </dd>
                        <dt>简单装修</dt></li>
                    <li data-value="2" data-value2="精致装修">
                        <dd>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/img/f0c98-4999.png" alt="极装吉住家装季" />
                            <i>
                            </i>
                        </dd>
                        <dt>精致装修</dt></li>
                </ul>
                <div class="form">
                    <input class="c2" type="tel" maxlength="11" data-placeholder="输入电话号码，接收报价结果">
                    <button class="btn-submit">立即计算</button></div>
            </div>
        </div>
    </div>
</div>

<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/swiper.jquery.min.js"></script>
<script>
var price = "";
var swiper = new Swiper('#swiper', {
    pagination: '.pagination-wraper',
    // effect: 'fade',
    paginationClickable: true,
    direction: 'vertical',
    onlyExternal: true,
    allowSwipeToPrev: false,
    //禁止往前翻页
    onInit: function(swiper) {
        $(".swiper-slide ul li").click(function() {
            var activeIndex = swiper.activeIndex;
            console.log(activeIndex);
            var _this = $(this);
            var _value = _this.attr("data-value2");
            if (_this.hasClass("active")) {
                _this.siblings().removeClass("active");
            } else {
                _this.addClass("active").siblings().removeClass("active");
            }
            if (activeIndex == 3) {
                return price;
            } else {
                price = price + '_' + _value;
                console.log(price);
                swiper.slideNext();
            }
        });
    },
    onSlideChangeEnd: function(swiper) {
        // swiper.slides[swiper.activeIndex - 1].style.opacity = 0;
    }
});
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/m/js/index.js"></script>
