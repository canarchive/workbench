<div class="header_bottom">
    <div class="header_menu">
        <ul>
            <li>
                <a class="nav_fzlink" href="/">首页</a><b></b>
            </li>
            <li class="">
                <a class="nav_fzlink" href="/sample/">效果图</a><b></b>
            </li>
            <li class="">
                <a class="nav_fzlink" href="/sample/">装修问答</a><b></b>
            </li>
            <li class="has_secondMenu ">
                <a href="/ask/">
                    <em class="menu_arrow"></em>
                    <span>装修问答</span></a>
                <dl>
                    <dd>
                        <a href="/ask/">装修日记</a>
                        <a href="/ask/">装修日记</a>
                        <a href="/ask/">装修日记</a>
                        <a class="nav_fzlink" id="nevzwjurl" href="http://www.to8to.com/zwj/">找我家</a>
                    </dd>
                </dl>
                <b>
                </b>
            </li>
            <!--<li class="has_hotIcon ">
                <a class="nav_fzlink" href="http://www.to8to.com/zb/">设计与报价</a>
                <em class="sjbj_hot"></em><b></b>
            </li>-->
            <li class="">
                <a class="nav_fzlink" href="/<?= Yii::$app->params['currentCompany']['code']; ?>/merchant/">装修公司</a><b></b>
            </li>
            <li class="has_homeIcon">
                <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/quote/">装修报价</a><b></b>
            </li>
        </ul>
        <?php if (isset($showRightNav) && ($showRightNav)) { ?>
        <div class="q_code">
            <a href="http://www.to8to.com/apps/" class="q_code_applnk" rel="nofollow">
                <div class="slider_container">
                    <div class="clear">
                        <div class="to8to_headgif">
                            <em class="first-pic"></em>
                            <div>
                                <p>下载app立享</p>
                                <p>12000元免费设计</p>
                            </div>
                        </div>
                        <div class="to8to_headgif">
                            <em class="second-pic"></em>
                            <div>
                                <p>工地实时直播</p>
                                <p>一手掌控装修进度</p>
                            </div>
                        </div>
                        <div class="to8to_headgif">
                            <em class="third-pic"></em>
                            <div>
                                <p>海量家居美图</p>
                                <p>千万真实装修案例</p>
                            </div>
                        </div>
                        <div class="to8to_headgif">
                            <em class="fourth-pic"></em>
                            <div>
                                <p>业主真实装修日记</p>
                                <p>随时与业主互动</p>
                            </div>
                        </div>
                    </div>
                </div>
                <em class="right-dash"></em>
            </a>
        <div class="q_code_layer" style="display:none;">
            <a href="/apps/" class="qcode_lnk" rel="nofollow">
                <span class="qcode_title">下载<?= Yii::$app->params['siteNameBase']; ?>APP</span>
                <span class="qcode_img" title="下载<?= Yii::$app->params['siteNameBase']; ?>手机版"></span>
                <em class="left-loadapp">
                    <span>一站式装修神器</span></em>
            </a>
            <a href="wechat" class="qcode_lnk" rel="nofollow">
                <span class="qcode_title wechat_title">关注微信公众号</span>
                <span class="qcode_img wech" title="1万套装修案例"></span>
                <em class="right-wechat">
                    <span>1万套装修案例</span></em>
            </a>
            <em class="fider_backpng"></em>
        </div>
        </div>
        <?php } ?>
        <!--<a href="http://www.to8to.com/apps/" class="q_code" rel="nofollow">
            <div class="q_code_layer">
                <span class="qcode_title">下载手机装修管家</span>
                <span class="qcode_img"></span>
                <span class="qcode_title">关注<?= Yii::$app->params['siteNameBase']; ?>微信</span>
                <span class="qcode_img wech"></span>
            </div>
        </a>-->
    </div>
</div>
