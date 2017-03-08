<div class="col2_2">
    <!--<div class="ask_side ask_user">
        <div class="ask_user_top">
            <div class="user_log clear" style="display:none;">
                <div class="user_info clear">
                    <a href="/my/" target="_blank" class="user_img">
                        <img src="" width="60" height="60"></a>
                    <div class="user_name">
                        <a href="/my/" target="_blank" class="ect"></a>
                        <div class="user_jiffen">积分：</div></div>
                </div>
                <div class="user_data clear">
                    <a href="/my/ask.php" target="_blank" class="user_data_first">
                        <em>问过</em>
                        <span id="wenguo"></span>
                    </a>
                    <a href="/my/zxgs_answer.php" target="_blank">
                        <em>答过</em>
                        <span id="daguo"></span>
                    </a>
                    <a href="/my/zxgs_answer.php" target="_blank">
                        <em>采纳</em>
                        <span id="caina"></a>
                    </span>
                </div>
            </div>
            <div class="user_unlog">
                <div class="answer_sum clear"></div>
                <div class="answer_num_des">位业主已在问吧找到答案</div></div>
        </div>
        <div class="ask_user_btn clear">
            <a href="/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a>
            <a href="/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a></div>
    </div>-->
    <div class="ask_side ask-weixin-tuijian">
        <div class="side_hd ask-weixin-tuijian-hd">装修公司推荐</div>
        <div class="side_bd side_list">
            <?php foreach ($merchantInfos as $info) { ?>
            <div class="need_case">
                <a href="<?= $info['infoUrl']; ?>">
                    <img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>">
                    <p><?= $info['name_full']; ?></p>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <!--<div class="ask_side_opa">
        <a id="autourl" href="/temai/zt539" hidefocus="" target="_blank" rel="nofollow">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/ff04f-1328.jpg" width="240" height="130"></a>
    </div>-->
    <div class="ask_side spceil">
        <div class="side_hd">最新标签</div>
        <div class="new_tag ">
            <?php $i = 0; foreach ($tagInfos as $key => $tInfo) { if ($i > 20) { break; }?>
            <a href="/ask_<?= $tInfo['id']; ?>/" title="<?= $tInfo['name']; ?>"><?= $tInfo['name']; ?></a>
            <?php unset($tagInfos[$key]); $i++; } $this->params['tagInfos'] = $tagInfos; ?>
        </div>
    </div>
</div>
<script type='text/javascript'>var href = jq('#HotArea a').attr('href');
    if (!href) {
        jq('#HotArea a').attr('href', 'javascript:void(0);');
    }

    //右侧新增热门推荐
    var ewmhtml = '<div class="ewm-msg-layout">\
<div class="ewm-msg-box clear">\
<div class="wem-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/e8cd2-1545.png"></div>\
<div class="ewm-msg-text"><p>微信扫一扫</p><p>关注<em>土巴兔装修家居</em>公众号</p><p>发送<em>rm01</em>阅读</p></div>\
<i class="ico-ewm-remov"></i>\
</div>\
</div>';
    jq('#erweima01').on('click',
    function() {
        jq('body').append(ewmhtml);
    });
    jq('body').on('click', '.ewm-msg-box > .ico-ewm-remov',
    function() {
        jq('.ewm-msg-layout').remove();
    }); var ewmhtml01 = '<div class="ewm-msg-layout">\
<div class="ewm-msg-box clear">\
<div class="wem-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/373c5-5471.png"></div>\
<div class="ewm-msg-text"><p>微信扫一扫</p><p>关注<em>土巴兔装修家居</em>公众号</p><p>发送<em>rm02</em>阅读</p></div>\
<i class="ico-ewm-remov"></i>\
</div>\
</div>';
    jq('#erweima02').on('click',
    function() {
        jq('body').append(ewmhtml01);
    });
    jq('body').on('click', '.ewm-msg-box > .ico-ewm-remov',
    function() {
        jq('.ewm-msg-layout').remove();
    }); if (typeof(ids) != 'undefined') {
        var anidstr = ids.substring(0, ids.lastIndexOf(','));
    } else {
        var anidstr = '';
    }
</script>
