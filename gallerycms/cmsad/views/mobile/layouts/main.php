<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$formPosition = isset($this->params['formPosition']) ? $this->params['formPosition'] : '';
$formPositionName = isset($this->params['formPositionName']) ? $this->params['formPositionName'] : '';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="telephone=no">
<meta content="false" name="twcClient" id="twcClient" />
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<link rel="canonical" href="<?= isset($this->context->pcMappingUrl) ? '' : ''; ?>" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/favicon.ico" />
<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl') . '/cmsad/mobile/css/' . $cssFile . '.css'; ?>" />
<?php } } ?>
<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl') . '/cmsad/mobile/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
<script type="text/javascript">
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    //window.location.href = "<?= isset($this->context->pcMappingUrl) ? '' : ''; ?>";
}
window.BASE_URL = "<?= Yii::getAlias('@m.gallerycmsurl'); ?>";
</script>
<?= $this->render('@gallerycms/cmsad/views/_stat', []); // 顶部 ?>
<script>//微信tel失效问题,去除sukey
    if (navigator.userAgent.indexOf('MicroMessenger') != -1) {
        var shref = window.location.href;
        if (shref.indexOf('wxref=mp.weixin.qq.com') == -1) window.location.href += shref.indexOf('?') == -1 ? '?wxref=mp.weixin.qq.com': '&wxref=mp.weixin.qq.com';
    }
    //ios7 不用webapp
    (function() {
        if (/(iPhone|iPad)\sOS\s7_/.test(window.navigator.userAgent)) {
            var t = document.head.querySelector('meta[name="apple-mobile-web-app-capable"]');
            if (t) t.remove();
        }
    })()

    function getCookieObj() {
        var ary = document.cookie.split(/;\s?/),
        cookieObj = {};
        for (var i = 0,
        n = ary.length; i < n; i++) {
            var t = ary[i].split('=');
            if (t.length == 2) cookieObj[t[0]] = t[1];
        }
        return cookieObj;
    } (function() {
        var defaultImgMode = window.localStorage.getItem('browseMode');
        if (defaultImgMode && defaultImgMode != 'close') {
            var imgMode = getCookieObj().imgDispMode;
            if (imgMode == 'pq') {
                document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd480.css">');
            } else if (imgMode == 'gq') {
                document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd640.css">');
            } else if (!imgMode) {
                if (defaultImgMode == 'gq') {
                    var dpr = window.devicePixelRatio;
                    if (dpr > 1.5) {
                        document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd640.css">');
                    } else {
                        document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd480.css">');
                    }
                }
            }
        }
    })()

    var CompInit = function() {
        var initFuncs = {};
        var requireJsAry = [];
        return {
            addCompInit: function(key, opts) {
                if (opts.initFunc) {
                    initFuncs[key] = opts.initFunc;
                }
                if (opts.requireJs) {
                    requireJsAry.push(opts.requireJs);
                }
            },
            initAll: function(fn) {
                fn({
                    requireJsAry: requireJsAry,
                    initFuncs: initFuncs
                })
            }
        }
    } ()</script>
<script type="text/javascript">(function(doc, win) {
        var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange': 'resize',
        recalc = function() {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
        };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);</script>
</head>
<body>
<?= $this->render('../common/_header'); ?>
<?= $content; ?>
<input name="areacode" id="area_code" type="hidden" value="" />
<div class="scrTop">
    <span></span>
</div>
<div class="shareCon">
    <span></span>
</div>
<div class="baidushare">
    <div class="share-inner">
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
        </div>
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
    </div>
</div>
<?= $this->render('../common/_footer'); ?>
<?= $this->render('../common/_nav'); ?>
<?= $this->render('../common/_ask'); ?>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script>var swiper1 = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });</script>
<script type="text/javascript">$(function() {
        var position = ZQDL.position.getCity();
        var city = document.getElementsByName("city");
        var province = document.getElementsByName("province");
        var district = document.getElementsByName("district");
        var areacode = document.getElementById('area_code');
        var ii = city.length;
        for (var i = 0; i < ii; i++) {
            var res = get_inf(position.province, position.city, position.district, city[i], district[i]);
            if (res['city']) city[i].value = res['city'];
            if (res['province']) province[i].value = res['province'];
            if (res['district']) district[i].value = res['district'];
            if (res['areacode']) {
                areacode.value = res['areacode'];
            }
        }

    });</script>
</body>
