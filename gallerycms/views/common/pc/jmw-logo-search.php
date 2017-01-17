<div class="logo wrapper clearfix">
    <div class="logo_left fl clearfix">
        <a target="_blank" href="http://www.jmw.com.cn">
            <img title="中国加盟网" width="133" height="34" src="http://image1.jmw.com.cn/search/images/logo.jpg"></a>
        <div style="border-left:1px solid #cdcdcd;float:left;color:#444;margin-top:20px;padding-left:14px;overflow:hidden;width: 220px;text-overflow: ellipsis;white-space: nowrap;">
            <h1 title="艺极楼梯加盟品牌" style="font:20px '微软雅黑';font-weight:bold;color:#444;">艺极楼梯加盟品牌</h1>
            <span title="艺极楼梯品牌加盟" style="font:12px '微软雅黑';color:#999999; font-weight:normal;">艺极楼梯品牌加盟</span></div>
    </div>
    <div class="logo_right fr">
        <div class="content1_top clearfix">
            <div class="fl join">
                <span id="sid1s_show" href="javascript:;" target="_self">选择行业</span>
                <div class="menu_child" style="display:none;">
                    <a target="_self" class="hangy" href="javascript:;" onclick="changesid1svalue('--选择行业--','');">--选择行业--</a>
                    <ul class="clearfix">
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('美食',2);">美食</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('服装',1);">服装</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('教育',11);">教育</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('家纺',22);">家纺</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('家居',16);">家居</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('幼儿',13);">幼儿</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('珠宝',21);">珠宝</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('饰品',7);">饰品</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('建材',24);">建材</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('美容',3);">美容</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('干洗',4);">干洗</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('酒水',196);">酒水</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('汽车',23);">汽车</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('环保',17);">环保</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('酒店',5,147);">酒店</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('英语',11,48);">英语</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('火锅',2,25);">火锅</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('早教',13,57);">早教</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('零售',15);">零售</a></li>
                        <li>
                            <a target="_self" href="javascript:;" onclick="changesid1svalue('精品',5);">精品</a></li>
                    </ul>
                </div>
                <script>function changesid2svalue(cid) {
                        $("#subid1s").val(cid);
                    }
                    function changesid1svalue(sname, id, cid) {
                        if (typeof(cid) == 'undefind') var cid = 0;
                        $("#sid1s_show").html(sname);
                        $("#sid1s").val(id);
                        changesid2svalue(cid);
                        $(".menu_child").hide();
                        // onchangeSid();
                    }</script>
            </div>
            <div class="fl money">
                <span id="mid_show" href="javascript:;" target="_self">选择金额</span>
                <div class="money_child" style="display:none;">
                    <a class="hangy" href="javascript:;" target="_self" onclick="changemidvalue('--选择金额--','');">--选择金额--</a>
                    <ul class="clearfix">
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('1万元以下','0,1');">1万元以下</a></li>
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('1~~10万元','1,10');">1~~10万元</a></li>
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('10~~20万元','10,20');">10~~20万元</a></li>
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('20~~50万元','20,50');">20~~50万元</a></li>
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('50~~100万元','50,100');">50~~100万元</a></li>
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('100万元以上','100,999999');">100万元以上</a></li>
                    </ul>
                </div>
                <script type="text/javascript">function changemidvalue(sname, id) {
                        $("#mid_show").html(sname);
                        $("#mid").val(id);
                        $(".money_child").hide();
                    }
                    $(function() {
                        $('#mid_show').click(function() {
                            var d = $('.money_child');
                            if (d.is(':visible')) {
                                d.hide();
                            } else {
                                $('.menu_child').hide();
                                $('#down_menu').hide();
                                $('.money_child').hide();
                                $('#menu').hide();
                                d.show();
                                return false;
                            }
                        });
                        $('#sid1s_show').click(function() {
                            var d = $('.menu_child');
                            if (d.is(':visible')) {
                                d.hide();
                            } else {
                                $('.menu_child').hide();
                                $('#down_menu').hide();
                                $('.money_child').hide();
                                $('#menu').hide();
                                d.show();
                                return false;
                            }
                        });
                        $('body').click(function() {
                            $('.menu_child').hide();
                            $('.money_child').hide();
                        }) 
                        $("div,span,h2").click(function() {
                            // alert($(this).attr('id'));
                            if ($(this).attr('id') == 'mid_show' || $(this).attr('id') == 'sid1s_show' || $(this).attr('id') == 'MyPersonDivShow' || $(this).attr('id') == 'next_show' || $(this).attr('id') == 'prev_show' || $(this).attr('id') == 'change_industry') {
                                return false;

                            } else {
                                $('.menu_child').hide();
                                $('#down_menu').hide();
                                $('.money_child').hide();
                                $('#menu').hide();
                                return;
                            }
                        });
                    });

                    // document.onclick = function(e){
                    //     $('.money_child,.menu_child').hide();
                    //     // return false;
                    // }
                    </script>
            </div>
            <form target="_blank" onsubmit="return onClickSubmitNum_fenci();" action="http://search.jmw.com.cn/newSearch/newList.php" method="get" class="fr sheet">
                <input type="hidden" name="industryId" id="sid1s" value="">
                <input type="hidden" name="industrySubclassId" id="subid1s" value="0">
                <input type="hidden" name="money" id="mid" value="">
                <input type="text" autocomplete="off" searchautocomplete="true" onblur="bonblu()" onfocus="aonfo()" value="请添加关键字" name="keyword" id="keyword_fenci" class="inp_1">
                <input type="submit" value="搜索一下" class="inp_2" style="text-decoration:none;">
                <script src="http://image1.jmw.com.cn/newSearchPage/js/jquery.oncheck.js" type="text/javascript"></script>
                <script>$(function() {
                        $(".inp_2").mouseover(function() {
                            $(this).attr("style", "text-decoration:underline;");
                        });
                        $(".inp_2").mouseout(function() {
                            $(this).attr("style", "text-decoration:none;");
                        });

                    });
                    function aonfo() {
                        val = $('#keyword_fenci').val();
                        if (val == '请添加关键字') {
                            $('#keyword_fenci').val('');
                        }
                    }

                    function bonblu() {
                        val = $('#keyword_fenci').val();
                        if (val == '') {
                            $('#keyword_fenci').val('请添加关键字');
                        }
                    }</script>
                <input type="hidden" id="flag" value="0">
                <input type="hidden" id="ppsubid" value="0">
                <input type="hidden" id="ppmc" name="ppmc" value="ppmc">
                <input type="hidden" id="dosubmit" value="1"></form>
            <script>var host = "http://search.jmw.com.cn/";
                function publicChange(sid, subid) {
                    jQuery.getScript("http://image1.jmw.com.cn/search/js/twoCategory.js",
                    function() {
                        var html = '&lt;option value="0"&gt;---行业子分类---&lt;/option&gt;';
                        for (var i in comp) {
                            if (comp[i]['sid'] == sid) {
                                var selected = (comp[i]['id'] == subid) ? 'selected': '';
                                html += '&lt;option value=' + comp[i]['id'] + '  ' + selected + ' &gt;' + comp[i]['sname'] + '&lt;/option&gt;';
                            }
                        }
                        jQuery("#subid1s").html(html);
                    });
                }

                function onchangeSid() {
                    var sid = jQuery("#sid1s").val();
                    sid = sid ? sid: 0;
                    if (sid) {
                        jQuery("#flag").val(sid);
                    }
                    var subid = jQuery("#ppsubid").val();
                    publicChange(sid, subid);
                }</script>
        </div>
    </div>
    <script src="http://search.jmw.com.cn/fenci/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="http://search.jmw.com.cn/fenci/jquery-ui.css">
    <script src="http://search.jmw.com.cn/fenci/jquery-ui.js"></script>
    <!--<link rel="stylesheet" href="http://comp.jmw.com.cn/lt/style.css">-->
    <script>$(function() {
            $.ajax();
            var availableTags = ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"];
            //var searchKeyword = $('#keyword_fenci').val();
            $("#keyword_fenci").autocomplete({
                source: "http://search.jmw.com.cn/Search.php",
                minLength: 1,
                select: function(event, ui) {
                    // event 是当前事件对象
                    window.location.href = ui.item.active;
                    // ui对象仅有一个item属性，它表示当前被选中的菜单项对应的数据源对象
                    // 该对象具有label和value属性，以及其它自定义(如果有的话)的属性
                }
            });
        });</script>
    <div style="display:none;">
        <!--综合页360统计代码-->
        <!--综合页360统计代码end--></div>
</div>
