<!-- 行业列表页头部 start -->
<header class="zp_header clearfix">
    <a href="javascript:;" onclick="goBack()" class="fl a1"></a>
    <div class="ipt fl">
        <input type="text" onfocus="if(this.value=='输入品牌名/项目名'){this.value=''}" onblur="if(this.value==''){this.value='输入品牌名/项目名'}" value="输入品牌名/项目名" name="keyword" id="keyword_fenci_m" class="input" />
        <i>
        </i>
    </div>
    <a onclick="goSub()" class="fr a2" value="搜索" style="background:#E14546;" />搜索</a></a>
</header>
<script>function goSub() {
        var keyword = $("#keyword_fenci_m").val();
        if (keyword == '输入品牌名/项目名' || keyword.replace(/\s/g, "") == '') {
            window.location.href = "http://m.jmw.com.cn/so/show_search.php";
        } else {
            window.location.href = "http://m.jmw.com.cn/so/show_search.php?keyword=" + encodeURIComponent(keyword);
        }
    }
    $(function() {
        $('#keyword_fenci_m').bind('keypress',
        function(event) {
            if (event.keyCode == "13") {
                goSub();
            }
        });
    });</script>
<script>$(function() {
        $(".thin_2").mouseover(function() {
            $(this).attr("style", "text-decoration:underline;");
        });
        $(".thin_2").mouseout(function() {
            $(this).attr("style", "text-decoration:none;");
        });

    });
    function aonfo() {
        val = $('#keyword_fenci_m').val();
        if (val == '输入品牌名/项目名') {
            $('#keyword_fenci_m').val('');
        }
    }

    function bonblu() {
        val = $('#keyword_fenci_m').val();
        if (val == '') {
            $('#keyword_fenci_m').val('输入品牌名/项目名');
        }
    }</script>
