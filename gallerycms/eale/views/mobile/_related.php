
<div class="articles_yq read">
    <h3>相关阅读</h3>
    <?php $i = 1; foreach ($infos as $info) { if ($i > 6) { break; } ?>
    <div class="list-group">
        <div class="pull-left col-xs-4 col-sm-4 col-nopadding list-group-item-img">
            <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>" class="img-responsive"></div>
        <div class="col-xs-8 col-sm-8 col-nopadding list-group-item-caption">
            <h5>
                <a href="<?= "/{$infoType}/{$info['id']}.html"; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?><br/><span><?= $info['title']; ?></span></a>
            </h5>
        </div>
    </div>
    <?php } ?>
</div>
