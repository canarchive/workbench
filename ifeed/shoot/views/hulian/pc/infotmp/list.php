<?php
//$this->params['showBanner'] = true;
use yii\widgets\LinkPager;
$subCatInfos = $this->context->categoryModel->getSubDatas($categoryCode);
$broCatInfos = $this->context->categoryModel->getSubDatas($categoryInfo['parent_code']);
?>
<div class="hengqie">
    <div class="Vkuai5 tal">
        <div class="ct6 ert">
            <div class="ertcon">
                <h1 class="p2"><a href='/<?= $categoryCode; ?>/' title="<?= $categoryInfo['name']; ?>"><?= $categoryInfo['name']; ?></a></h1>
            </div>
        </div>
        <div class="type_List">
        <?php foreach ($subCatInfos as $cCode => $cInfo) { ?>
        <a <?php if ($cCode == $categoryCode) { echo 'class="hover"'; } else { echo 'href="/' . $cCode . '/"'; } ?> title="<?= $cInfo['name']; ?>"><?= $cInfo['name']; ?></a>
        <?php } ?>
        </div>
        <ul>
            <?php foreach ($infos as $id => $info) { ?>
            <li>
                <a href="<?= "/ishow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
                    <div class="viimgg fl pre">
                        <i class="xj"></i>
                        <img src="../assets/img/47e59-9687.png" data-cache="true"/></div>
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
    <div class="mpage c">
    <?php $pageStr = LinkPager::widget(['pagination' => $pages, 'linkOptions' => ['rel' => 'nofollow']]); $pageStr = str_replace('cn/" rel="nofollow"', 'com/"', $pageStr); echo $pageStr;?>
    </div>
        <div class="type_List">
        <?php foreach ($broCatInfos as $cCode => $cInfo) { ?>
        <a <?php if ($cCode == $categoryCode) { echo 'class="hover"'; } else { echo 'href="/' . $cCode . '/"'; } ?> title="<?= $cInfo['name']; ?>"><?= $cInfo['name']; ?></a>
        <?php } ?>
        </div>
</div>
