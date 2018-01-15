<div class="articles_yq read">
    <h3>相关阅读</h3>
    <?php $i = 1; foreach ($infos as $info) { if ($i > 6) { break; } ?>
    <div class="col-md-4 col-sm-4 col-xs-6 list-group col">
        <div class="btn03">
            <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>" class="img-responsive">
            <div class="ovrly"></div>
            <div class="readzi">
                <h4>
                <a href="<?= "/{$infoType}/{$info['id']}.html"; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a></h4>
                <h5>
                <a href="<?= "/{$infoType}/{$info['id']}.html"; ?>" title="<?= $info['title']; ?>"><?= $info['title']; ?></a></h5>
            </div>
        </div>
    </div>
    <?php $i++; } ?>
</div>
