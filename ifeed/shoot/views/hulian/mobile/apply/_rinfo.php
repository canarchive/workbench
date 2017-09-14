<?php foreach ($datas as $info) { ?>
    <div class="biaodan">
        <a href="<?= $this->context->getShowUrl($info['id']); ?>" title="<?= $info['name']; ?>">
            <div class="tupian">
                <img src="<?= $info->resizePic('thumb', 280, 440); ?>" alt="<?= $info['name']; ?>" /></div>
            <div class="tupiantitle"><?= $info['name']; ?></div>
        </a>
    </div>
<?php } ?>
