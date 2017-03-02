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
            <div class="logo_select f14 pr fl">装修公司
                <!--<i class="zong_icon i7"></i>
                <ul class="pa xiala_box dis_n" style="height:235px;">
                    <li><a href="/" title="装修公司">装修公司</a></li>
                    <li><a href="/" title="装修问答">装修问答</a></li>
                    <li><a href="/" title="装修报价">装修报价</a></li>
                </ul>-->
            </div>
            <input type="text" i="" name="keyword" value="" class="fl text fontW" id="keyword_fenci" onfocus="if(this.value==$(this).attr('i')){this.value='';}" onblur="if(this.value==''){this.value=$(this).attr('i');}" />
            <input type="hidden" id="search_sort" value="merchant" />
            <input type="button" value="搜索" class="button f16 fontW fr" onclick="searchOptj();" /></div>
        <script>function goSub() {
                var keyword = $("#keyword_fenci").val();
                if (keyword == '请输入关键词' || keyword.replace(/\s/g, "") == '') {
                    //window.location.href="http://search.jmw.com.cn/"; 
                    window.open("http://search.jmw.com.cn/");
                } else {
                    window.open("/search.html?keyword=" + encodeURIComponent(keyword) + "");
                }
            }
            /*$(function() {
                $('#keyword_fenci').bind('keypress',
                function(event) {
                    if (event.keyCode == "13") {
                        goSub();
                    }
                });
            });*/
        </script>
        <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/429bc-5654.css">
        <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery-ui.js"></script>
        <!--<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/6d681-4893.css">-->
        <script>$(function() {
                /*var seaerch_brand = [""];
                var se_index = Math.floor((Math.random() * seaerch_brand.length));
                $('#keyword_fenci').val(seaerch_brand[se_index]);
                $('#keyword_fenci').attr('i', seaerch_brand[se_index]);*/
                /*$.ajax();
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
                });*/
            });</script>
        <ul class="f12">
            <li>
                <a href="<?= "/{$this->context->currentCityCode}/merchant/d_part/"; ?>" title="局部装修">局部装修</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="<?= "/{$this->context->currentCityCode}/merchant/s_rural/"; ?>" title="田园">田园</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="<?= "/{$this->context->currentCityCode}/merchant/d_common/"; ?>" title="普通住宅">普通住宅</a></li>
            <li style="font-size:10px;">|</li>
            <li>
                <a href="<?= "/{$this->context->currentCityCode}/merchant/s_newclassics/"; ?>" title="新古典">新古典</a></li>
            <li style="font-size:10px;">|</li>
            <li>
            <a href="<?= "/{$this->context->currentCityCode}/merchant/s_mashup/"; ?>" title="混搭">混搭</a></li>
        </ul>
    </div>
    <ul class="fr f12 logo_paihang">
        <li>
            <a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName . '装修公司'; ?>">
                <i class="zong_icon i8"></i>
            </a>
            <a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName . '装修公司'; ?>"><?= '装修公司'; ?></a></li>
        <li>
            <a href="<?= "/ask_lm_gzsj/"; ?>" title="<?= $this->context->currentCityName . '装修问答'; ?>">
                <i class="zong_icon i9"></i>
            </a>
            <a href="<?= "/ask_lm_gzsj/"; ?>" title="<?= $this->context->currentCityName . '装修问答'; ?>"><?= '装修问答'; ?></a></li>
        <li>
            <a href="<?= "/{$this->context->currentCityCode}/quote/"; ?>" title="<?= $this->context->currentCityName . '装修报价'; ?>">
                <i class="zong_icon i10"></i>
            </a>
            <a href="<?= "/{$this->context->currentCityCode}/quote/"; ?>" title="<?= $this->context->currentCityName . '装修报价'; ?>"><?= '装修报价'; ?></a></li>
    </ul>
</div>
