<?php
$picDatas = [
    '64919-4943.png',
    'e0079-1819.png',
    '42d62-6138.jpg',
];
?>
<div class='allSeek wrap_mar'>
    <div class='seekHead clear'>
        <!--<div class='seekHeadR fr'>
            <ul class="yd_m42 fr">
                <li class="fl li1"></li>
                <div id="bOdemo" class="qimo8 fl">
                    <div class="qimo fl">
                        <div id="bOdemo1">
                            <ul>
                                <ul class="gundong_bar sel_lt" id="cjbb">
                                    <li>
                                        <a href="">
                                            <span style="color: rgb(255,0,0)"></span></a></li>
                                    <li>
                                </ul>
                            </ul>
                        </div>
                        <div id="bOdemo2"></div>
                    </div>
                </div>
            </ul>
        </div>-->
        <div class='seekHeadL fl'>
            <a style="color:#000;" href="/<?= $this->context->currentCityCode; ?>/quote/" title="<?= $this->context->currentCityName; ?>家装报价"><?= $this->context->currentCityName; ?>家装报价</a>
        </div>
    </div>
    <div class='seekContent'>
        <ul>
            <?php $i = 0; foreach ($infos as $qKey => $info) { if ($qKey == 'lastest') { continue; } ?>
            <li>
                <div class='seekContentTop'>
                    <div class='seekContentTopL fl seekContentTopRed '>
                        <a href='/<?= $this->context->currentCityCode; ?>/quote/' class='seekContentTopBl' title="<?= $info['name']; ?>"><?= $info['name']; ?></a></div>
                </div>
                <?php $sInfos = $info['infos']; $fInfo = array_pop($sInfos); ?>
                <div class='seekMiAndBo'>
                    <div class='seekContentMiddle clear'>
                        <div class='seekContentMiddleL fl '>
                            <div>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/<?= $picDatas[$i]; ?>" alt="<?= $fInfo['name']; ?>">
                            </div>
                        </div>
                        <div class='seekContentMiddleR fl'>
                        <a href="/<?= $this->context->currentCityCode . '/quoteshow_' . $fInfo['id'] . '.html'; ?>" title="<?= $fInfo['name']; ?>" class='oneLine'><?= $fInfo['name']; ?></a>
                            <p class='twoLine'><?= $fInfo['name']; ?></p>
                        </div>
                    </div>
                    <div class='seekContentBottom'>
                        <ul>
                            <?php foreach ($sInfos as $info) { ?>
                            <li>
                                <span>1662人查看</span>
                                <a href="/<?= $this->context->currentCityCode . '/quoteshow_' . $fInfo['id'] . '.html'; ?>" title="<?= $fInfo['name']; ?>"><?= $fInfo['name']; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <?php $i++; } ?>
            <li style='margin-right:0px'>
                <div class='seekContentTop'>
                    <div class='seekContentTopR fl'>
                        <a href="/<?= $this->context->currentCityCode; ?>/quote/" title="<?= $this->context->currentCityName; ?>装修报价">最新报价信息</a>
                    </div>
                </div>
                <div class='seekMiAndBo seekContentZhao' style="display:none">
                    <div class='seekContentZhaoBox' id='seekContentZhaoBox'>
                        <div id='seekContentZhaoBoxzdemo1'>
                            <?php foreach ($infos['lastest']['infos'] as $info) { ?>
                            <div class='seekContentMiddle  seekContentZhaoMS clear'>
                                <?= date('Y-m-d H:i:s', $info['created_at']); ?><span><?= $info['name']; ?></span>获取了报价信息
                                [<a href='<?= '/' . $this->context->currentCityCode . '/quoteshow_' . $info['id'] . '.html'; ?>' target='_blank'>详情</a>]
                            </div>
                            <?php } ?>
                        </div>
                        <div id='seekContentZhaoBoxzdemo2'></div>
                    </div>
                </div>
                <div class='seekMiAndBo seekContentZhao' style='display:'>
                    <div class='seekContentZhaoBoxOne' id='seekContentZhaoBoxOne'>
                        <div id='seekContentZhaoBoxzdemoOne'>
                            <?php foreach ($infos['lastest']['infos'] as $info) { ?>
                            <div class='seekContentMiddle  seekContentZhaoMS clear'>
                                <?= date('Y-m-d H:i:s', $info['created_at']); ?><span><?= $info['name']; ?></span>获取了报价信息
                                [<a href='<?= '/' . $this->context->currentCityCode . '/quoteshow_' . $info['id'] . '.html'; ?>' target='_blank'>详情</a>]
                            </div>
                            <?php } ?>
                        <div id='seekContentZhaoBoxzdemoTwo'></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
