<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['aa3c7-7171'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
$this->params['jsStr'] = $this->render('_js-header');
?>

<?php echo $this->render('@gallerycms/views/layouts-m/plat8/_header'); ?>
<!--body onselectstart="return false" -->
<style type="text/css">.rslides { position: relative; list-style: none; overflow: hidden; width: 100%; padding: 0; margin: 0; } .rslides li { -webkit-backface-visibility: hidden; position: absolute; display: none; width: 100%; left: 0; top: 0; } .rslides li:first-child { position: relative; display: block; float: left; } .rslides img { display: block; height: auto; float: left; width: 100%; border: 0; }</style>
<div class="ad-top">
    <ul class="rslides">
        <li>
            <a href="/index/sem/from/201">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/be20c-5915.png" width="320px" /></a>
        </li>
        <li>
            <a href="javascript:;" onclick="m_to8to.download('zxgj')">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/eab11-8537.jpg" width="320px" /></a>
        </li>
    </ul>
</div>
<script>$(function() {
        $(".rslides").responsiveSlides({
            timeout: 3000
        });
    });</script>
<div class="header">
    <a href="/nj">
        <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/0558b-4654.png" class="logo-img" width="56"></a>
    <span class="logo-node"></span>
    <span class="logo-name">互联网装修领导者</span>
    <a href="/city/index">
        <span class="city">南京</span></a>
</div>
<div class="search">
    <input type="text" name="searchwords" value="搜索装修疑难，如：装修费用" onfocus="searchFocus()" onblur="searchBlur()" class="search-box" onkeydown="toSearch(this)">
    <div class="magnifier" onclick="search()"></div>
    <input type="hidden" id="search_url" value="/ask/search.php/keyword/keyword_val" /></div>
<script type="text/javascript">/**
 * 搜索
 */
    function search() {
        var dom_arr = document.getElementsByName('searchwords');
        // 去空格
        var val = dom_arr[0].value.replace(/^\s+|\s+$/g, '');
        if (val == '搜索装修疑难，如：装修费用' || val == '') {
            alert('请输入关键字');
            //document.getElementById('search_form').submit();
        } else {
            var url = document.getElementById('search_url').value.replace('keyword_val', val);
            location.href = url;
        }
    }

    /**
 * 搜索获得焦点
 */
    function searchFocus() {
        var dom_arr = document.getElementsByName('searchwords');
        // 去空格
        var val = dom_arr[0].value.replace(/^\s+|\s+$/g, '');
        if (val == '搜索装修疑难，如：装修费用') {
            dom_arr[0].value = '';
        } else {
            dom_arr[0].value = val;
        }
    }

    /**
 * 搜索失去焦点
 */
    function searchBlur() {
        var dom_arr = document.getElementsByName('searchwords');
        // 去空格
        var val = dom_arr[0].value.replace(/^\s+|\s+$/g, '');
        if (val == '' || val == '搜索装修疑难，如：装修费用') {
            dom_arr[0].value = '搜索装修疑难，如：装修费用';
            dom_arr[0].style.color = '#ccc';
        } else {
            dom_arr[0].style.color = '#333';
        }
    }

    // 初始化输入框状态
    searchBlur();
    /**
 * 回车搜索
 */
    function toSearch(obj) {
        obj.style.color = '#333';
        var evt = window.event;
        if (evt.keyCode == 13) {
            stopDefault(evt);
            search();
        }
    }

    /**
 * 阻止默认事件
 */
    function stopDefault(e) {
        if (e && e.preventDefault) { // 阻止默认浏览器动作(W3C)
            e.preventDefault();
        } else { // IE中阻止函数器默认动作的方式 
            window.event.returnValue = false;
        }
        return false;
    }</script>
<form action="/feedback/post/city/nj" method="post">
    <h3>选择意见</h3>
    <div class="feedback_select">
        <select name="select_val">
            <option value="">无</option>
            <option value="页面不兼容">页面不兼容</option>
            <option value="页面无法打开/访问过慢">页面无法打开/访问过慢</option>
            <option value="无法申请免费设计/报价">无法申请免费设计/报价</option></select>
    </div>
    <h3>您的意见</h3>
    <div class="feedback_content">
        <textarea name="content"></textarea>
    </div>
    <h3>您的联系方式
        <span>(土巴兔将对您的联系方式严格保密)</span></h3>
    <div class="contact">
        <input type="text" name="phone" /></div>
    <div class="submit_div">
        <input type="submit" value="提交" /></div>
</form>
<div class="footer-company-desc">
    <div class="f-c-d-title">(土巴兔)互联网装修领导者</div>
    <div class="f-c-d-desc">
        <span class="f-green">7</span>年累计服务
        <span class="f-green">1100</span>万家庭,汇聚
        <span class="f-green">7</span>万多家装修公司,
        <span class="f-green">95</span>万设计师;我们始终坚持把业主的利益放到
        <span class="f-green">第一位</span>,不断创新,领导装修行业更阳光、更透明。</div></div>
<div class="feedback" onclick="feedback()">意见反馈</div>
<ul class="page_nav">
    <li>
        <a href="javascript:void(0)" class="nav_on">触屏版</a></li>
    <li>
        <a href="http://www.to8to.com/">电脑版</a></li>
    <li>
        <a href="http://m.to8to.com/news/article/106823.html">关于我们</a></li>
</ul>
<div class="footer">手机土巴兔：m.to8to.com 粤ICP备08125558号</div>
<div class="footer-space"></div>
<div class="footer-fix">
    <div class="footer-zxzx">
        <a class="click-point" data-point="2_3_1_2" href="/sz/zb/index2.html?from=203#point=2_3_1_2">申请免费服务</a></div>
    <div class="footer-nav">
        <span>导航</span>
        <a href="javascript:;" onclick="showNav()" class="footer-nav-logo">
            <span class="nav-line"></span>
            <span class="nav-line"></span>
        </a>
    </div>
</div>
<div class="nav_arrow_box">
    <div class="nav_box">
        <a class="nav_box_line" href="/nj">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/c4f77-6180.png" height="18px" /></div>
            <div class="nav_box_line_txt">首页</div></a>
        <a class="nav_box_line" href="/xiaoguotu/">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/8003a-3852.png" height="18px" /></div>
            <div class="nav_box_line_txt">效果图</div></a>
        <a class="nav_box_line" href="/nj/company/">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/64fe8-7935.png" height="18px" /></div>
            <div class="nav_box_line_txt">找公司</div></a>
        <a class="nav_box_line" href="/nj/zb/index2.html">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/dbc4a-8372.png" height="18px" /></div>
            <div class="nav_box_line_txt">申请免费设计</div></a>
        <a class="nav_box_line" href="/company/zxb.php#point=2_3_1_2">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/2abd7-3103.png" height="18px" /></div>
            <div class="nav_box_line_txt">装修保障</div></a>
        <a class="nav_box_line" href="/yezhu/zxlc.html">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/f5144-4374.png" height="18px" /></div>
            <div class="nav_box_line_txt">学装修</div></a>
        <a class="nav_box_line" href="tel:4006900288">
            <div class="nav_box_line_icon">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/6037d-3329.png" height="18px" /></div>
            <div class="nav_box_line_txt">400电话咨询</div></a>
    </div>
</div>
<div class="nav_box_cover" onclick="showNav()"></div>
<script type="text/javascript">var page_w = 0;
    function initNav() {
        var body_w = document.body.offsetWidth;
        if (body_w != page_w) {
            var f_n_l_dom = document.querySelector('.footer-nav-logo');
            var _w = f_n_l_dom.offsetWidth || 25;
            var offset_l = f_n_l_dom.offsetLeft || Math.floor(body_w * 0.97) - _w - 10;
            var _l = body_w - (body_w - offset_l - _w / 2) - 123.5;
            document.querySelector('.nav_arrow_box').style.cssText += 'left:' + _l + 'px';
            page_w = body_w;
        }
    }
    initNav();
    var is_show_nav = 0,
    show_nav_timer = null;
    function showNav() {
        if (show_nav_timer) {
            return false;
        }
        var dom = document.querySelector('.nav_arrow_box');
        var _dom = document.querySelector('.nav_box_cover');
        if (is_show_nav == 0) {
            dom.style.cssText += 'display:block;';
            show_nav_timer = setTimeout(function() {
                dom.style.cssText += 'display:block;bottom:58px';
                clearTimeout(show_nav_timer);
                show_nav_timer = null;
            },
            50);
            _dom.style.cssText = 'display:block;';
            is_show_nav = 1;
        } else {
            dom.style.cssText += 'display:block;bottom:-260px';
            show_nav_timer = setTimeout(function() {
                dom.style.cssText += 'display:none;';
                clearTimeout(show_nav_timer);
                show_nav_timer = null;
            },
            900);
            _dom.style.cssText = 'display:block;';
            _dom.style.cssText = 'display:none;';
            is_show_nav = 0;
        }
    }
    // 屏幕大小改变
    window.onresize = function() {
        initNav();
    }</script>
<script type="text/javascript">function feedback() {
        var url = '/about/feedback.php';
        window.location.href = url;
    }</script>
<?= $this->render('_footer-js'); ?>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/js/common.min.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/m/js/h5appdownload_sourcecharge.min.js"></script>