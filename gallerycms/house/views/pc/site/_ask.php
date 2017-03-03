<?php
$liClasses = [
    10 => '80',
    1 => '116',
    2 => '116',
    3 => '106',
];
?>
<div class="daQuan_JM clear">
    <ul class="hot_JM clear">
        <li class="fl li190  hotHover_li hot_JMTitle " style="text-align:left;    border-bottom: 2px solid #000;"><a href="/ask/" title="装修问答">装修问答</a></li>
        <li class="fl li_shuXian"></li>
        <?php $i = 1; foreach ($infos as $sort => $info) { if ($sort == 'lastest') { continue; } $liClass = isset($liClasses[$i]) ? $liClasses[$i] : '90';?>
        <li class="fl hotHover_li li<?= $liClass; ?>"><a href='/ask/lm-_?= $sort; ?>/'><?= $info['name']; ?></a></li>
        <?php if ($i < 10) { ?><li class="fl li_shuXian">|</li><?php } ?>
        <?php $i++; } ?>
    </ul>
    <!-- 正常显示的加盟品牌 -->
    <div class="Manycon_JM clear">
        <?php foreach ($infos as $sort => $info) { ?>
        <?php if ($sort == 'lastest') { ?><div class="many_jiaM dis_b clear"><?php } else { ?><div class="many_jiaM dis_n"><?php } ?>
        <div class="tit_con clear"><ul class="f14 clear"> 
        <?php foreach ($info['infos'] as $sInfo) { ?>
        <li class="fl"><a href="<?= "/askshow_{$sInfo['id']}.html"; ?>" class="fl" title="<?= $sInfo['name']; ?>"><?= $sInfo['name']; ?></a> <span class="fr f12"><?= $sInfo['num_answer']; ?>人回答</span></li>
        <?php } ?>
        </ul></div></div>
        <?php } ?>
    </div>
</div>
