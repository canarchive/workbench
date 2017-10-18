<?php foreach ($infos as $sort => $data) { ?>
<div class="bgttrz">
    <div class="hengqie">
        <div class="china">
            <div class="ct6 ert">
                <a href="<?= $this->context->getSortUrl($sort); ?>">
                    <div class="ertcon">
                        <h1 class="p2"><?= $data['name']; ?>作品</h1>
                        <span class="p1 fs18"><?= $data['brief']; ?></span>
                    </div>
                </a>
            </div>
            <div class="chinacon  mt10 tal lh15">
                <ul>
                    <?php foreach ($data['infos'] as $info) { ?>
                    <li>
                        <a href="<?= $this->context->getShowUrl($info['id']); ?>" title="<?= $info['name'] . '摄影图片'; ?>">
                            <div class="viimg pre">
                                <i class="xj"></i>
								<img src="<?= $info->resizePic('thumb', 293, 450); ?>" alt="<?= $info['name']; ?>摄影图片"/>
                            </div>
                            <p class="fs20 pt10 fB"><?= $info['name']; ?></p>
                            <p class="fs10"></p>
							<?php //echo '<p class="fs14">标签:' . $info['tag'] . '</p>-->'; ?></a>
                    </li>
                    <?php } ?>
                    <div class="clh"></div>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php } ?>
