<?php 
$info = $this->context->mDatas['info'];
$cInfos = $this->context->mDatas['commentInfos'];
?>
<div class="zaixianzixun ziXun">
    <div class="wen_p clear">
        <div class="fl" style="border-bottom:none; color:#e44b46;line-height:50px;">
            <a href="<?= "/{$info['city_code']}/{$info['code']}/comment/"; ?>" style="color:#e44b46;font-size: 16px; " title="<?= $info['name']; ?>业主点评"><?= $info['name']; ?>业主点评</a></div>
        <span class="fr">
            已服务<span style="color:red;"><?= $info['num_owner']; ?></span>业主</span></div>
    <ul class="zaixianzixun-example">
        <?php $i = 0; foreach ($cInfos as $cInfo) { if ($i > 10) { break; } ?>
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="http://image1.jmw.com.cn/logo/kf/0/3.jpg" alt="<?= $cInfo['ownerInfo']['name']; ?>"></dt>
                <dt style="margin-bottom: 6px;"><?= $cInfo['ownerInfo']['name']; ?></dt>
                <dt>评分:<?= $cInfo['totalScore']; ?></dt></dl>
            <ul class="mass-2 fr">
                <i>
                </i>
                <li class="mass-2-1">阶段：<?= $cInfo['status']; ?>
                    <span class="fr">评论时间: <?= date('Y-m-d H:i:s', $cInfo['created_at']); ?></span>
                    <!--<img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/message_new.gif" class="fr" style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;">-->
                </li>
                <li class="mass-2-2"><?= $cInfo['content']; ?></li>
            </ul>
        </li>
        <?php $i++; } ?>
    </ul>
</div>
<script>
$(function(){
    var MFoot_lasturl = window.location.href;
    var MFoot_fromurl = document.referrer;
    $('#MCeng_lasturl_1').val(MFoot_lasturl);
    $('#MFoot_lasturl').val(MFoot_lasturl);
    $('#MCeng_fromurl_1').val(MFoot_fromurl);
    $('#MFoot_fromurl').val(MFoot_fromurl);
});
</script>
<script>var is_login = "unlogin";</script>
