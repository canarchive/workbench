<?php

use gallerycms\components\LinkPager;
$this->params['currentNav'] = 'realcase';
?>
<!--imgs begin-->
<!--图片查看器-->
<style>.iframShow{ border: 4px solid #fff; height: 400px; left: 50%; margin: -204px auto 20px -214px; position: fixed; top: 50%; width: 420px; z-index: 9999; }</style>
<div class="fifth picture">
    <div class="pic_title clearfix">
        <ul class="clearfix tab_ul">
            <li class='a_red'>
                <a rel="nofollow" href="javascript:void(0);"><?= $info['name'] . '-实景案例'; ?></a></li>
            <!--<li class="gray_line ">
                <a href="/"></a></li>
            <li class="gray_line ">
                <a href="/"></a></li>-->
        </ul>
    </div>
    <div id="gallery" class="vadio">
        <div class="tab_ul_imgs">
            <ul class="clearfix">
                <?php $i = 0; foreach ($realcaseInfos['infos'] as $info) { ?>
                <li <?php if ($i % 4 == 3) { echo ' class="current9"'; } ?>>
                    <a href="<?= $info['id']; ?>">
                        <img src="<?= $info['thumb']; ?>" width="170" height="128" alt="<?= $info['name']; ?>" title="<?= $info['name']; ?>" /></a>
                        <div class="black_bd" title="<?= $info['name']; ?>" style="cursor:pointer"><?= $info['name']; ?></div>
                </li>
                <?php $i++; } ?>
            </ul>
            <div class="black2">
            <?= LinkPager::widget(['pagination' => $realcaseInfos['pages'], 'activePageCssClass' => 'current']); ?>
            </div>
            <script>function show_all_img(id, album_id, imgSrc) {
                    $("#box").show();
                    $("#iframShow").show();

                    document.getElementById("showAlbumImgs").innerHTML = '<div class="iframShow"><iframe border="0" id="content" src="http://www.jmw.com.cn/showAllImg.php?pid=137829&id=' + id + '&imgSrc=' + imgSrc + '&album_id=' + album_id + '" frameborder="0" height="100%" width="100%" scrolling="no"></iframe></div>';
                    //document.write('<div class="iframShow"><iframe border="0" id="content" src="http://www.phptest.com/demo.html" frameborder="0" height="100%" width="100%" scrolling="no"></iframe></div>');              
                }</script>
            <!--imgs end--></div>
    </div>
</div>
