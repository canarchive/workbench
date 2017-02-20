<section style="width:100%; background:#fff; border-bottom:1px solid #E8EAEE;">
    <ul class="zaixianzixun-example wrap" id="listpage_all">
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/79506-4799.jpg" alt=""></dt>
                <dt style="margin-bottom: 10px;">鲍先生</dt>
                <dt>网页版</dt></dl>
            <ul class="mass-2 fr">
                <i>
                </i>
                <li class="mass-2-1">IP：121.17.120.* 留言时间:2017-01-17 15:43:09
                    <img style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" class="fr" /></li>
                <li class="mass-2-2">资金看项目</li></ul>
        </li>
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5448b-6171.jpg" alt=""></dt>
                <dt style="margin-bottom: 10px;">吴正军</dt>
                <dt>网页版</dt></dl>
            <ul class="mass-2 fr">
                <i>
                </i>
                <li class="mass-2-1">IP：180.174.146.* 留言时间:2017-01-17 15:11:13
                    <img style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" class="fr" /></li>
                <li class="mass-2-2">·我想详细了解此项目的加盟流程，请与我联系！</li></ul>
        </li>
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5448b-6171.jpg" alt=""></dt>
                <dt style="margin-bottom: 10px;">陆前锋</dt>
                <dt>网页版</dt></dl>
            <ul class="mass-2 fr">
                <i>
                </i>
                <li class="mass-2-1">IP：58.40.195.* 留言时间:2017-01-16 15:19:31
                    <img style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" class="fr" /></li>
                <li class="mass-2-2">·我想详细了解此项目的加盟流程，请与我联系！</li></ul>
        </li>
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6989f-5450.jpg" alt=""></dt>
                <dt style="margin-bottom: 10px;">李总</dt>
                <dt>手机版</dt></dl>
            <ul class="mass-2 fr">
                <i>
                </i>
                <li class="mass-2-1">IP：223.104.24.* 留言时间:2017-01-15 12:45:33</li>
                <li class="mass-2-2">我想询问晨阳水漆项目</li></ul>
        </li>
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/37112-1012.jpg" alt=""></dt>
                <dt style="margin-bottom: 10px;">刘先生</dt>
                <dt>网页版|湖北</dt></dl>
            <ul class="mass-2 fr">
                <i>
                </i>
                <li class="mass-2-1">IP：202.114.144.* 留言时间:2017-01-15 11:29:16</li>
                <li class="mass-2-2">我想详细了解此项目的加盟流程，请与我联系。</li></ul>
        </li>
    </ul>
    <p class="p_zhanKai show_content" onclick="show_more($(this));" style="font-size:0.8rem;color:#e44b46;text-align:center;cursor:pointer;height:22px; ">查看更多
        <i class="zK_i"></i></p>
    <input type="hidden" id="pagesize" value="2" /></div>
</section>
<script type="text/javascript">function show_more(obj) {
        var page = $("#pagesize").val();
        var pid = "137829";
        $.ajax({
            cache: false,
            type: 'get',
            url: 'http://m.jmw.com.cn/messagepage.php',
            data: 'page=' + page + '&pid=' + pid,
            dataType: 'html',
            success: function(data) {
                $("#listpage_all").append(data.replace(/<h2>.*<\/h2>/g, ''));
                $("#pagesize").val(parseInt(page) + 1);
            }
        });
    }</script>
