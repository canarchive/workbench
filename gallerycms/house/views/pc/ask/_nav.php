<?php
$subInfos = $parentCode == '' ? $levelInfos[$code]['subInfos'] : $levelInfos[$parentCode]['subInfos'];
?>
<div class="mod_tab ask_classtab">
    <div class="mod_tab_hd">
        <ul class="clear">
            <?php foreach ($levelInfos as $pCode => $pInfo) { ?>
            <li <?php if ($pCode == $code || $parentCode == $pCode) { echo 'class="on"'; } ?>>
            <a href="<?= "/ask/lm_{$pCode}/"; ?>"><?= $pInfo['name']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="mod_tab_bd">
        <div class="mod_tab_bditem">
            <?php foreach ($subInfos as $sCode => $sortInfo) { ?>
            <a href="<?= "/ask/lm_{$sCode}/"; ?>" class="class_lnk <?php if ($sCode == $code) { echo 'class_lnk_on'; } ?>"><?= $sortInfo['name']; ?></a>
            <?php } ?>
        </div>
    </div>
</div>
<!--<div class="mod_sort">
    <ul class="sort_type">
        <li>
            <a href="more.php?btype=2&amp;stype=2&amp;id=5&amp;npaixu=1" rel="nofollow">按回答数排序
                <i class="ico_sort_downoff"></i></a>
        </li>
        <li class="on">
            <a href="more.php?btype=2&amp;stype=2&amp;id=5&amp;tpaixu=2" rel="nofollow">按时间排序
                <i class="ico_sort_downon"></i></a>
        </li>
    </ul>
    <div class="sort_state">
        <a href="javascript:;" rel="nofollow" class="state_on">全部
            <i class="triangle_down"></i></a>
        <ul class="state_list">
            <li>
                <a href="more-h2s2i5" rel="nofollow">全部</a></li>
            <li>
                <a href="more-h2s2i7" rel="nofollow">已解决</a></li>
            <li>
                <a href="more-2s2i3" rel="nofollow">待解决</a></li>
            <li>
                <a href="more-h2s2i6" rel="nofollow">已关闭</a></li>
        </ul>
    </div>
</div>-->
