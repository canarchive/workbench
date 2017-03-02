<?php
$subInfos = $parentCode == '' ? $levelInfos[$code]['subInfos'] : $levelInfos[$parentCode]['subInfos'];
?>
<ul id="menu">
    <li>
        <span class="current-condition"><?php $pName = empty($pInfo) ? $cInfo['name'] : $pInfo['name']; echo $pName; ?></span>
        <i class="icon-arrow"></i>
        <div id="subMenuType" class="submenu">
            <ul class="clearfix ">
                <?php foreach ($levelInfos as $pCode => $pInfo) { ?>
                <li <?php if ($pCode == $code || $parentCode == $pCode) { echo 'class="active"'; } ?>>
                    <a href="<?= "/ask_lm_{$pCode}/"; ?>"><?= $pInfo['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </li>
    <li>
        <span class="current-condition"><?php $cName = $cInfo['parent_code'] != '' ? $cInfo['name'] : '全部'; echo $cName; ?></span>
        <i class="icon-arrow"></i>
        <div id="subMenuArea" class="submenu">
            <ul class="clearfix submenu-type-ul">
                <li>
                    <a href="/ask/more-h2i5">全部</a></li>
                <li>
                <?php foreach ($subInfos as $sCode => $sortInfo) { ?>
                <li  class="<?php if ($sCode == $code) { echo 'active'; } ?>"><a href="<?= "/ask_lm_{$sCode}/"; ?>"><?= $sortInfo['name']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </li>
</ul>
