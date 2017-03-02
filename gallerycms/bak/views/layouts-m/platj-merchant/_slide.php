<?php
$info = $this->context->mDatas['info'];
$rInfos = $this->context->mDatas['realcaseInfos'];
?>
<div class="mui-slider">
    <div class="mui-slider-group mui-slider-loop">
        <!--支持循环，需要重复图片节点-->
        <div class="mui-slider-item mui-slider-item-duplicate"><img id="img_url" src="" /></div>
        <?php $i= 0; foreach ($rInfos as $rInfo) { if ($i > 5) { break; } ?>
        <div class="mui-slider-item"><img src="<?= $rInfo['thumb']; ?>" title="<?= $rInfo['name']; ?>" /></div>
        <?php $i++; } ?>
        <script>
           var img_url = "<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/d0559-9249.jpg";
           $('#img_url').attr('src',img_url);
        </script>
        <div class="mui-slider-item mui-slider-item-duplicate"><img src="<?= $rInfo['thumb']; ?>" /></div>
        <!--支持循环，需要重复图片节点-->
    </div>
    <div class="mui-slider-indicator">
        <?php $i = 0; foreach ($rInfos as $rInfo) { if ($i > 5) { break; } ?>
        <div class="mui-indicator <?php if ($i == 0) { echo 'mui-active'; } ?>"></div>
        <?php $i++; } ?>
    </div>
    <h1 style="position:absolute;bottom:22px;color:#fff;z-index:988;padding: 0 3%;"><?= $info['name']; ?></h1>
    <a href="<?= "/{$info['city_code']}/{$info['code']}/realcase/"; ?>" class="many_pic" title="<?= $info['name'] . '实景案例'; ?>"><span>共<?= $info['num_realcase']; ?>张</span></a>
</div>
<script>
//获得slider插件对象
var gallery = mui('.mui-slider');
gallery.slider({
    interval:3000//自动轮播周期，若为0则不自动播放，默认为0；
});
</script>
