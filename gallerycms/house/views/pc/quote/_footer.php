<?php
$footerNavs = $this->context->footerNavs;
?>
<div class="com-foot clearfix">
    <?php //echo $this->('_footer-ext'); ?>
    <ul class="foot-main foot-row2 clearfix cDGray"></ul>
    <!-- copyright -->
    <div class="foot-main foot-row3 clearfix mt20">
        <div class="row3-l clearfix">
            <p class="links cJGray">
                <?php foreach (['desc', 'friendlink', 'guestbook', 'contactus', 'statement'] as $navKey) { ?>
                <a href="<?= $footerNavs[$navKey]['url']; ?>" rel="nofollow"><?= $footerNavs[$navKey]['name']; ?></a>
                <?php } ?>
            </p>
            <p class="mt5 cDGray">
                <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" title="<?= $footerNavs['icpInfo']; ?>"><?= $footerNavs['icpInfo']; ?></a>
                <span>|</span>
                <span><?= $footerNavs['copyRight']; ?></span>
            </p>
        </div>
        <!--<div class="r">
            <a href="http://www.bj.cyberpolice.cn/" target="_blank" rel="nofollow">
                <span class="sprite-foot sp-f-c1"></span>
            </a>
        </div>-->
    </div>
</div>
