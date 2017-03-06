<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['dfc20-7370', '9c07e-2206'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
echo $this->render('@gallerycms/views/layouts-m/plat8/_js-header');
?>
<?= $this->render('_header'); ?>
<?= $this->render('_js-list'); ?>
<section class="zxask-list-wrap">
    <?php //echo $this->render('_search'); ?>
    <?= $this->render('_sort', $sortInfos); ?>
    <div id="overlay"></div>
    <div class="zxask-main-list">
        <ul class="zxask-ask-list">
            <?php foreach ($infos as $info) { ?>
            <li class="zxask-ask-list-item">
                <!--<div class="zxask-ask-list-left">
                    <img class="lazy" data-original="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/7a8b9-9481.jpg" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/092bb-5394.png" alt="落花盈满袖"></div>-->
                <div class="zxask-ask-list-right">
                    <!--<p class="zxask-ask-user">网友落花盈满袖问:</p>-->
                    <!--<span class="zxask-ask-time">4天前</span>-->
                    <a class="zxask-ask-title" href="/askshow_<?= $info['id']; ?>.html"><?= $info['name']; ?></a>
                    <a class="zxask-ask-type" href="/ask_lm_<?= $info['sort']; ?>/">[<?= $sortInfos['sortInfos'][$info['sort']]['name']; ?>]</a>
                    <a class="zxask-ask-num" href="/askshow_<?= $info['id']; ?>.html"><?= $info['num_answer']; ?>个回答</a></div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div data-role="widget-pagination">
        <?php $pageNum = ceil($pages->totalCount / $pages->defaultPageSize); $pagePre = $page == 1 ? 1 : $page - 1; $pageSuffix = $page == $pageNum ? $pageNum : $page + 1; ?>
        <a class="widget-pagination" href="<?= "/ask_lm_{$sortInfos['code']}_{$pagePre}/"; ?>">上一页</a>
        <div>
            <a class="widget-pagination-current-page" href="<?= "/ask_lm_{$sortInfos['code']}_{$pagePre}/"; ?>"><?= $page; ?>/<?= $pageNum; ?></a>
            <select class="widget-pagination-pages" id="pageCounts">
                <?php for ($i = 1; $i <= $pageNum; $i++) { ?>
                <option value="<?= "/ask_lm_{$sortInfos['code']}_{$i}/"; ?>" <?php if ($i == $page) { echo "selected"; } ?>><?= $i . '/' . $pageNum; ?></a></option>
                <?php } ?>
            </select>
        </div>
        <a href="<?= "/ask_lm_{$sortInfos['code']}_{$pageSuffix}/"; ?>">下一页</a></div>
</section>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/css/b6c9e-6532.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/css/c103d-8382.css" />
<?php //echo $this->render('_signup'); ?>
<?php //echo $this->render('_weichat'); ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/plat8rsas.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/zbcommon.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/cookie.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/provincesselect.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/componentsh5.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/fabiao4_dialog.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/appguide.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common_cityfromip.js"></script>
<script>var slide_start_high = slide_start_high || '';
    var h5_xgt_timing = h5_xgt_timing || ''; (function(slide_start_high) {
        var cityMemory = ''; //存储城市信息 
        var cityPrevious = ''; //上一个城市的信息
        var cityHold_data = ''; //存储接口城市信息
        var wx_flag = false; //微信小号banner出现标识       
        $('#dt-hd-navs-wrap').css('z-index', '10000');
        //调用ip返回城市接口
        getCityFromIp(cityHold); //设置回调方法      
        //执行这个方法
        zxbjObj.init();
        //初始化省市
        ProvincesSelect.initialize({
            targetDom: '#slide_area',
            callback: function() {
                //选择城市为深圳则显示微信小号banner
                var bothName = $('#slide_area').val().split(' ');
                var cityName = '';
                if (bothName) {
                    cityName = bothName[1];
                };
                cityMemory = cityName;
                cityBottom(cityName);
            }
        });
        //点击收起
        var mark = false;
        var us_flag = false; //用户操作标识
        var hl = ''; //定时器 
        var screen_num = $('body').height(); //需要滚动body高度
        var h_control = false; //无高度限制
        var ptag_bg = $('.ptag-set').attr('dataptag') || '';
        var slide_num = false; //一个页面记录一次上滑
        var complete_show = false; //表示全部展示
        ssh(slide_start_high); //通过这个函数处理页面对浮框的控制规则  
        var dom_height = $(document).height();
        $('.cc-box').addClass('cc-box-style');
        function ssh(slide_start_high) {
            if (slide_start_high > 0) {
                screen_num = slide_start_high;
                h_control = true; //有高度限制
            }
            if (slide_start_high == 1) {
                screen_num = 0;
            };
        }
        var show_flag = true; //统计用户是否展示
        $(".shade-click").on('touchmove',
        function(e) {
            mark = true;
        });
        $(".shade-click").on('touchend',
        function(e) {

            //$(this).removeAttr('style');
            //排除滑动触发
            if (mark) {
                mark = false;
                return;
            }
            e.preventDefault();
            us_flag = true;
            if ($('.dialog-827img').hasClass('dialog-827img-up')) {

                stop();
                $('.whan-ad').animate({
                    bottom: '334'
                },
                500,
                function() {
                    $('.dialog-827img').removeClass('dialog-827img-up');
                    $('.dialog-827img').css('top', '45px');
                    show_statistics();
                    clearInterval(hl);
                    //清除弹框的定时器
                    clear_timing(h5_xgt_timing);
                    //未选择城市才执行
                    if (cityMemory.length == 0) {
                        cityBottom(cityHold_data);
                    }
                });
                // 打开浮框并且城市为深圳则显示微信小号banner
                var bothName = $('#slide_area').val().split(' ');
                var cityName = '';
                if (bothName) {
                    cityName = bothName[1];
                };
                if (cityName === '深圳' || cityName === '东莞') {
                    $('.whan-ad-ask .fabiaoqu-ask').height(418);
                    $('.whan-ad').stop().animate({
                        bottom: '418px'
                    },
                    400,
                    function() {
                        $('#banner-wx-new-init').show();
                        //控制箭头逻辑
                        $('.dialog-827img').removeClass('dialog-827img-up');
                        $('.dialog-827img').css('top', '45px');
                        clearInterval(hl);
                    });
                }
            } else {

                // 关闭浮框则隐藏微信小号banner
                $('#banner-wx-new-init').hide();
                $('.whan-ad').height(53);
                $('.whan-ad-ask .fabiaoqu-ask').height(334);

                stop();
                $('.whan-ad').animate({
                    bottom: '0'
                },
                500,
                function() {
                    $('.dialog-827img').addClass('dialog-827img-up');
                    h_setTime();
                    //发过标 并点击下滑
                    if (getCookie('already_fabiao') === 'true' || getCookie('already_fabiao_shenzhen') === 'true' || getCookie('already_fabiao_dongguan') === 'true') {
                        window.appGuide.init({});
                    }
                    //完整展示过一次 并点击下滑按钮 存一个半个小时的cookie
                    if (complete_show) {
                        setCookie1('h5_slide_c', 'true', 1 * 60 * 1000);
                    };
                });
            }
        });
        h_setTime();
        var top = $('.dialog-827img').css('top');
        function h_setTime() {
            hl = setInterval(function() {
                if (!$('.dialog-827img').hasClass('dialog-827img-up')) {
                    $('.dialog-827img').css('top', '45px');
                    return;
                };
                top = $('.dialog-827img').css('top');
                if (top == '45px' || top == '50px') {
                    $('.dialog-827img').css('top', '40px');
                }
                if (top == '40px') {
                    $('.dialog-827img').css('top', '50px');
                };
            },
            1);
        }
        //初始化
        height_control();
        //使底部发标框宽度一致
        var wh_height = $('.whan-ad-ask').width() + 105;
        var haha = -1;
        $('.fabiaoqu-ask,.shade-click').width(wh_height + 'px');
        $(window).resize(function() {
            var wh_height = $('.whan-ad-ask').width() + 105;
            $('.fabiaoqu-ask,.shade-click').width(wh_height + 'px');
        })
        //页面滑动监控
        $(window).scroll(function() {
            height_control();
        }); $('.cc-box-style').scroll(function() {
            height_control();
        })
        //滑动控制
        function height_control() {
            //如果用户自行做了操作 则此处不影响用户操作
            if (us_flag) {
                return;
            }
            //无高度限制则不进这个函数
            if (!h_control) {
                return;
            }
            //出现了微信小号banner则不进这个函数
            if (wx_flag) {
                return;
            };
            //半个小时内完整展示过    全站不自动上滑
            // if (getCookie1('h5_slide_c') == 'true') {
            //     return;
            // }
            //在底部发标登记  5天内全站不自动上滑            
            // if (getCookie('h5_register_c') == 'true') {
            //     return;
            // }
            var win_height = $(window).height(); //窗口高度
            var scr_height = $('.cc-box-style').scrollTop() || $(window).scrollTop() //滚动条滚动的距离
            // var mistake_height = scr_height - screen_num;//相差距离  滚动条滚动的距离-口高度
            var bottom = parseInt($('.whan-ad-ask').css('bottom'));
            //滚动条到最底部的时候
            if (bottom >= 334 && (dom_height <= $(window).height() + scr_height)) {
                $('.whan-ad-ask').css('bottom', '334px');
                $('.dialog-827img').removeClass('dialog-827img-up');
                $('.dialog-827img').css('top', '45px');
                show_statistics();
                clearInterval(hl);
                //未选择城市才执行
                if (cityMemory.length == 0) {
                    cityBottom(cityHold_data);
                }
                return;
            }

            if ((bottom + scr_height - haha) < 0) {
                $('.whan-ad-ask').css('bottom', '0');
                $('.dialog-827img').addClass('dialog-827img-up');
                //发过标 并点击下滑
                if (getCookie('already_fabiao') == 'true' || getCookie('already_fabiao_shenzhen') == 'true' || getCookie('already_fabiao_dongguan')) {
                    window.appGuide.init({});
                }
                h_setTime();
            } else if ((bottom + scr_height - haha) >= 334) {
                $('.whan-ad-ask').css('bottom', '334px');
                $('.dialog-827img').removeClass('dialog-827img-up');
                $('.dialog-827img').css('top', '45px');
                show_statistics();
                clearInterval(hl);
                //未选择城市才执行
                if (cityMemory.length == 0) {
                    cityBottom(cityHold_data);
                }

            } else if (scr_height > screen_num) { //滚动条滚动的距离 大于 窗口高度(超过一屏)                
                $('.whan-ad-ask').css('bottom', (bottom + scr_height - haha) + 'px');
                //清除弹框的定时器
                clear_timing(h5_xgt_timing)
            }

            if (scr_height < haha && (bottom + scr_height - haha) > 0) {
                $('.whan-ad-ask').css('bottom', (bottom + scr_height - haha) + 'px');
                //清除弹框的定时器
                clear_timing(h5_xgt_timing);
                // 关闭浮框则隐藏微信小号banner
                $('#banner-wx-new-init').hide();
                $('.whan-ad').height(53);
                $('.whan-ad-ask .fabiaoqu-ask').height(334);
            }
            haha = scr_height;
        }
        //清除定时器
        function clear_timing(h5_xgt_timing) {
            clearTimeout(h5_xgt_timing);
        }

        //全部展示统计
        function show_statistics() {
            //页面曝光统计
            if (show_flag) { (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag_bg);
                show_flag = false;
            };
            complete_show = true;
        }
        $('#fix-nav').css({
            bottom: '60px'
        });
        //页面来自app的分享
        if (document.location.hash.indexOf('from=app') > -1) {
            var ptag = '';
            if (ptag) {
                $('.zxzs-set').each(function() {
                    $(this).attr('dataptag', ptag);
                    if ($(this).hasClass('zxzs-bj')) {
                        $(this).attr('href', '//m.to8to.com/yezhu/zxbj.php?from=144#point=' + ptag);
                    } else if ($(this).hasClass('zxzs-phoneday')) {
                        $(this).attr('href', '//m.to8to.com/apply/zb/phoneday?ptag=' + ptag);
                    } else if ($(this).hasClass('zxzs-redbag')) {
                        $(this).attr('href', '//m.to8to.com/apply/jc/redbag?ptag=' + ptag);
                    } else if ($(this).hasClass('zxzs-btn')) {
                        $(this).parents('#form_zx').find('input[name=ptag]').val(ptag);
                    }
                });
            }
        }
        $('.zxzs-set').on('click',
        function() {
            var ptag = $(this).attr('dataptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag); //埋点
            var zxzsjson = {
                channel: "",
                path: "",
                title: "",
                url: window.location.href,
                ptag: ptag
            };
            zxzsjson = JSON.stringify(zxzsjson);
            Cookies('zxzsTmpStr', zxzsjson, {
                expires: 20
            });
        });
        //深圳结果态点击重新计算返回表单     
        $(".new-result-account").click(function() {
            $('.dialog-ask-box').remove();
            $('#new-result').hide();
            $('.whan-ad-ask .fabiaoqu-ask').height(418);
            $('.whan-ad').stop().animate({
                bottom: '418px'
            },
            400,
            function() {
                $('#banner-wx-new-init').show();
            });
            $('.zxd-form').css('display', 'block');
        });
        //点击按钮显示微信小号复制蒙层
        $(".new-result-content-service").click(function() {
            var txt = $('#new-result-wx-num').text(); //获得当前地区对应的微信号
            $('#banner-wx-pop-box-num').text(txt); //当前地区对应的微信号  赋值到弹框中去
            $('#banner-wx-pop').show(); (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_1_1_1482');
        });
        $(".new-result-wx-btn").click(function() {
            var txt = $('#new-result-wx-num').text(); //获得当前地区对应的微信号
            $('#banner-wx-pop-box-num').text(txt); //当前地区对应的微信号  赋值到弹框中去
            $('#banner-wx-pop').show(); (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_1_1_1482');
        });
        //点击按钮关闭弹窗
        $(".banner-wx-pop-box-close").click(function() {
            $('#banner-wx-pop').hide();
        });

        //banner优化的微信小号点击加微信按钮
        $('body').on('touchstart', '#banner-wx-new-init',
        function() {
            var cobj = $("#slide_area").val().split(" ");
            var city = cobj[1] || '';
            var phone = '';
            if (city.length < 1) {
                city = cityHold_data; //用户没有选择城市则使用接口提供的城市信息
            };
            if (city === '深圳') {
                phone = '13302974452';
            } else {
                //东莞
                phone = '13302974661';
            }
            var pop = '<div class="banner-wx-new-pop" id="banner-wx-new-pop">' + '<div class="banner-wx-new-pop-box">' + '<p class="banner-wx-new-pop-box-tip">长按微信号复制 <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/a59a3-5947.gif" alt=""></p>' + '<p class="banner-wx-new-pop-box-num" id="banner-wx-new-pop-box-num">' + phone + '</p>' + '<span class="banner-wx-new-pop-box-close">X</span>' + '</div>' + '</div>';
            $('body').append(pop);
        });
        //点击按钮关闭弹窗
        $('body').on('touchend', '.banner-wx-new-pop-box-close',
        function() {
            $('#banner-wx-new-pop').remove();
        });

        function DateUnix1() {
            var year1 = new Date('2017/1/19 18:30:00');    year1_unix = year1.getTime();
            var year2 = new Date('2017/2/2 23:59:59');
            year2_unix = year2.getTime();
            var year = new Date();
            year_unix = year.getTime();
            if (year1_unix <= year_unix && year_unix <= year2_unix) {    $('.holiday-text').html('亲爱的业主，因春节工作人员放假(1.20-2.2)，我们将不能及时与您联系。如未接到电话，我们会在年后第一时间给您回电，请注意接听。祝您新春愉快、阖家幸福。');
                $('.whan-ad-ask').css({
                    'bottom': '355px'
                });
                $('.whan-ad-ask .fabiaoqu-ask').css({
                    'height': '355px'
                });
                $('.new-result-content').css({
                    'margin-top': '22px'
                });
                $('#new-result').css({
                    'height': '355px'
                });
            }
        }
        //传入城市展示不同banner
        function cityBottom(cityName) {
            if ((cityPrevious == cityName) && cityMemory.length > 0) { //与上一个城市相同不变化
                return false;
            } else {
                cityPrevious = cityName;
            }
            if (cityName.length > 0 && cityName === '深圳') {
                //展示banner标记
                wx_flag = true;
                $('.banner-wx-new-text-name').text('深圳装修顾问-馨馨');
                $('#banner-wx-new-text-ha').text('13302974452');
                $('.whan-ad-ask .fabiaoqu-ask').height(418);
                $('.whan-ad').stop().animate({
                    bottom: '418px'
                },
                400,
                function() {
                    $('#banner-wx-new-init').show();
                });
            } else if (cityName.length > 0 && cityName === '东莞') {
                //展示banner标记
                wx_flag = true;
                $('.banner-wx-new-text-name').text('东莞装修顾问-蓉蓉');
                $('#banner-wx-new-text-ha').text('13302974661');
                $('.whan-ad-ask .fabiaoqu-ask').height(418);
                $('.whan-ad').stop().animate({
                    bottom: '418px'
                },
                400,
                function() {
                    $('#banner-wx-new-init').show();
                });
            } else {
                //展示banner标记
                wx_flag = false;
                $('.whan-ad').stop(true);
                $('#banner-wx-new-init').hide();
                $('.whan-ad').css('bottom', '334px');
                $('.whan-ad-ask .fabiaoqu-ask').height(334);
            }
        }
        //先获取接口返回的城市信息
        function cityHold(city) {
            cityHold_data = city; //
        }
    })(slide_start_high);</script>
<?= $this->render('@gallerycms/views/layouts-m/plat8/_footer'); ?>
<?= $this->render('@gallerycms/views/layouts-m/plat8/_js-footer'); ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/iscroll5.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/zxask.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/h5appdownload_sourcecharge.min.js"></script>
