    <div class="m-part conmmon-part vone-part zyy-s-nav">
        <h2>服务导航</h2>
        <div class="m-con">
            <div class="zyy-nav-inner clearfix">
                <div class='nav-item' id="newz">
                    <a href="/newz.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon1.png" alt=""></em>企业建站</span>
                    </a>
                </div>
                <div class='nav-item' id="zmobile">
                    <a href="/zmobile.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon2.png" alt=""></em>手机建站</span>
                    </a>
                </div>
                <div class='nav-item' id="zshop">
                    <a href="/zshop.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon3.png" alt=""></em>网上商城</span>
                    </a>
                </div>
                <div class='nav-item' id="ztouch">
                    <a href="/ztouch.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon4.png" alt=""></em>全网建站</span>
                    </a>
                </div>
                <div class='nav-item' id="vone">
                    <a href="/vone.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon5.png" alt=""></em>移动营销</span>
                    </a>
                </div>
                <div class='nav-item' id="zyunyou">
                    <a href="/zyunyou.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon6.png" alt=""></em>企业邮箱</span>
                    </a>
                </div>
                <div class='nav-item' id="yuming">
                    <a href="/yuming.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon7.png" alt=""></em>域名服务</span>
                    </a>
                </div>
                <div class='nav-item' id="kexinwangzhan">
                    <a href="/kexinwangzhan.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon10.png" alt=""></em>可信网站</span>
                    </a>
                </div>
                <div class='nav-item' id="appzhuanti">
                    <a href="/appzhuanti.html">
                        <span>
                            <em>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zyy-nav-icon11.png" alt=""></em>APP开发</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>$(function() {
            var url = window.location.href;
            var slug = ZQDL.util.domain.getslug(url);
            $('.zyy-s-nav').find('#' + slug).remove();
        });</script>
