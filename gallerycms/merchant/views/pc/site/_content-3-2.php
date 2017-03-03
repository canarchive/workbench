<?php
$info = $this->context->mDatas['info'];
$rInfos = $this->context->mDatas['realcaseInfos'];
$baseUrl = Yii::getAlias('@gallerycmsurl');
?>
<div class="third">
    <div class="first_title clearfix">
        <h4 class="gai" style="padding-top: 12px;"><?= $info['name_full'] . '实景案例'; ?>(<?= $info['num_realcase']; ?>)</h4>
        <ul class="clearfix">
            <li>
                <a href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}/working/"; ?>" title="<?= $info['name'] . '工地'; ?>">直播工地(<?= $info['num_working']; ?></a></li>
            <li>
                <a href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}/designer/"; ?>" title="<?= $info['name'] . '设计师'; ?>">设计师(<?= $info['num_designer']; ?></a></li>
        </ul>
        <a href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}/realcase/"; ?>" title="<?= $info['name'] . '实景案例'; ?>"><u>查看更多</u>&gt;&gt;</a>
    </div>
    <div class="pic_detail clearfix">
        <?php $rInfo = array_pop($rInfos); ?>
        <a class="sideL" href="<?= "{$baseUrl}/{$info['city_code']}/realcaseshow_{$rInfo['id']}.html"; ?>">
            <img src="<?= $rInfo['thumb']; ?>" width="360" height="276" alt="" />
            <span class="big_white" title="<?= $rInfo['name']; ?>"></span>
        </a>
        <div class="sideR clearfix">
            <?php $i = 0; foreach ($rInfos as $rInfo) { if ($i > 3) { break; } ?>
            <a href="<?= "{$baseUrl}/{$info['city_code']}/realcaseshow_{$rInfo['id']}.html"; ?>">
                <img src="<?= $rInfo['thumb']; ?>" width="170" height="128" alt="" />
                <span class="small_white" title="<?= $rInfo['name']; ?>"></span>
            </a>
            <?php $i++; } ?>
        </div>
    </div>
    <style>.iframShow{ height: 388px; left: 50%; margin: -199px auto 0px -209px; position: fixed; top: 50%; width: 417px; z-index: 9999; }</style>
    <script>function show_all_img(id, album_id, pid, imgSrc) {
            $("#box").show();
            $("#iframShow").show();
            document.getElementById("showAlbumImgs").innerHTML = "<div class='iframShow'><iframe border='0' id='content' src='http://www.jmw.com.cn/showAllImg.php?pid=" + pid + "&id=" + id + "&imgSrc=" + imgSrc + "&album_id=all' frameborder='0' height='100%' width='100%' scrolling='no'></iframe></div>";

            //document.write('<div class="iframShow"><iframe border="0" id="content" src="http://www.phptest.com/demo.html" frameborder="0" height="100%" width="100%" scrolling="no"></iframe></div>');              
        }</script>
</div>
<!--图库结束-->
