<div class="header_center">
    <div class="header_center_container">
        <div class="header_center_main">
            <span class="hcc_logo">
                <a href="/" class="logo" id="logourl"><?= Yii::$app->params['siteNameBase']; ?>装修网</a>
            </span>
            <form id="searchform">
                <div class="header_search">
                    <div class="header_select">
                        <a href="javascript:void(0)" class="header_select_sort">
                            <span><em>装修公司</em><b></b></span>
                        </a>
                        <ul>
                            <li><a href="javascript:void(0)">装修公司</a></li>
                            <li><a href="javascript:void(0)">装修问答</a></li>
                            <li><a href="javascript:void(0)">装修报价</a></li>
                        </ul>
                    </div>
                    <input type="text" class="header_search_input" id="keyword" name="keyword">
                    <input type="hidden" id="search_sort" value="merchant">
                    <em class="header_search_input_text">装修公司</em>
                    <input class="header_search_submit" onclick="searchOpt();" value="搜 索">
                </div>
            </form>
            <!-- banner区域[[ -->
            <div class="index_banner_s">
                <a class="bLeft" href="javascript:void(0);">
                    <span class="banner_arrow">上一张</span></a>
                <a class="bRight" href="javascript:void(0);">
                    <span class="banner_arrow">下一张</span></a>
                <ul id="side_slider" class="banner_slider" style="left:-230px">
                    <li class="on">
                        <a href="/" class="nav_fzlink" target="_blank" rel="nofollow">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/94ac0-5951.jpg" width="230" height="70" alt="全程免费服务"></a>
                    </li>
                    <li>
                        <a href="/ask/" class="nav_fzlink" target="_blank" rel="nofollow">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/94ac0-5951.jpg" width="230" height="70" alt="全程免费服务">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
