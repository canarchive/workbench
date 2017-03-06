<!-- 行业站品牌 start -->
<div id="listPage">
    <?php foreach ($infos as $info) { ?>
    <section class="Ruogu_jiaM1 clearfix">
        <div class="fl ruodetail">
            <dl>
                <dt>
                    <a href="/sample_show_<?= $info['id']; ?>.html" title="<?= $info['name']; ?>">
						<img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" width="204" height="155" /></a>
                </dt>
                <!--<dd>
                    <input type="hidden" class="ajaxGetNumById" value="6562900" />已申请加盟:
                    <a rel="nofollow" href="javascript:;" class="apCountNumClass" id="apCountNum6562900"><span></span></a>
                </dd>-->
            </dl>
        </div>
        <div class="fr ruodetail2">
            <div class="clearfix">
                <ul class="ul1 fl">
                    <a id="font" class="a1" href="/sample_show_<?= $info['id']; ?>.html" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
                    <a href="javascript:void(0);">
                        <li>户型：<?= $info->decoration_sort; ?></li></a>
                    <?php if (!empty($info['style'])) { ?>
                    <a href="javascript:void(0);">
                        <li>风格：<?= $info->style; ?></li></a>
                    <?php } ?>
                    <a href="javascript:void(0);">
                        <li>面积：<?= $info['budget']; ?></li></a>
                </ul>
                <div class="phone fr">
                <a class="free" onclick="publish_mess('<?= $info['id']; ?>','sample','装修成这样')">
                    <span>免费设计</span></a>
                <a class="line" onclick="publish_mess('<?= $info['id']; ?>','sample','装修成这样多少钱')">
                    <span>免费报价</span></a>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
</div>
<!-- 行业站品牌 end -->
<!-- 查看更多 start -->
<div class="seaMore" id="show_all">
    <a href="javascript:;" onclick="show_more($(this));">查看更多</a>
    <input type="hidden" id="pagesize" value="2" /></div>
<script>
function show_more(obj) {
        var page = $("#pagesize").val();
        var industryId = "24";
        var ChildIndustryId = "";
        var money = "";
        var people = "";
        var searchBy = "";
        var keyword = "";
        var area = "";
        $.ajax({
            cache: false,
            type: 'get',
            url: 'http://m.jmw.com.cn/so/search_page.php',
            data: 'page=' + page + '&industryId=' + industryId + '&ChildIndustryId=' + ChildIndustryId + '&money=' + money + '&keyword=' + keyword + '&searchBy=' + searchBy + '&people=' + people + '&area=' + area,
            dataType: 'html',
            success: function(data) {
                $("#listPage").append(data.replace(/<h2>.*<\/h2>/g, ''));
                $("#pagesize").val(parseFloat(page) + 1);
            }
        });
    }

    if ($('.ajaxGetNumById').length > 0) {
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
    </script>
<!-- 查看更多 end --></div>
