<?php
$position = isset($position) ? $position : 'top';
$preInfo = $relatedInfos['preInfo'];
$preUrl = empty($preInfo) ? 'javascript: void(0)' : "/info/{$preInfo['id']}.html";
$preName = empty($preInfo) ? '' : $preInfo['name'];
$preThumb = empty($preInfo) ? '' : "<img src='" . $preInfo->resizePic('thumb', 104, 60) . "' class='img-responsive' />";
$nextInfo = $relatedInfos['nextInfo'];
$nextUrl = empty($nextInfo) ? 'javascript: void(0)' : "/info/{$nextInfo['id']}.html";
$nextName = empty($nextInfo) ? '' : $nextInfo['name'];
$nextThumb = empty($nextInfo) ? '' : "<img src='" . $nextInfo->resizePic('thumb', 104, 60) . "' class='img-responsive' />";
?>
<?php if ($position == 'top') { ?>
<div class="pre_next">
    <a title="<?= $preName; ?>" class="pre  " href="<?= $preUrl; ?>">上一组</a>
    <a title="<?= $nextName; ?>" class="next " href="<?= $nextUrl; ?>">下一组</a>
    <a class="return" href="javascript:void()" onclick="returnbk();">返回</a>
</div>
<?php } else if ($position == 'bottom') { ?>
<div id="pageplace">
    <div class="pre_next1" align="center">
        <a title="<?= $preName; ?>" class="pre  " href="<?= $preUrl; ?>"><?= $preName; ?></a>
        <a title="<?= $nextName; ?>" class="next " href="<?= $nextUrl; ?>"><?= $nextName; ?></a>
    </div>
</div>
<?php } ?>
