<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'style'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="lxwm_main">
    <?= $this->render('_banner'); ?>
    <div class="container">
        <div class="top_links">
            <a href="/" class="index_link">首页</a>
            <em>></em>
            <a href="<?= Url::to(['/cmsad/info/index', 'tag' => '', 'page'=> 1]); ?>">营销学院</a>
            <?php if (!empty($tagInfos['pInfo'])) { $pInfo = $tagInfos['pInfo']; ?>
            <em>></em>
            <a href="<?= Url::to(['/cmsad/info/index', 'tag' => $pInfo['catdir'], 'page'=> 1]); ?>"><?= $pInfo['name']; ?></a>
            <?php } ?>
            <?php if (!empty($tagInfos['cInfo'])) { $cInfo = $tagInfos['cInfo']; ?>
            <em>></em>
            <a href="<?= Url::to(['/cmsad/info/index', 'tag' => $cInfo['catdir'], 'page'=> 1]); ?>"><?= $cInfo['name']; ?></a>
            <?php } ?>
            <a href="javascript:void(0);"><?= $info['name']; ?></a></div>
        </div>
        <div class="aboutzq">
            <?= $this->render('_left', ['cInfos' => $tagInfos['cInfos'], 'id' => $tagInfos['id']]); ?>
            <div class="zq-content floatL">
                <div class="news-content">
                    <h1 class="title"><?= $info['name']; ?></h1>
                    <div class="sub-info">
                        <!--<span>来源： </span>-->
                        <span>发布时间：<?= date('Y-m-d', $info['created_at']); ?></span>
                    </div>
                    <div class="content"><?= $info['content']; ?></div>
                    <div class="shar">
                        <div class="bdsharebuttonbox bdshare-button-style0-32" data-bd-bind="1446885378413">
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                            <a href="#" class="bds_more" data-cmd="more"></a>
                        </div>
                        <script>window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0",
                                    "bdSize": "32"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                    </div>
                </div>
                <div class="related-article">
                    <div class="t">相关文章</div>
                    <ul>
                        <li>
                            <a href="/info/102311.html" target="_blank">
                                <span>2016-11-21 15:48:06</span>致敬世界互联网大会：当我们年轻时 我们谈什么...</a></li>
                        <li>
                            <a href="/info/102310.html" target="_blank">
                                <span>2016-11-19 21:54:15</span>乌镇时间 | 小编手记：用脚步丈量互联网的温度...</a></li>
                        <li>
                            <a href="/info/102309.html" target="_blank">
                                <span>2016-11-18 17:53:50</span>乌镇时间 | 创新，我们E路前行</a></li>
                        <li>
                            <a href="/info/102308.html" target="_blank">
                                <span>2016-11-17 15:09:30</span>乌镇时间|大会开幕 这里有你要的全部现场...</a></li>
                        <li>
                            <a href="/info/102307.html" target="_blank">
                                <span>2016-11-16 10:31:43</span>乌镇时间 | 世界互联网大会首日看点全在这里...</a></li>
                    </ul>
                </div>
            </div>
            <div class="ask_ways floatR">
                <ul>
                    <li class="ask_ways1">
                        <h3>预约专家</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL pop_zixun">
                                <div>为您提供一对一解决方案</div>
                                <a class="" href="javascript:" value="1">立即预约</a></div>
                        </div>
                    </li>
                    <li class="ask_ways2">
                        <h3>售前咨询</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <div>周一至周五9:00——17:30</div>
                                <a id="TQzx0" class="zaixianzixun" clickCount="true" clickAdd="zaixianzixun">立即咨询</a></div>
                        </div>
                    </li>
                    <li class="ask_ways3">
                        <h3>联系方式</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <p>400-660-5555</p>
                                <div>全国7×24小时热线服务</div></div>
                        </div>
                    </li>
                    <li class="ask_ways4">
                        <h3>免费报价</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <div>专属专业顾问1对1报价</div>
                                <a href="/free.html" target="_blank">免费报价</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- 免费咨询 begin-->
    <div class="free-ask">
        <div class="title">
            <span>免费咨询</span></div>
        <div class="con">
            <div class="form">
                <form action="/customer/feedback?is_ajax=1">
                    <input type="hidden" name="ischeckMobile" value="0" />
                    <div class="textfile">
                        <span class="t">公司名称</span>
                        <input type="text" name="company" id="company_bottom"></div>
                    <div class="textfile">
                        <span class="t">手机号码</span>
                        <input type="text" name="mobile" id="mycall_bottom"></div>
                    <div class="textfile wherecity wrap">
                        <span class="t">所在城市</span>
                        <div class="nice-select marginr gpp" name="nice-select">
                            <input type="text" class="gp" value="请选择省份" readonly="" id="gp_bottom2" name="province"></div>
                        <div class="nice-select marginr gtt" name="nice-select">
                            <input type="text" class="gt" value="请选择城市" readonly="" id="gt_bottom2" name="city">
                            <ul class="city" style="display: none;"></ul>
                        </div>
                        <div class="nice-select gbb" name="nice-select">
                            <input type="text" class="gd" value="请选择区/县" readonly="" id="gd_bottom2" name="district">
                            <ul class="district" style="display: none;"></ul>
                        </div>
                    </div>
                    <div class="textfile lxman">
                        <span class="t">联系人</span>
                        <input type="text" name="truename" id="name_bottom">
                        <div class="appellation">
                            <input type="radio" name="sex" checked="checked" value="先生">
                            <span>先生</span>
                            <input type="radio" name="sex" value="女士">
                            <span>女士</span></div>
                    </div>
                    <div class="textfile z2">
                        <span class="t">邮箱地址</span>
                        <input type="text" name="email" id="email_bottom2"></div>
                    <div class="textfile">
                        <a href="javascript:void(0);" class="submit zixunsubmit" value="99">提交</a></div>
                </form>
            </div>
            <div class="free-tips">我们会尽快联系您，等待期间需要获取更多信息，请
                <a href="<?= Yii::getAlias('@ad.cmsurl'); ?>">继续访问</a>或
                <a id="TQzx3" clickCount="true" clickAdd="zaixianzixun">联系我们</a>。感谢您对中企产品及服务的支持。</div></div>
    </div>
    <script>$(function() {
            $('#email_bottom2').mailAutoComplete({
                width: '404px'
            });
            $('#gp_bottom2').cityselect({
                cityNode: $('#gt_bottom2'),
                districtNode: $('#gd_bottom2')
            });

            var isLock = false;
            $('#verify_message').on('click',
            function() {
                if (isLock) {
                    //alert('手机短信已发送');
                    return false;
                }
                var mobile = $('#mycall_bottom').val();
                if (!validate.checkMobile(mobile)) {
                    alert('手机号码格式有误');
                    return false;
                }
                isLock = true;
                // $(this).attr('href')
                $.post('/verify/message', {
                    mobile: mobile
                },
                function(json) {
                    if (json.status == 0) {
                        alert(json.info);
                        isLock = false;
                        return false;
                    }
                    alert(json.info);
                },
                'json');
                return false;
            })
        });</script>
    <!-- 免费咨询 end-->
</div>
<script>window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "32"
        },
        "share": {}
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];

    $(function() {
        $('.flexslider').flexslider({
            directionNav: false,
            pauseOnAction: true,
            animation: "slide"
        });
    });
    $(function() {
        var butwidth = parseInt($('.flex-control-nav').css('width'));
        var bannerwidth = parseInt($('.flexslider').css('width'));
        $('.flex-control-nav').css('margin-right', (bannerwidth - butwidth) / 2);
    });</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.flexslider-min.js"></script>
