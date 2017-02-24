<?php
$navDatas = $this->context->navDatas;
$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<!-- 导航 -->
<div id="nav_select">
    <div class="zong_nav_bg">
        <ul class="wrap_mar zong_nav clear" style="overflow:visible;">
            <?php foreach (['index', 'merchant', 'sample', 'ask', 'quote'] as $nav) { ?>
            <li class="li1" <?php if ($nav == $currentNav) { echo 'style="width: 100px; background: #c80202;"'; } ?>><a href="<?= $navDatas[$nav]['url']; ?>" style="padding-left:16px;"><?= $navDatas[$nav]['name']; ?></a></li>
            <?php } ?>
            <div class="moreUl dis_n pa">
                <ul class="clear"></ul>
            </div>
            <style>.shuJu_p{margin-right:8px;} .shuJu_p a{ font-size:14px; color:#fff; margin-left:6px; } .shuJu_p a:hover{ text-decoration:underline; }</style></ul>
    </div>
</div>
