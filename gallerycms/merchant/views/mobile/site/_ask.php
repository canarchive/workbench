<?php
$aInfos = $this->context->mDatas['askInfos'];
?>
<!-- 创业问答 start-->
<section class="ziXun">
    <div class="wen_p wrap clear">
        <h2 class="fl" style="border-bottom:none;">
            <a href="javascript: void(0);" style="font-size: 16px;color:#e44b46;" rel="nofollow">相关装修问答</a>
        </h2>
        <!--<a href="/ask/" title="更多装修问答" class="fr">更多装修问答</a>-->
    </div>
    <ul class="wrap answer" style="padding-bottom:7px;">
        <?php $i = 1; foreach ($aInfos as $aInfo) { if ($i > 10) { break; } ?>
        <li class="clearfix li1" style="height:48px;line-height:48px;">
            <a style="color:#333;" href="javascript:void(0);" rel="nofollow"><?= $aInfo['name']; ?></a>
            <span class="fr"><?= date('Y-m-d', $aInfo['created_at']); ?></span></li>
        <?php $i++; } ?>
</section>
<!-- 创业问答 end-->
