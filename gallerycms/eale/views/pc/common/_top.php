<?php
$siteCode = $this->context->siteCode;
$siteInfos = $this->context->siteInfos;
$currentSite = $this->context->currentSiteInfo;

?>
<div class="yq-top" role="banner" style="position: relative; z-index: 9999;">
    <div class="container">
        <ul class="nav navbar-nav">
            <li>
                <a href="<?= $currentSite['url']; ?>" target="_blank" class=" blankbg">中国著名摄影品牌-<?= $currentSite['name']; ?></a></li>
            <?php foreach ($siteInfos as $siteKey => $siteInfo) { if ($siteKey == $siteCode) { continue; } ?>
            <li>
                <a href="<?= $siteInfo['url']; ?>" target="_blank" class="bg blankbg"><?= $siteInfo['name']; ?></a></li>
            <?php } ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <div class="input-group">
                <input id="tb_yq_artcleseek" type="text" class="form-control" placeholder="输入作品名称" aria-describedby="basic-addon2">
                <span class="input-group-btn glyphicon" id="basic-addon2">
                    <button type="button" class="btn btn-default" onclick="tb_yq_artcleseek()">
                        <h2>搜索</h2></button>
                </span>
            </div>
            <li class="weixin" onmouseover="this.className = 'weixin on';" onmouseout="this.className = 'weixin';">
                <a href="#">微信&nbsp;&nbsp;</a>
                <div class="weixin_nr">
                    <div class="arrow"></div>
                    <img class="img-responsive" src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/wechat-eale.jpg" alt="微信" />关注官方微信</div></li>
            <li class="weixin" onmouseover="this.className = 'weixin on';" onmouseout="this.className = 'weixin';">
                <a href="http://weibo.com/eale" target="_blank">微博&nbsp;&nbsp;</a>
                <div class="weibo_nr" id="wrapper ">
                    <div class="arrow"></div>
                    <img class="img-responsive" src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/weibo-eale.jpg" alt="微博" />关注官方微博</div></li>
        </ul>
    </div>
</div>
