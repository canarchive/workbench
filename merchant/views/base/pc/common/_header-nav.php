<div class="header navbar">
    <div class="header-navbar clearfix">
        <h2 class="header-logo index-logo"><a href="/"><?= $this->appDatas('siteName'); ?></a></h2>
        <div class="header-menu">
            <ul class="clearfix">
                <!--<li class="index on"><a href="/">首页</a></li>-->
                <?php if (Yii::$app->user->isGuest) { ?>
                <li class="register-and-login">
                    <a href="/signup.html" class="register-btn">注册</a>
                    <span class="border"></span>
                    <a href="/signin.html">登录</a></li>
                <?php } else { ?>
                <li class="experience">
                    <a href="/admin/" class="btn-experience">立即体验</a></li>
                <?php } ?>
				<!--<li class="contact-ways"><i></i><span></span></li>-->
            </ul>
            <!--<i class="scroll-top"></i>-->
        </div>
    </div>
</div>
