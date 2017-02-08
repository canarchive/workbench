<?php
use yii\helpers\Url;

$cssFiles = ['768a5-2994', '2a61f-3180', '89183-8983'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('../ask/_js-header');
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>
<div class="global_wrap clear" id="gloWrap">
    <div class="header">
    <?= $this->render('@gallerycms/views/plat8/pc/header-top'); ?>
    <?= $this->render('@gallerycms/views/plat8/pc/header-mid', ['noForm' => true]); ?>
    <?= $this->render('@gallerycms/views/plat8/pc/header-nav', ['showRightNav' => true]); ?>
    </div>
    <?= $content; ?>
    <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/ask.js"></script>
    <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/plat8rsas.js"></script>
    <script type="text/javascript">askIndex.init();
        function asktijiao() {
            jq("#asksearchform").submit();
        }
        var popid = 0;
        function islogin(id) {
            var username = getCookie('username', true);
            if (!username) {
                popid = id;
                showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
                return false;
            }
        }
        function pop_parent_submit() {
            window.location.href = popid;
        }
        jq(function() {
            jq.ajax({
                'type': 'post',
                'url': 'ask_post.php',
                'dataType': 'json',
                'data': {
                    action: 'login'
                },
                'success': function(data) {
                    if (data.status == 'nologin') {
                        jq('.user_log').hide();
                        jq('.user_unlog').show();
                        jq('.user_unlog .answer_sum').html(data.solvenum);
                        jq('.ask_user_btn').html('<a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                    } else if (data.status == 'login') {
                        jq('.user_log').show();
                        jq('.user_unlog').hide();
                        jq('.user_log .user_img img').attr('src', data.photo);
                        jq('.user_log .user_name .ect').html(data.username);
                        jq('.user_log .user_name .user_jiffen').html('积分：' + data.credits);
                        jq('#wenguo').html(data.asknum);
                        jq('#daguo').html(data.answernum);
                        jq('#caina').html(data.acceptnum);
                        jq('.ask_user_btn').html('<a href="k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                    }
                }
            })
        }); jq('.seca_bdl').on('click',
        function() {
            clickStream.getCvParams('1_3_4_6');
        });
        jq('.clickstream_tag').click(function() {
            var _tag = jq(this).attr('data-ptag');
            if (_tag) {
                try {
                    clickStream.getCvParams(_tag);
                } catch(e) {

}
            }
        });
        jq('.ask_side_opa>a').each(function(index, ele) {
            switch (index) {
            case 0:
                jq(this).on('click',
                function() {
                    clickStream.getCvParams('1_3_4_7');
                });
                break;
            case 1:
                jq(this).on('click',
                function() {
                    clickStream.getCvParams('1_3_4_4');
                });
                break;
            }
        });
        jq(function() {
            var tcode = getCookie('tcode', true);
            if (tcode) {
                var autourl = jq('#autourl').attr('href');
                if (autourl.indexOf('.to8to.com/company') != -1) {
                    autourl = autourl.replace(/http:\/\/www.to8to.com/ig, 'http://' + tcode + '.to8to.com');
                    jq('#autourl').attr('href', autourl);
                }
            }
        }); try {
            weChatQrcode.init();
        } catch(e) {

}</script>
    <script type="text/javascript">var slide_height = jq('.ask_secc .sec_hd').offset().top;
        jq('.zgs_bg_fixed').css('display', 'none');
        var slide_show_ptag = '1_3_9_1024';</script>
    <script>if (!window.tender) {
            jq.getScript('http://static.to8to.com/gb_js/tender.js?v=1464789987');
        }</script>
    <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/plat8/css/1b975-9868.css" />
    <div class="bottom_slide_box" style="left:0;">
        <!-- 以下是隐藏点击层 -->
        <div class="bottom_slide_content">
            <!-- 关闭按钮不显示 (功能正常)-->
            <!-- <div class="bottom_slide_close"></div> --></div>
        <script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/globalprovinces.js" type="text/javascript"></script>
        <script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/zxbj_bottom_slide.js" type="text/javascript"></script>
    </div>
    <div id="small_window"></div>
    <?= $this->render('@gallerycms/views/plat8/pc/footer', ['showFooterTop' => true]); ?>
</div>
<script type="text/javascript">jQuery(function() {
        href_url = window.location.href;
        if (! (href_url.indexOf('sz.to8to.com') !== -1 || href_url.indexOf('www.to8to.com') !== -1)) {
            jq('.fbc_ico1').hide();
        }
        try {
            var footObj = document.getElementById('footerHeight'),
            wrapObj = document.getElementById('gloWrap'),
            htmlObj = document.documentElement,
            bodyObj = document.body,
            windowHeight = htmlObj.clientHeight || bodyObj.clientHeight,
            docScrollHeihgt = htmlObj.scrollHeight || bodyObj.scrollHeight,
            wrapHeight = wrapObj.offsetHeight,
            cb = (function() {
                var u = window.navigator.userAgent.toLocaleLowerCase(),
                msie = /(msie) ([\d.]+)/,
                chrome = /(chrome)\/([\d.]+)/,
                firefox = /(firefox)\/([\d.]+)/,
                safari = /(safari)\/([\d.]+)/,
                opera = /(opera)\/([\d.]+)/,
                ie11 = /(trident)\/([\d.]+)/,
                b = u.match(msie) || u.match(chrome) || u.match(firefox) || u.match(safari) || u.match(opera) || u.match(ie11);
                return {
                    name: b[1],
                    version: parseInt(b[2])
                };
            })();
            if (docScrollHeihgt < windowHeight) { //文档高度小于窗口高度
                var outWrapHeight = docScrollHeihgt - wrapHeight;
                if (cb.version < 8 && cb.name == 'msie') {
                    footObj.style.position = 'absolute';
                    htmlObj.style.overflowY = 'hidden';
                } else {
                    footObj.style.position = 'fixed';
                }

                wrapObj.style.height = (windowHeight - outWrapHeight) + "px";
                footObj.style.bottom = 0;
            }
        } catch(e) {

}
    });

    var _mvq = window._mvq || [];
    window._mvq = _mvq;
    _mvq.push(['$setAccount', 'm-100623-0']);
    _mvq.push(['$logConversion']); (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript';
        mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js': 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
    })();</script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/globalprovinces.js"></script>
<script type="text/javascript">var gpm = new GlobalProvincesModule;
    try {
        headerFooter.init();
    } catch(e) {}</script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/referrerpathrecord.js" type="text/javascript"></script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/seostatis.js"></script>
<script type="text/javascript">var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?dbdd94468cf0ef471455c47f380f58d2";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</div>
<link type="text/css" rel="stylesheet" href="http://60.205.145.0/filesys/spider/pages/asset/plat8/css/ec6ff-6001.css">
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/submodal.js" type="text/javascript"></script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/2a19dc2ac1471a7470fe7187a5537960.js"></script>
<script>jq('.zxzs-set').click(function(e) {
        e.preventDefault();
        var ptag = jq(this).attr('dataptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag); //埋点
        window.location.href = jq(this).attr('href');
    });</script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/entrance.js" id="zhichiScript" class="zhiCustomBtn" data-args="manual=true"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/weixin_pop.js"></script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/consult_online.js" type="text/javascript"></script>
<?php $this->endContent(); ?>
