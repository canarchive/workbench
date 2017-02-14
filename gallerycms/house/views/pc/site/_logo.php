<!-- logo -->
<div class="zong_logo wrap_mar clear">
    <a href="/" title="<?= Yii::$app->params['siteNameBase']; ?>">
        <div class="logo_left zong_icon fl"></div>
    </a>
    <!--<div class='logo_leftMm'>
        <a href="" title="建材加盟" target="_self">
            <h1 class='logo_leftMmTop'></h1></a>
        <a href="" title="[]" target="_self">
            <h1 class='logo_leftMmBottom'>[]</h1></a>
    </div>-->
    <div class="logo_center fl">
        <div class="logo_find clear">
            <div class="logo_select f14 pr fl">行业
                <i class="zong_icon i7"></i>
                <ul class="pa xiala_box dis_n" style="height:235px;">
                    <li>
                        <a href="http://search.jmw.com.cn/i2/" title="美食加盟" target="_blank">美食</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i11/" title="教育加盟" target="_blank">教育</a></li>
                </ul>
            </div>
            <input type="text" i="" name="keyword" value="" class="fl text fontW" id="keyword_fenci" onfocus="if(this.value==$(this).attr('i')){this.value='';}" onblur="if(this.value==''){this.value=$(this).attr('i');}" />
            <input type="button" value="搜索" class="button f16 fontW fr" onclick="goSub();" /></div>
        <script>function goSub() {
                var keyword = $("#keyword_fenci").val();
                if (keyword == '请输入关键词' || keyword.replace(/\s/g, "") == '') {
                    //window.location.href="http://search.jmw.com.cn/"; 
                    window.open("http://search.jmw.com.cn/");
                } else {
                    //window.location.href="http://search.jmw.com.cn/newSearch/newList.php?keyword="+encodeURIComponent(keyword); 
                    window.open("http://search.jmw.com.cn/newSearch/newList.php?keyword=" + encodeURIComponent(keyword) + "");
                }
            }
            $(function() {
                $('#keyword_fenci').bind('keypress',
                function(event) {
                    if (event.keyCode == "13") {
                        goSub();
                    }
                });
            });</script>
        <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/429bc-5654.css">
        <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery-ui.js"></script>
        <!--<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/6d681-4893.css">-->
        <script>$(function() {
                var seaerch_brand = ["晨阳水漆"];
                var se_index = Math.floor((Math.random() * seaerch_brand.length));
                $('#keyword_fenci').val(seaerch_brand[se_index]);
                $('#keyword_fenci').attr('i', seaerch_brand[se_index]);
                $.ajax();
                var availableTags = ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"];
                $("#keyword_fenci").autocomplete({
                    source: "http://search.jmw.com.cn/Search.php",
                    minLength: 1,
                    select: function(event, ui) {
                        // event 是当前事件对象
                        //window.location.href = ui.item.active;
                        window.open(ui.item.active);
                        // ui对象仅有一个item属性，它表示当前被选中的菜单项对应的数据源对象
                        // 该对象具有label和value属性，以及其它自定义(如果有的话)的属性
                    }
                });
            });</script>
        <ul class="f12">
            <li>
                <a href="http://www.jmw.com.cn/xm60837/" title="法恩莎瓷砖加盟" target="_blank">法恩莎瓷砖</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="http://www.jmw.com.cn/xm158545/" title="舒鑫e家加盟" target="_blank">舒鑫e家</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="http://www.jmw.com.cn/xm101706/" title="健康苹果漆加盟" target="_blank">健康苹果漆</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="http://www.jmw.com.cn/xm6594594/" title="忆江南锦缎泥加盟" target="_blank">忆江南锦缎泥</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="http://www.jmw.com.cn/xm58277/" title="德尔地板加盟" target="_blank">德尔地板</a></li>
        </ul>
    </div>
    <ul class="fr f12 logo_paihang">
        <li>
            <a href="http://top.jmw.com.cn/" target="_blank" title="排行榜">
                <i class="zong_icon i8"></i>
            </a>
            <a href="http://top.jmw.com.cn/" target="_blank" title="排行榜">排行榜</a></li>
        <li>
            <a href="http://search.jmw.com.cn/i24/" target="_blank" title="项目搜索">
                <i class="zong_icon i9"></i>
            </a>
            <a href="http://search.jmw.com.cn/i24/" target="_blank" title="项目搜索">项目搜索</a></li>
        <li>
            <a href="http://search.jmw.com.cn/ppjm/index.html" target="_blank" title="品牌大全">
                <i class="zong_icon i10"></i>
            </a>
            <a href="http://search.jmw.com.cn/ppjm/index.html" target="_blank" title="品牌大全">品牌大全</a></li>
        <li>
            <a href="http://bbs.jmw.com.cn/portal.php" target="_blank" title="创业论坛">
                <i class="zong_icon i11"></i>
            </a>
            <a href="http://bbs.jmw.com.cn/portal.php" target="_blank" title="创业论坛">创业论坛</a></li>
    </ul>
</div>
