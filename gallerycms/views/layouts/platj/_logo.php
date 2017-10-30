<?php
$info = $this->context->mDatas['info']; 
?>
<div class="logo wrapper clearfix">
    <div class="logo_left fl clearfix">
        <a title="<?= Yii::$app->params['siteNameBase']; ?>" href="<?= Yii::getAlias('@gallerycmsurl'); ?>">
            <img title="<?= Yii::$app->params['siteNameBase']; ?>" width="133" height="34" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/8a0ad-7533.jpg"></a>
        <div style="border-left:1px solid #cdcdcd;float:left;color:#444;margin-top:20px;padding-left:14px;overflow:hidden;width: 220px;text-overflow: ellipsis;white-space: nowrap;">
            <h1 title="<?= $info['name']; ?>" style="font:20px '微软雅黑';font-weight:bold;color:#444;"><?= $info['name']; ?>装修公司</h1>
            <span title="<?= $info['name']; ?>装修公司点评" style="font:12px '微软雅黑';color:#999999; font-weight:normal;"><?= $info['name']; ?>装修公司点评</span>
        </div>
    </div>
    <div class="logo_right fr">
        <div class="content1_top clearfix">
            <div class="fl money">
                <span id="mid_show" href="javascript:;" target="_self">装修公司</span>
                <div class="money_child" style="display:none;">
                    <ul class="clearfix">
                        <li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('装修公司','merchant');">装修公司</a></li>
                        <!--<li>
                            <a href="javascript:;" target="_self" onclick="changemidvalue('装修问答','ask');">装修问答</a></li>
                        <li><a href="javascript:;" target="_self" onclick="changemidvalue('装修报价','100,999999');">装修报价</a></li>-->
                    </ul>
                </div>
                <script type="text/javascript">
                function changemidvalue(sname, id) {
                    $("#mid_show").html(sname);
                    $("#mid").val(id);
                    $("#search_sort").val(id);
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
                    }); $("div,span,h2").click(function() {
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
                </script>
            </div>
            <form class="fr sheet">
                <input type="hidden" name="industryId" id="sid1s" value="">
                <input type="hidden" name="industrySubclassId" id="subid1s" value="0">
                <input type="hidden" name="money" id="mid" value="">
                <input type="hidden" name="money" id="search_sort" value="merchant">
                <input type="text" autocomplete="off" searchautocomplete="true" onblur="bonblu()" onfocus="aonfo()" value="请添加关键字" name="keyword" id="keyword_fenci" class="inp_1">
                <input type="submit" value="搜索一下" onclick="searchOptj();return false;" class="inp_2" style="text-decoration:none;">
                <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery.oncheck.js" type="text/javascript"></script>
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
            <script>var host = "/search/";
                function publicChange(sid, subid) {
                    jQuery.getScript("twoCategory.js",
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
    <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/af28d-4814.css">
    <script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery-ui.js"></script>
    <!--<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/6d681-4893.css">-->
    <div style="display:none;"></div>
</div>
