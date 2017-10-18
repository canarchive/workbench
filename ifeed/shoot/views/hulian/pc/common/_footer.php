<?php
$navDatas = $this->context->navDatas;
?>
<div class="latestNews">
    <?php //echo $this->render('_friendlink'); ?>
    <div class="footHome">
        <p>
            <?php foreach ($navDatas as $nav => $data) { ?>
            <a href="<?= $data['url']; ?>" <?php if (in_array($nav, ['index', 'contactus', 'aboutus', 'flow', 'guarantee'])) { echo 'rel="nofollow"'; } else { echo 'title="' . $data['name'] . '"'; } ?>><?= $data['name']; ?></a><span>|</span>
            <?php if (isset($data['subDatas'])) { foreach ($data['subDatas'] as $subData) { ?>
            <a href="<?= $subData['url']; ?>" title="<?= $subData['name']; ?>"><?= $subData['name']; ?></a><span>|</span>
            <?php } } ?>
            <?php } ?>
            <a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" target="_blank" title="预约拍摄">预约拍摄</a>
        </p>
        <p>24小时客服电话：<a rel="nofollow"><?= Yii::$app->params['siteHotline']; ?></a></p>
        <p><a rel="nofollow"><?= Yii::$app->params['siteIcpInfo']; ?></a></p>
        <p><?= Yii::$app->params['siteCopyRightInfo']; ?></p>
        <p>地址：<?php $address = isset($this->context->currentSiteInfo['address']) ? $this->context->currentSiteInfo['address'] : Yii::$app->params['siteAddressInfo']; echo $address; ?></p>
    </div>
</div>
