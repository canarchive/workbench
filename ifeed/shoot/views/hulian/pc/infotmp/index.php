<?php
//$this->params['showBanner'] = true;
$cInfos = $this->context->categoryModel->getSubDatas('');
?>
<div class="hengqie">
    
    <?php foreach ($cInfos as $cCode => $info) { ?>
    <div class="Vkuai5 tal">
        <div class="ct6 ert">
            <div class="ertcon">
            <h1 class="p2"><a href='/<?= $cCode; ?>/' title="<?= $info['name']; ?>"><?= $info['name']; ?></a></h1>
            </div>
        </div>
        <ul>
            <?php foreach ($info->getListtmpInfos(4) as $id => $info) { ?>
            <li>
                <a href="<?= "/ishow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
                    <div class="viimgg fl pre">
                        <i class="xj"></i>
                        <img src="<?= $info->resizePic('thumb', 293, 450); ?>" data-cache="true"/></div>
                    <div class="fl Vkuai5con">
                        <p class="fs18 pt20"><?= $info['name']; ?></p>
                        <!--<p class="fs12">Time:2017.04.05</p>-->
                        <p class="fs12 pt10"><?= $info['description']; ?></p></div>
                    <div class="clh"></div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
    <div class="type_List">
        <?php foreach ($cInfos as $cCode => $info) { ?>
        <a href="/<?= $info['code']; ?>/" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>|
        <?php } ?>
    </div>
    <div class="blk20"></div>
</div>
