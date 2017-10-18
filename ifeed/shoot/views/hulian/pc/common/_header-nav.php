<?php
$navDatas = $this->context->navDatas;
?>
<div class="topnav">
    <div class="top_menu fs16 ct1 cl">
        <ul class="cl">
            <?php foreach ($navDatas as $nav => $data) { ?>
            <li>
                <a <?php if ($nav == $this->context->currentElem) { echo 'class="active"'; } ?> href="<?= $data['url']; ?>" <?php if (in_array($nav, ['index', 'contactus', 'aboutus', 'flow', 'guarantee'])) { echo 'rel="nofollow"'; } else { echo 'title="' . $data['name'] . '"'; } ?>><?= $data['name']; ?></a>
                <?php if (isset($data['subDatas'])) { $subStr = '<div class="c">';foreach ($data['subDatas'] as $subNav => $sData) { $isCurrent = $subNav == $this->context->currentSubElem ? 'class="active"' : ''; $subStr .= "<a href='{$sData['url']}' {$isCurrent} title='{$sData['name']}'>{$sData['name']}</a>"; } $subStr .= '</div>'; echo $subStr; } ?>
            </li>
            <?php } ?>
			<li class="last_li"><a rel="nofollow" href="<?= $this->context->serviceUrl; ?>" target="_blank" >预约拍摄</a></li>
        </ul>
        <p class="hot_phone"><span>咨询电话：</span><?= Yii::$app->params['siteHotline']; ?></p>
    </div>
</div>
