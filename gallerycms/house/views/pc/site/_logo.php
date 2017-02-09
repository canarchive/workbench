<!-- logo -->
<div class="zong_logo wrap_mar clear">
    <a href="http://jmw.com.cn" title="中国加盟网">
        <div class="logo_left zong_icon fl">
            <!-- <div id='mydiv'></div> --></div>
    </a>
    <div class='logo_leftMm'>
        <a href="" title="建材加盟" target="_self">
            <h1 class='logo_leftMmTop'>建材加盟</h1></a>
        <a href="" title="[建材加盟项目]" target="_self">
            <h1 class='logo_leftMmBottom'>[建材加盟项目]</h1></a>
    </div>
    <div class="logo_center fl">
        <div class="logo_find clear">
            <div class="logo_select f14 pr fl">行业
                <i class="zong_icon i7"></i>
                <ul class="pa xiala_box dis_n" style="height:235px;">
                    <li>
                        <a href="http://search.jmw.com.cn/i2/" title="美食加盟" target="_blank">美食</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i11/" title="教育加盟" target="_blank">教育</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i13/" title="幼儿加盟" target="_blank">幼儿</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i1/" title="服装加盟" target="_blank">服装</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i4/" title="干洗加盟" target="_blank">干洗</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i3/" title="美容加盟" target="_blank">美容</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i147/" title="酒店加盟" target="_blank">酒店</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i24/" title="建材加盟" target="_blank">建材</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i17/" title="环保加盟" target="_blank">环保</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i16/" title="家居加盟" target="_blank">家居</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i23/" title="汽车加盟" target="_blank">汽车</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i211/" title="金融加盟" target="_blank">金融</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i21/" title="珠宝加盟" target="_blank">珠宝</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i7/" title="饰品加盟" target="_blank">饰品</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i5/" title="精品加盟" target="_blank">精品</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i232/" title="娱乐加盟" target="_blank">娱乐</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i196/" title="酒水加盟" target="_blank">酒水</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i15/" title="零售加盟" target="_blank">零售</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i22/" title="家纺加盟" target="_blank">家纺</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i234/" title="食品加盟" target="_blank">食品</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i230/" title="服务加盟" target="_blank">服务</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i233/" title="健身加盟" target="_blank">健身</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i223/" title="超市加盟" target="_blank">超市</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i245/" title="宠物店加盟" target="_blank">宠物店</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i19/" title="五金加盟" target="_blank">五金</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i235/" title="家电加盟" target="_blank">家电</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i236/" title="数码加盟" target="_blank">数码</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/" title="微商加盟" target="_blank">微商</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/i231/" title="新行业加盟" target="_blank">新行业</a></li>
                    <li>
                        <a href="http://search.jmw.com.cn/" title="众筹加盟" target="_blank">众筹</a></li>
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
