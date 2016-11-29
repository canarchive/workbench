<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'alzx'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="alzx-section">
    <div class="zshops_main">
        <!-- <div class="topimg-384" style="background:#fcfcfc url(<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/alzx-banner.png) no-repeat top center">
        <div class="topimg-con alzx-img pop_zixun"><a href="javascript:">免费咨询</a></div></div> -->
        <div class="alzx-crumbs alzx-crumbs-f1">
            <div class="alzx-con">
                <a class="crumbs-01" href="/">首页</a>
                <em>></em>
                <span class="crumbs-02">案例中心</span>
                <!--<div class="alzx-search">
                    <a href="javascript:;">搜索</a>
                    <input type="text" placeholder="请输入公司名称">
                </div>-->
            </div>
        </div>
        <!--筛选开始-->
        <!--<div class="alzx-fff alzx-fff-f1">
            <div class="alzx-con">
                <div class="alzx-item">
                    <dl class="alzx-dl">
                        <dt>行业分类</dt>
                        <dd class="case_type active" id="" slug='indu'>全部</dd>
                        <dd slug='indu' class="case_type" id="26">工业品/制造业/包装</dd>
                    </dl>
                    <dl class="alzx-dl">
                        <dt>视觉分类</dt>
                        <dd class="case_type active" id="" slug='view'>全部</dd>
                        <dd slug='view' class="case_type" id="19">蓝色系</dd>
                    </dl>
                    <dl class="alzx-dl">
                        <dt>套餐分类</dt>
                        <dd class="case_type active" id="" slug='type'>全部</dd>
                    </dl>
                </div>
            </div>
        </div>-->
        <!--筛选结束-->
        <!--筛选结果开始-->
        <div class="alzx-result">
            <div class="alzx-con">
                <!--<div class="result-list">
                    <m id="where" style="display:none;">已选条件：</m>
                    <span id='selected_product' class="alzx-none">中企产品分类：
                        <em></em></span>
                    <span id="selected_year" class="alzx-none">年份分类：
                        <em></em></span>
                    <span id="selected_view" class="alzx-none">视觉分类：
                        <em></em></span>
                    <span id="selected_indu" class="alzx-none">行业分类：
                        <em></em></span>
                    <span id="selected_type" class="alzx-none">套餐分类：
                        <em></em></span>
                </div>-->
                <!--瀑布流开始-->
                <div id="main">
                    <ul id="waterfall" class="clearfix">
                        <?php foreach ($infos as $info) { ?>
                        <li class="li_block">
                            <div class="img_block">
                                <a href="/case/104145.html" target="_blank">
                                    <img src="http://www.300.cn/attach/case/20151217/5672234bb77a9.png" alt='沈阳故宫博物院 门户网站建设' /></a>
                                <div class="water-name">
                                    <span class="name-l"></span>
                                    <span class="name-m">NEW Z+</span>
                                    <span class="name-r"></span>
                                </div>
                            </div>
                            <div class="result-txt">
                                <p class="txt-p1">
                                    <a href="/case/104145.html" target="_blank">沈阳故宫博物院 门户网站建设...</a></p>
                                <p class="txt-p2">所属行业:
                                    <a href="/case?indu=57">公共事业/教育</a></p>
                            </div>
                            <div class="result-btn">
                                <a class="r-z good_num" href="javascript:;" id="good_104145" goodid="104145"></a>
                                <a class="r-sc" href="javascript:;" id="scan_104145"></a>
                                <a class="r-fx" href="javascript:;">
                                    <div class="bdsharebuttonbox">
                                        <a href="#" class="bds_more" data-cmd="more"></a>
                                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                        <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                                        <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                    </div>
                                </a>
                                <span class="r-z-tips">赞</span>
                                <span class="r-sc-tips">浏览135220次</span>
                                <span class="r-fx-tips">分享至</span></div>
                        </li>
                        <?php } ?>
                        <script>window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0",
                                    "bdSize": "24"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                        <script>$(function() {
                                // 分享
                                $('.r-fx').click(function(e) {
                                    $(this).siblings('.bdsharebuttonbox').toggle();
                                    e.stopPropagation();
                                })
                                // 隐藏分享按钮
                                $(document).click(function() {
                                    $('.bdsharebuttonbox').hide();
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
                                            that.html(parseInt(that.html(), 10) + 1);
                                        } else {
                                            alert('亲，出错了');
                                        }
                                    },
                                    'json');
                                });

                                $('.result-btn .r-z').hover(function() {
                                    $(this).siblings('.r-z-tips').fadeIn();
                                },
                                function() {
                                    $(this).siblings('.r-z-tips').fadeOut();
                                });

                                $('.result-btn .r-sc').hover(function() {
                                    $(this).siblings('.r-sc-tips').fadeIn();
                                },
                                function() {
                                    $(this).siblings('.r-sc-tips').fadeOut();
                                });

                                $('.result-btn .r-fx').hover(function() {
                                    $(this).siblings('.r-fx-tips').fadeIn();
                                },
                                function() {
                                    $(this).siblings('.r-fx-tips').fadeOut();
                                });

                                $('.result-btn .r-z').click(function(event) {
                                    $(this).siblings('.r-z-tips').fadeOut();
                                });
                                $('.result-btn .r-sc').click(function(event) {
                                    $(this).siblings('.r-sc-tips').fadeOut();
                                });
                                $('.result-btn .r-fx').click(function(event) {
                                    $(this).siblings('.r-fx-tips').fadeOut();
                                });
                                // $('.r-z').hover(function(event) {
                                //     var e=$(this).siblings('.r-z-tips');
                                //     e.stop().animate({'top': -20,'opacity':'1'},500);
                                //     setInterval(function(){e.css({'top':0,'opacity':'0'});},1000);
                                // });
                                // $('.r-sc').click(function(event) {
                                //     var e=$(this).siblings('.r-sc-tips');
                                //     e.stop().animate({'top': -20,'opacity':'1'},500);
                                //     setInterval(function(){e.stop().animate({'top':0,'opacity':'0'},500);},1000);
                                // });

                            });</script>
                    </ul>
                </div>
                <!--瀑布流结束-->
                <!--<div class="more-btn">
                    <div class="page">
                        <div class="all-page">共
                            <span>1052</span>条</div>
                        <div class="flip-page">
                            <ul>
                                <li>
                                    <a class="active">1</a></li>
                                <li>
                                    <a class="num" href="/case/index/page/2.html">2</a></li>
                                <li>
                                    <a class="num" href="/case/index/page/3.html">3</a></li>
                                <li>
                                    <a class="num" href="/case/index/page/4.html">4</a></li>
                                <li>
                                    <a class="num" href="/case/index/page/5.html">5</a></li>
                                <li>
                                    <a class="next" href="/case/index/page/2.html">下一页</a></li>
                                <li>
                                    <a class="end" href="/case/index/page/66.html">尾页</a></li>
                            </ul>
                        </div>
                        <div class="now-page">当前第
                            <span>1/66</span>页</div>
                        <div class="clear"></div>
                    </div>
                </div>-->
            </div>
        </div>
        <!--筛选结果结束-->
        <!--免费咨询开始-->
        <!-- 免费咨询 begin-->
        <?= $this->render('../common/_ask'); ?>
    </div>
