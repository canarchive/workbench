<div class="header_top">
    <div class="header_top_center">
        <div class="header_top_right">
            <ul>
                <li>
                    <!--<label id="nav_user_data">
                        <a href="http://www.to8to.com/new_login.php" class="htr_login" rel="nofollow">登录</a>
                        <a href="http://www.to8to.com/reg/" class="htr_reg" rel="nofollow">注册</a>
                    </label>-->
                    <span class="htr_line"></span>
                    <a href="/" class="nav_fzlink" rel="nofollow">我要装修</a>
                    <em>咨询热线：<?= Yii::$app->params['siteHotline']; ?></em>
                    <span class="htr_line"></span>
                    <a href="/ask/" target="_blank">装修问答</a>
                    <span class="htr_line"></span>
                    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/merchant/" target="_blank"><?= Yii::$app->params['currentCompany']['name']; ?>装修公司</a>
                    <span class="htr_line"></span>
                    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/quote/" target="_blank"><?= Yii::$app->params['currentCompany']['name']; ?>装修报价</a>
                </li>
            </ul>
        </div>
        <div class="header_top_left">
            <ul>
                <li>
                    <em></em>
                    <label id="current_city"><?= Yii::$app->params['currentCompany']['name']; ?></label>
                    <a href="/change-city.html" rel="nofollow">[切换]</a></li>
            </ul>
        </div>
    </div>
</div>
