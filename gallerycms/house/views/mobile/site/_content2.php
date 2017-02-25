<div id="Box">
    <section class="Ruogu_jiaM1 clear">
        <div class="fl ruodetail">
            <dl>
                <dt>
                    <a href="http://m.jmw.com.cn/xm6588643/">
                        <img title="中宫格五天练字加盟" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/33e6c-4118.jpg"></a>
                </dt>
                <dd>
                    <input type="hidden" value="6588643" class="slow_ajaxGetNumById">已申请加盟:
                    <a id="slow_apCountNum6588643" class="slow_apCountNumClass" href="javascript:;">
                        <span></span></a>
                </dd>
            </dl>
        </div>
        <div class="fr ruodetail2">
            <div class="clear">
                <ul class="ul1 fl">
                    <a title="中宫格五天练字加盟" href="http://m.jmw.com.cn/xm6588643/" class="a1" id="font">中宫格五天练字</a>
                    <a title="中宫格五天练字加盟" href="http://m.jmw.com.cn/so/i11/">
                        <li>所属行业：教育</li></a>
                    <a title="中宫格五天练字加盟" href="http://m.jmw.com.cn/xm6588643/">
                        <li>门店数量：1300</li></a>
                    <a title="中宫格五天练字加盟" href="http://m.jmw.com.cn/so/m1~10/">
                        <li>投资额度：
                            <span>3~5
                                <i>万</i>
                            </span>
                        </li>
                    </a>
                </ul>
                <div class="phone fr">
                    <a onclick="publish_mess('6588643','12','我想询问中宫格五天练字项目')" class="fr free">
                        <span>在线咨询</span></a>
                    <a onclick="publish_mess('6588643','13','我想了解一下中宫格五天练字项目底价')" class="fr line">
                        <span>获取底价</span></a>
                </div>
            </div>
            <ul class="ul2 clear">
                <li class='li7'>品牌认证</li>
                <li class='li2'>全国招商</li>
                <li class='li5'>总部培训</li></ul>
        </div>
    </section>
    <section class="Ruogu_jiaM1 clear">
        <div class="fl ruodetail">
            <dl>
                <dt>
                    <a href="http://m.jmw.com.cn/xm6562900/">
                        <img title="室美伦加盟" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/d801b-7524.jpg"></a>
                </dt>
                <dd>
                    <input type="hidden" value="6562900" class="slow_ajaxGetNumById">已申请加盟:
                    <a id="slow_apCountNum6562900" class="slow_apCountNumClass" href="javascript:;">
                        <span></span></a>
                </dd>
            </dl>
        </div>
        <div class="fr ruodetail2">
            <div class="clear">
                <ul class="ul1 fl">
                    <a title="室美伦加盟" href="http://m.jmw.com.cn/xm6562900/" class="a1" id="font">室美伦</a>
                    <a title="室美伦加盟" href="http://m.jmw.com.cn/so/i24/">
                        <li>所属行业：建材</li></a>
                    <a title="室美伦加盟" href="http://m.jmw.com.cn/xm6562900/">
                        <li>门店数量：601</li></a>
                    <a title="室美伦加盟" href="http://m.jmw.com.cn/so/m1~10/">
                        <li>投资额度：
                            <span>3~6
                                <i>万</i>
                            </span>
                        </li>
                    </a>
                </ul>
                <div class="phone fr">
                    <a onclick="publish_mess('6562900','12','我想询问室美伦项目')" class="fr free">
                        <span>在线咨询</span></a>
                    <a onclick="publish_mess('6562900','13','我想了解一下室美伦项目底价')" class="fr line">
                        <span>获取底价</span></a>
                </div>
            </div>
            <ul class="ul2 clear">
                <li class='li7'>品牌认证</li>
                <li class='li4'>帮你选址</li></ul>
        </div>
    </section>
</div>
<div class="more-Infs project_page" style="margin-top:-6px;">
    <input type="hidden" value="1" id="project_page">
    <a class="more-Inf fl" href="http://m.jmw.com.cn/so/" style="font-size:12px;">更多加盟项目
        <i id="more_jiameng" class="more-icon"></i></a>
</div>
<script>if ($('.ajaxGetNumById').length > 0) {
        var ajaxGetNumByIdStr = '';
        $('.ajaxGetNumById').each(function() {
            ajaxGetNumByIdStr += 'target_id[]=' + $(this).val() + '&';
        });
        ajaxGetNumByIdStr = ajaxGetNumByIdStr.substring(0, ajaxGetNumByIdStr.length - 1);
        $.ajax({
            type: 'get',
            url: 'http://liuyan.jmw.com.cn/message/search_list_message_count.php',
            dataType: 'jsonp',
            jsonp: 'callback',
            data: ajaxGetNumByIdStr,
            success: function(html) {
                $('.apCountNumClass').html('<span>0</span>');
                for (var o in html) {
                    $('#apCountNum' + html[o].target_id).html('<span>' + html[o].c + '</span>')
                }
            }
        });
    }
    if ($('.slow_ajaxGetNumById').length > 0) {
        var ajaxGetNumByIdStr = '';
        $('.slow_ajaxGetNumById').each(function() {
            ajaxGetNumByIdStr += 'target_id[]=' + $(this).val() + '&';
        });
        ajaxGetNumByIdStr = ajaxGetNumByIdStr.substring(0, ajaxGetNumByIdStr.length - 1);
        $.ajax({
            type: 'get',
            url: 'http://liuyan.jmw.com.cn/message/search_list_message_count.php',
            dataType: 'jsonp',
            jsonp: 'callback',
            data: ajaxGetNumByIdStr,
            success: function(html) {
                $('.slow_apCountNumClass').html('<span>0</span>');
                for (var o in html) {
                    $('#slow_apCountNum' + html[o].target_id).html('<span>' + html[o].c + '</span>')
                }
            }
        });
    }
    /*$(".project_page").click(function(){
        var page = $('#project_page').val();
        if(page > 5){
            window.location.href='http://m.jmw.com.cn/so/';
        }else{
            $('#project_page').val(parseInt(page)+1);
            $('#gundong'+page).show();
        }
        
    })*/
    </script>