</div>
<script type="text/javascript">$(function() {

        var page = 1;
        var maxPage = 66;
        $('.alzx-dl dd').click(function() {
            $(this).addClass('active');
            $(this).siblings('dd').removeClass('active');
        });
        /***************瀑布流******************/

        var waterfall = $('#waterfall');

        $('.case_type').on('click',
        function() {
            var data = {
                product: '',
                year: '',
                view: '',
                indu: '',
                type: ''
            };
            var slug = $(this).attr('slug');
            var val = $(this).attr('id');
            $('#' + slug).val(val);
            var objs = $('.case_type');
            var params = '';
            var isShowWhere = false;
            for (i = 0; i < objs.length; i++) {
                if ($(objs[i]).attr('class') == 'active' || $(objs[i]).attr('class') == 'case_type active') {
                    $.each(data,
                    function(key, val) {
                        if ($(objs[i]).attr('slug') == key) {
                            /*
                if($(objs[i]).attr('id') != ''){
                    if(params != '') params += "&";
                    params += key + '=' + $(objs[i]).attr('id');
                }
                */
                            if ($(objs[i]).attr('id') != '') {
                                isShowWhere = true;
                                data[key] = $(objs[i]).attr('id');
                                $('#selected_' + key + ' em').html($(objs[i]).html());
                                $('#selected_' + key).attr('class', '').show();
                            } else {
                                $('#selected_' + key).hide();
                            }
                        }

                    });
                }
            }
            if (isShowWhere) {
                $('#where').show();
            } else {
                $('#where').hide();
            }
            //window.location.href = "/case?"+params;
            $.post('/case/attr', data,
            function(json) {
                page = 1;
                maxPage = json.taotalPage;
                // alert(waterfall.html());return;
                if (json.totalCount == 0) {
                    alert('没有与您的选择相匹配的案例，请重新选择！');
                    return;
                }
                waterfall.html(json.content);
                out();
                $('.flip-page').html(json.page);
                $('.all-page span').html(json.totalCount);
                $('.now-page span').html(json.currentPage.trim('.html') + '/' + json.totalPage);
                window._bd_share_main.init();
            },
            'json');
        });
        $('.flip-page ul li a').live('click',
        function() {
            var data = {
                product: '',
                year: '',
                view: '',
                indu: '',
                type: '',
                page: 1
            };
            var objs = $('.case_type');
            for (i = 0; i < objs.length; i++) {
                if (($(objs[i]).attr('class') == 'active' || $(objs[i]).attr('class') == 'case_type active') && ($(objs[i]).html() != '全部')) {
                    $.each(data,
                    function(key, val) {
                        if ($(objs[i]).attr('slug') == key) {
                            data[key] = $(objs[i]).attr('id');
                            $('#selected_' + key + ' em').html($(objs[i]).html());
                            $('#selected_' + key).attr('class', '');
                        }

                    });
                }
            }
            var href = $(this).attr('href');
            href = href.trim('.html');
            var pathArr = href.split('/');
            for (var i in pathArr) {
                if (pathArr[i] == 'page') {
                    page = pathArr[parseInt(i) + 1];
                }
            }
            data['page'] = page;
            $.post('/case/attr', data,
            function(json) {
                str = json.content;
                if (json.totalCount == 0) {
                    alert('没有与您的选择相匹配的案例，请重新选择！');
                    return;
                }
                waterfall.html(json.content);
                out();
                $('.flip-page').html(json.page);
                $('.all-page span').html(json.totalCount);
                $('.now-page span').html(json.currentPage.trim('.html') + '/' + json.totalPage);
            },
            'json');
            return false;
        });

        var url = window.location.href;
        var str_sp = url.split('=');
        if (str_sp.length >= 2) $('#' + str_sp.pop()).addClass('active').siblings().removeClass('active');

        $('.alzx-search a').on('click',
        function() {
            var keyword = $('.alzx-search input').val();
            if (! (keyword.trim() == '请输入公司名称' || keyword)) {
                alert('请输入公司名称！');
                return;

            }
            var data = {
                product: '',
                year: '',
                view: '',
                indu: '',
                type: '',
                page: 1,
                keyword: ''
            };
            var objs = $('.case_type');
            for (i = 0; i < objs.length; i++) {
                if (($(objs[i]).attr('class') == 'active' || $(objs[i]).attr('class') == 'case_type active') && ($(objs[i]).html() != '全部')) {
                    $.each(data,
                    function(key, val) {
                        if ($(objs[i]).attr('slug') == key) {
                            data[key] = $(objs[i]).attr('id');
                            $('#selected_' + key + ' em').html($(objs[i]).html());
                            $('#selected_' + key).attr('class', '');
                        }

                    });
                }
            }
            data['keyword'] = keyword;
            $.post('/case/attr', data,
            function(json) {
                str = json.content;
                if (json.totalCount == 0) {
                    alert('没有与您的搜索相匹配的案例！');
                    return;
                }
                waterfall.html(json.content);
                out();
                $('.flip-page').html(json.page);
                $('.all-page span').html(json.totalCount);
                $('.now-page span').html(json.currentPage.trim('.html') + '/' + json.totalPage);

            },
            'json');
        });
        out();
    });

    function out() {
        var objs = $('.good_num');
        var arrayObj = new Array();
        // 输出案例浏览数及点赞数
        for (var i = 0; i < $(objs).length; i++) {
            arrayObj.push($(objs[i]).attr('goodid'));
        }
        $.post('/case/out', {
            id: arrayObj
        },
        function(json) {
            if (json.status != '1') return;
            data = json.info;
            for (var d in data) {
                $('#good_' + d).html(data[d]['good']);
                $('#scan_' + d).html(data[d]['scan']);
            }
        },
        'json');
    }</script>
