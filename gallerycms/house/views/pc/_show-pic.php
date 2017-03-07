<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
//use yii\widgets\LinkPager;
use gallerycms\components\LinkPager;

$cssFiles = ['768a5-2994', '237ac-1806', '87211-9237'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('_js-pic');
$this->params['bodyClass'] = 'id="i_body"';
$footerNavs = $this->context->footerNavs;
$navDatas = $this->context->navDatas;
$curNav = 'merchant';
?>
<style>.slide-help-box { display: none!important; }</style>

<script type="text/javascript">
var webScreen = window.screen.width;
if (webScreen < 1250) {
    jq('body').addClass('narrow_980');
} else {
    jq('body').addClass('narrow_1220');
};
</script>
<div class="zgs_header">
    <div class="zgsh_top">
        <div class="zgsh_top_center">
            <div class="zgsh_top_center_right">
                <ul>
                    <li>
                        <div class="fl" rel="nofollow" id="user_msgnum"></div>
                        <!--<label id="nav_user_data">
                            <a href="/" class="htr_login" rel="nofollow">登录</a>
                            <a href="/" class="htr_reg" rel="nofollow">注册</a></label>-->
                        <span class="htr_line"></span>
                        <a href="<?= $navDatas['office']['url']; ?>" target="_blank" rel="nofollow"><?= $navDatas['office']['name']; ?></a>
                        <em>咨询热线：<?= $footerNavs['hotline']; ?></em>
                    </li>
                </ul>
            </div>
            <div class="zgsh_top_center_left">
                <ul>
                    <li><a class="logo" href="/" title="首页"></a></li>
                    <?php foreach (['merchant', 'sample', 'ask', 'quote'] as $nav) { ?>
                    <li <?php if ($curNav == $nav) { echo 'class="on"'; } ?>><a href="<?= $navDatas[$nav]['url']; ?>" class="nav_fzlink"><?= $navDatas[$nav]['name']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="http://www.to8to.com/get_city_name.php" type="text/javascript"></script>
<script type="text/javascript">//设置uid 身份
    var to8tomsgNum = 0;
    var username = getCookie('username', 1);
    //用户id
    var uid = getCookie('uid', 1);
    jq("#weixin").hover(function() {
        jq("#erweima").toggle();
    });

    var city_id = getCookie('townid', 1);
    var current_city = city_arr[city_id];
    current_city = current_city ? current_city: '深圳';
    var current_tcode = getCookie('tcode', 1);
    current_tcode = current_tcode ? current_tcode: 'sz';

    jq(".nav_fzlink").each(function() {
        var href = jq(this).attr('href');
        if (href.indexOf("sz") > 0) {
            var new_href = href.replace(/sz/g, current_tcode);
        } else if (href.indexOf("www") > 0) {
            var new_href = href.replace(/www/g, current_tcode);
        }
        jq(this).attr("href", new_href);
    });</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/xgtparseurl.js"></script>
<script type="text/javascript">
var picList = 0;
var piccType = 3;
</script>
<div class="top_bar ">
    <input type="hidden" class="weixin-pop-quit" />
    <div class="crumbs">
        <a href="/" title="首页">首页</a>>
        <?php if (isset($navDatas[$curNav])) { ?>
        <span id="tuche">
            <a href="<?= $navDatas[$curNav]['url']; ?>"><?= $navDatas[$curNav]['name']; ?></a>
        </span>&nbsp;>
        <?php } ?>
        <strong ><?= $info['name']; ?></strong>
        <strong id="fine_n"><?= $info['name']; ?></strong>
        <?php //echo $this->render('@gallerycms/house/views/pc/_pi-share'); ?>
    </div>
</div>
<!-- 效果图内页Satrt -->
<div style="display:none">
    <img src="" width="" height="" id="show_img" alt="" />
    <div id='imgids'></div>
</div>
<!-- 效果图内页Satrt -->
<div class="picture">
    <div class="container">
        <div class="right_content">
            <div class="right_part">
                <?php //echo $this->render('_pic-right-quote'); ?>
                <?php //echo $this->render('_pic-right-info'); ?>
                <div class="you_like clear">
                    <strong class="right_title">相关图片</strong>
                    <div class="like_list">
                        <?php foreach ($infos as $rInfo) { ?>
                        <a href="<?= "/sample_show_{$rInfo['id']}.html"; ?>">
                        <img src="<?= $rInfo['thumb']; ?>" alt="<?= $rInfo['name']; ?>" width="68" height="68" /></a>
                        <?php } ?>
                    </div>
                </div>
                <!--<div class="every_look">
                    <strong class="right_title">推荐装修问答</strong>
                    <ul class="look_list">
                        <li>
                            <div class="intro">
                                <em class="cur_num  bgyellow ">1</em>
                                <a class="this_title " href="" title=""></a></div>
                        </li>
                    </ul>
                </div>-->
                <?php //echo $this->render('_pic-right-tag'); ?>
            </div>
        </div>
        <div class="img_content">
            <div class="img_box">
                <input type="hidden" value=i d="t_id" />
                <div class="img_div">
                    <div class="img_div_tag"></div>
                    <div class="prev cur-l"></div>
                    <div class="next cur-r"></div>
                </div>
            </div>
            <div class="img_list">
                <div class="marquee">
                    <div class="marquee_con">
                        <div class="list"></div>
                        <b id="left_Arrow" class="album_prev album_btn_style not">
                            <span></span>
                        </b>
                        <b id="right_Arrow" class="album_next album_btn_style">
                            <span></span>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" id="bdshell_js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/imgready.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/decorate_gallery_banner.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/xiaoguotu_new.js"></script>
<script>
try {
    goTopInit();
} catch(e) {}

var ref_url = document.referrer;
pageId = window.location.pathname.match(/\d+/g)[0];
var parseurl = (ref_url != undefined && ref_url != '') ? oparseUrl.parseurl(ref_url) : '';
//var dataImg = [  ];  //此处有9组数据。就以九组为一个单元。
if (parseurl == undefined || ref_url == '') {
    parseurl = 'a1=0';
    if (ref_url.indexOf('meitu') == -1) {
        parseurl += '&a17=1';
    }
}
//add by allen.pan 标识图片来自详情页p
var picFrom = "detailp";
var prearr = [],
nextarr = [],
where,
picType = 1;
var data = <?= $picDatas; ?>;

//getRecommendPic(parseurl, pageId, 1);

var dataImg = data.dataImg;
var mode = "thumb",
index = 0,
bigImg = dataImg[0];
for (var i in dataImg) {
    if (dataImg[i].l.aid == pageId) {
        index = i;
        bigImg = dataImg[i];
    }
};
Pic.setSomes().createBigImg(bigImg).createThumbList(dataImg, index).rightScroll().picAdapt().thumbClick().thumbMouseScroll(jq(".marquee_con")[0]).bigImgScroll(jq(".img_box")[0]).thumbBtnFn().apply().windowChange().picClick();
var data2 = <?= $picDatas; ?>;//getRecommendPic('', '', 1);
nextarr = data2.dataImg;

function flashNext(n) {
    data2 = getRecommendPic('', n, 1);
    nextarr = data2.dataImg;
}
var gpm = new GlobalProvincesModule; //城市类
gpm.def_province = ["省/市", ""];
gpm.def_city1 = ["市/地区", ""];
gpm.initProvince($('PUser_Shen'));
gpm.initCity1($('PUser_City'), gpm.getSelValue($('PUser_Shen')));

jq('.img_div_tag').mousemove(function(e) {
    var imgDiv = jq(this),
    offsetX = e.pageX - 41 - imgDiv[0].offsetLeft;
    if (offsetX > imgDiv[0].offsetWidth / 2) {
        imgDiv.removeClass('cur-l');
        imgDiv.addClass('cur-r');
    } else {
        imgDiv.removeClass('cur-r');
        imgDiv.addClass('cur-l')
    }
});

window._bd_share_config = {
    common: {
        bdUrl: window.location.href,
        onBeforeClick: function() {
            this.bdPic = jq('#bigImg').attr('src');
            this.bdText = '这张图不错哦，分享给大家！  ' + jq('#bigImg').attr('alt');
            this.bdUrl = document.location.href;
        }
    },
    share: [{
        "tag": "share_1",
        "bdSize": 32
    }]
}
with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];
</script>
<div id="small_window"></div>
<div class="footer" id="footerHeight"></div>
</div>
<script type="text/javascript">
jQuery(function() {
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
    } catch(e) { }
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
})();
</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/globalprovinces.js"></script>
<script type="text/javascript">
var gpm = new GlobalProvincesModule;
try {
    headerFooter.init();
} catch(e) {}
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/referrerpathrecord.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/seostatis.js"></script>
</div>
<link type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/ec6ff-6001.css">
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/submodal.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/2a19dc2ac1471a7470fe7187a5537960.js"></script>
<script>
jq('.zxzs-set').click(function(e) {
    e.preventDefault();
    var ptag = jq(this).attr('dataptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag); //埋点
    window.location.href = jq(this).attr('href');
});
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/entrance.js" id="zhichiScript" class="zhiCustomBtn" data-args="manual=true"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/weixin_pop.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/consult_online.js" type="text/javascript"></script>
