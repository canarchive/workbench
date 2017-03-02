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
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/c4f77-6180.png" height="18px" /></div>
            <div class="nav_box_line_txt">首页</div></a>
        <a class="nav_box_line" href="/xiaoguotu/">
            <div class="nav_box_line_icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/8003a-3852.png" height="18px" /></div>
            <div class="nav_box_line_txt">效果图</div></a>
        <a class="nav_box_line" href="/nj/company/">
            <div class="nav_box_line_icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/64fe8-7935.png" height="18px" /></div>
            <div class="nav_box_line_txt">找公司</div></a>
        <a class="nav_box_line" href="/nj/zb/index2.html">
            <div class="nav_box_line_icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/dbc4a-8372.png" height="18px" /></div>
            <div class="nav_box_line_txt">申请免费设计</div></a>
        <a class="nav_box_line" href="/company/zxb.php#point=2_3_1_2">
            <div class="nav_box_line_icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/2abd7-3103.png" height="18px" /></div>
            <div class="nav_box_line_txt">装修保障</div></a>
        <a class="nav_box_line" href="/yezhu/zxlc.html">
            <div class="nav_box_line_icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/f5144-4374.png" height="18px" /></div>
            <div class="nav_box_line_txt">学装修</div></a>
        <a class="nav_box_line" href="tel:4006900288">
            <div class="nav_box_line_icon">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/6037d-3329.png" height="18px" /></div>
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