<div class="ztc-quick clearfix">
    <span class='ztc-quick-close'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/ztc/ztc-icon-close1.png" alt=""></span>
    <div class='ztc-quick-txt'>
        <div class="quick-txt-hd">企业建站“直通车”</div>
        <div class="quick-txt-sub">中企动力为您打造VIP式建站服务</div></div>
    <div class="ztc-quick-iden">
        <span class='quick-iden-q'>您的身份？</span>
        <ul class="clearfix">
            <li class='active'>
                <a href="/zhitongche?id=1" target="_blank">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/ztc/ztc-iden-img1.png" alt="" align='left'>
                    <span>老板</span></a>
            </li>
            <li class='last'>
                <a href="/zhitongche?id=2" target="_blank">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/ztc/ztc-iden-img2.png" alt="" align='left'>
                    <span>职员</span></a>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">$(function() {
        var winW = $(window).width();
        $(window).resize(function() {
            var winW = $(window).width();
        });
        var ztcQuickW = $('.ztc-quick').width();
        var timer = setTimeout(function() {
            $('.ztc-quick').animate({
                left: (winW - ztcQuickW) / 2
            },
            800)
        },
        3000);
        $('.ztc-quick-close').click(function() {
            $('.ztc-quick').animate({
                left: winW
            },
            800);
        });
        $('.ztc-quick-iden ul li').mouseenter(function() {
            $(this).addClass('active').siblings('').removeClass('active');
        });
    });</script>
