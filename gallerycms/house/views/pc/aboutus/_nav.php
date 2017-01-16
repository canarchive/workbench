<?php
$leftNavs = $navs;
?>
<?php if (in_array($view, ['desc', 'culture', 'statement'])) { ?>
<div class="about_nav"></div>
<div class="about_sidebar sidebar_type1">
    <div class="about_sidebar_title" style="border:0;">
        <i class="circle_pic"></i>
        <h4>关于<?= Yii::$app->params['siteNameBase']; ?></h4>
        <span>ABOUTUS</span>
    </div>
    <ul>
        <?php foreach ($leftNavs as $leftNav => $leftName) { ?>
        <li <?php if ($leftNav == $view) { echo 'class="about_sidebar_cur"'; } ?>>
            <a href="/<?= $leftNav . '.html'; ?>"><?= $leftName; ?></a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } else { ?>
<div class="about_nav">
    <ul>
        <?php $i=0; foreach ($leftNavs as $leftNav => $leftName) { ?>
        <li class="<?php if ($i == 0) { echo 'notLine '; } if ($leftNav == $view) { echo 'about_nav_cur'; } ?>">
            <a href="/<?= $leftNav . '.html'; ?>"><?= $leftName; ?></a>
        </li>
        <?php $i++; } ?>
    </ul>
    <i class="bottom_shadow"></i>
</div>
<?php } ?>
