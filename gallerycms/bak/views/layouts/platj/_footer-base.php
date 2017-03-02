<?php
$footerNavs = $this->context->footerNavs;
?>
<div class="footer">
    <!--<div class="hot">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/625fa-9983.gif">
    </div>-->
    <p>
        <?php foreach (['desc', 'friendlink', 'guestbook', 'contactus', 'statement'] as $navKey) { ?>
        <a href="<?= $footerNavs[$navKey]['url']; ?>" rel="nofollow"><?= $footerNavs[$navKey]['name']; ?></a>|
        <?php } ?>
    </p>
    <?= $footerNavs['disclaimer']; ?><br /><?= $footerNavs['copyRight']; ?><br />
    <?= $footerNavs['icpInfo']; ?><br />
    <!--<a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202006020700545" target="_blank">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b5e07-1754.jpg"  style="width:32px; height:37px; "/>
    </a>-->
</div>
