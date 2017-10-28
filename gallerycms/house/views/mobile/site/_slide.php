<!--图片轮播 start-->
<div class="mui-slider" style='padding-bottom: 51.5%;'>
    <div class="mui-slider-group mui-slider-loop">
        <!--支持循环，需要重复图片节点-->
        <div class="mui-slider-item mui-slider-item-duplicate">
            <a href="http://m.hdb.tu8zhang.com/bm-tquote-beijing.html?cid=2" id="link_url">
                <img id="img_url" src="" /></div>
        <div class="mui-slider-item">
            <a href="http://m.hdb.tu8zhang.com/bm-tquote-beijing.html?cid=2">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/792b1-2553.jpg" /></a>
        </div>
        <div class="mui-slider-item">
            <a href="http://m.hdb.tu8zhang.com/bm-designlf-beijing.html?cid=2">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/eae66-2830.jpg" /></a>
        </div>
        <div class="mui-slider-item">
            <a href="http://m.hdb.tu8zhang.com/bm-tbz-beijing.html?cid=2">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/e192f-6849.jpg" /></a>
        </div>
        <script>
            var link_url = "/";
            var img_url = "<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/e192f-6849.jpg";
            $('#img_url').attr('src', img_url);
            $('#link_url').attr('href', link_url);
        </script>
        <div class="mui-slider-item mui-slider-item-duplicate">
            <a href="http://m.jmw.com.cn/xm6624270/">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/792b1-2553.jpg" /></a>
        </div>
        <!--支持循环，需要重复图片节点--></div>
    <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
    </div>
    <!--轮播上面的搜索框-->
    <header class="b_header">
        <div class="wrap_top">
            <a class="icon1"></a>
            <div class="input-sea">
                <input class="m_search" type="text" name="keyword" value="搜装修公司" style="color:#333;" id="keywordInput" onfocus="if($('#keywordInput').val() == '搜装修公司'){$('#keywordInput').val('');}" onblur="if($('#keywordInput').val() == ''){$('#keywordInput').val('搜装修公司');}">
                <a class="icon2"></a>
                <input type="hidden" id="search_sort" value="merchant" />
                <a class="top-search" onclick="searchOptjm()">搜索</a>
            </div>
        </div>
    </header>
</div>
<style>.search-kuang{ width: 59%;display: inline-block;position: relative; } @media (min-width:340px) and (max-width:380px){ .search-kuang{ width: 54%; } } @media screen and (max-width:339px){ .search-kuang{ width: 50%; } }</style>
<script>
//获得slider插件对象
var gallery = mui('.mui-slider');
gallery.slider({
    interval: 5000 //自动轮播周期，若为0则不自动播放，默认为0；
});
</script>
<script>
function goSub() {
    var keyword = $("#keywordInput").val();
    if (keyword == '请输入关键字' || keyword.replace(/\s/g, "") == '') {
        alert('请输入关键字');
        //window.location.href = "search.html";
    } else {
        window.location.href = "/search.html?keyword=" + encodeURIComponent(keyword);
    }
}
$(function() {
    $('#keywordInput').bind('keypress',
    function(event) {
        if (event.keyCode == "13") {
            goSub();
        }
    });
});
</script>
