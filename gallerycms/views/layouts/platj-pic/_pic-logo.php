<?php
$topTitle = isset($this->params['topTitle']) ? $this->params['topTitle'] : '';
?>
<div class="logo wrapper clearfix">
    <div class="logo_left fl clearfix">
        <a title="<?= Yii::$app->params['siteName']; ?>" href="/">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6d314-1942.jpg" alt="" width="160" height="41" /></a>
        <div class="logo-title">
            <h1><?= $topTitle; ?></h1>
            <span></span></div>
    </div>
    <script>function goSub() {
            var keyword = $("#keyword_fenci").val();
            if (keyword == '请输入您想找的装修公司名称' || keyword.replace(/\s/g, "") == '') {
                window.location.href = "/";
            } else {
                window.location.href = "/search.html?keyword=" + encodeURIComponent(keyword);
            }
        }
        /*$(function() {
            $('#keyword_fenci').bind('keypress',
            function(event) {
                if (event.keyCode == "13") {
                    goSub();
                }
            });
        });*/</script>
    <div class="advertis clearfix fr">
        <div class="sheet clearfix">
            <input type="hidden" id="showType" name="showType" value="2" />
            <input type="hidden" id="search_type" name="searcy_type" value="merchant" />
            <input type="hidden" id="search_sort" name="searcy_sort" value="merchant" />
            <input type="text" autocomplete="off" searchautocomplete="false" onblur="if(this.value==''){this.value='请输入您想找的装修公司名称';}" onfocus="if(this.value=='请输入您想找的装修公司名称'){this.value='';}" value="请输入您想找的装修公司名称" name="keyword" id="keyword_fenci" class="inp_1" />
            <input onclick="searchOptj();" type="button" value="搜装修公司" class="inp_2" style="text-decoration:none;" /></div>
        <div class="hot_sear">
            <ul class="hot_sear_list clearfix">
            <li>
                <a href="/" title="局部装修">局部装修</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="/" title="田园">田园</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="/" title="普通住宅">普通住宅</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="/" title="新古典">新古典</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="/" title="混搭">混搭</a></li>
            </ul>
        </div>
    </div>
</div>
