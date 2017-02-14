<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
//use yii\widgets\LinkPager;
use gallerycms\components\LinkPager;

$this->params['bodyClass'] = 'class="narrow_980"';
?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/ask.js"></script>
<div class="ask_class">
    <?= $this->render('_breadnav'); ?>
    <div class="container clear">
        <?= $this->render('_nav'); ?>
        <div class="col2_1">
            <div class="question_list">
                <ul>
                    <?php foreach ($infos as $info) { ?>
                    <li>
                        <div class="question_hd">
                            <a href="/ask-<?= $info['id']; ?>.html" target="_blank" class="ect">[客厅]<?= $info['name']; ?></a>
                        </div>
                        <div class="question_bd ect"><?= $info['description']; ?></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                            <em class="ans_num"><?= $info['num_answer']; ?></em>个回答</div>
                            <div class="col_r"><?= date('Y-m-d H:i:s', $info['created_at']); ?></div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="pages"><?= LinkPager::widget(['pagination' => $pages, 'activePageCssClass' => 'current']); ?></div>
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/globalprovinces.js" xmlns="http://www.w3.org/1999/html"></script>
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/67379-7523.css">
            <div id='HotArea' style='display: block;'></div>
        </div>
        <div class="col2_2">
            <div class="ask_side ask_user">
                <div class="ask_user_top">
                    <div class="user_log clear" style="display:none;">
                        <div class="user_info clear">
                            <a href="http://www.to8to.com/my/" target="_blank" class="user_img">
                                <img src="" width="60" height="60"></a>
                            <div class="user_name">
                                <a href="http://www.to8to.com/my/" target="_blank" class="ect"></a>
                                <div class="user_jiffen">积分：</div></div>
                        </div>
                        <div class="user_data clear">
                            <a href="http://www.to8to.com/my/ask.php" target="_blank" class="user_data_first">
                                <em>问过</em>
                                <span id="wenguo"></span>
                            </a>
                            <a href="http://www.to8to.com/my/zxgs_answer.php" target="_blank">
                                <em>答过</em>
                                <span id="daguo"></span>
                            </a>
                            <a href="http://www.to8to.com/my/zxgs_answer.php" target="_blank">
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
                    <a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a>
                    <a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a></div>
            </div>
            <div class="ask_side ask-weixin-tuijian">
                <div class="side_hd ask-weixin-tuijian-hd">热门推荐</div>
                <div class="side_bd side_list">
                    <div class="need_case">
                        <a href="javascript:;" target="_blank" id="erweima01">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/91fff-7993.jpg" alt="">
                            <p>脑子进水造成的12大装修遗憾，你流泪了吗？</p>
                        </a>
                    </div>
                    <div class="need_case mar-20">
                        <a href="javascript:;" target="_blank" id="erweima02">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/3c41d-7973.jpg" alt="">
                            <p>为什么我家装修完看起来这么&quot;廉价&quot;？</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ask_side_opa">
                <a id="autourl" href="http://mall.to8to.com/temai/zt539" hidefocus="" target="_blank" rel="nofollow">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/ff04f-1328.jpg" width="240" height="130"></a>
            </div>
            <div class="ask_side spceil">
                <div class="side_hd">最新标签</div>
                <div class="new_tag ">
                    <a href="http://www.to8to.com/ask/search/80862" target="_blank">德国家具</a>
                    <a href="http://www.to8to.com/ask/search/80897" target="_blank">消毒柜使用说明</a>
                    <a href="http://www.to8to.com/ask/search/81004" target="_blank">德国双立人</a>
                    <a href="http://www.to8to.com/ask/search/81206" target="_blank">复合地板维修</a>
                    <a href="http://www.to8to.com/ask/search/81087" target="_blank">淋浴房要多少钱</a>
                    <a href="http://www.to8to.com/ask/search/81204" target="_blank">门禁控制器原理</a>
                    <a href="http://www.to8to.com/ask/search/81062" target="_blank">sd卡受损</a>
                    <a href="http://www.to8to.com/ask/search/80793" target="_blank">复合地板颜色</a>
                    <a href="http://www.to8to.com/ask/search/80950" target="_blank">不锈钢三通</a>
                    <a href="http://www.to8to.com/ask/search/81076" target="_blank">佛山橱柜</a>
                    <a href="http://www.to8to.com/ask/search/81233" target="_blank">不锈钢双槽</a>
                    <a href="http://www.to8to.com/ask/search/80777" target="_blank">电脑机箱热</a>
                    <a href="http://www.to8to.com/ask/search/81021" target="_blank">佛山瓷砖胶</a>
                    <a href="http://www.to8to.com/ask/search/80857" target="_blank">笔记本屏幕排线</a>
                    <a href="http://www.to8to.com/ask/search/81027" target="_blank">复合地板环保</a>
                    <a href="http://www.to8to.com/ask/search/81150" target="_blank">干衣机品牌</a>
                    <a href="http://www.to8to.com/ask/search/81164" target="_blank">格兰仕冰箱</a>
                    <a href="http://www.to8to.com/ask/search/81161" target="_blank">佛山灯</a>
                    <a href="http://www.to8to.com/ask/search/81156" target="_blank">钢门板</a>
                    <a href="http://www.to8to.com/ask/search/80985" target="_blank">ibm笔记本无线</a></div>
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
            jq(function() {
                jq.ajax({
                    'type': 'post',
                    'url': 'http://www.to8to.com/ask/ask_post.php',
                    'dataType': 'json',
                    'data': {
                        action: 'new_action_type',
                        anidstr: anidstr
                    },
                    'success': function(data) {
                        if (anidstr != '') {
                            var key = 0;
                            for (key in data.newzan) {
                                if (data.newzan[key]['status']) {
                                    jq('#class' + key).attr('class', 'ico_praise_new');
                                    jq('#show' + key).parents('a').css('color', "#f25618");
                                }
                                if (data.newzan[key]['num'] > 0) {
                                    jq('#show' + key).text(data.newzan[key]['num']);
                                }
                            }
                        }
                        if (data.status == 'nologin') {
                            jq('.user_log').hide();
                            jq('.user_unlog').show();
                            jq('.user_unlog .answer_sum').html(data.solvenum);
                            jq('.ask_user_btn').html('<a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                        } else if (data.status == 'login') {
                            jq('.user_log').show();
                            jq('.user_unlog').hide();
                            jq('.user_log .user_img img').attr('src', data.photo);
                            jq('.user_log .user_name .ect').html(data.username);
                            jq('.user_log .user_name .user_jiffen').html('积分：' + data.credits);
                            jq('#wenguo').html(data.asknum);
                            jq('#daguo').html(data.answernum);
                            jq('#caina').html(data.acceptnum);
                            jq('.ask_user_btn').html('<a href="k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                        }
                    }
                })
            })</script>
    </div>
    <script>(function() {
            jq('.state_on').click(function() {
                jq('.state_list').toggle();
            }); var fixObj = jq('#zxbjFrame'),
            rightWrap = jq('.col2_2'),
            fixObjPh = rightWrap.offset().top + rightWrap.height(),
            origWidth = rightWrap.width(),
            bwer = checkBrowser(),
            ie6 = false;
            if (bwer.name == "msie" && bwer.version == 6) {
                ie6 = true;
            };
            jq(window).bind('scroll',
            function() {
                var sh = document.documentElement.scrollTop || document.body.scrollTop;

                if (fixObjPh <= sh && !ie6) {
                    fixObj.addClass('fm_locate').css('width', origWidth + 'px');
                } else {
                    fixObj.removeClass('fm_locate');
                }
            });
        })();</script>
</div>
<script type="text/javascript">var voluntarily_slide = true;
    var slide_show_ptag = '1_3_9_1025';</script>
<script>if (!window.tender) {
        jq.getScript('http://static.to8to.com/gb_js/tender.js?v=1464789987');
    }</script>
<div class="footer" id="footerHeight">
