<?php
$info = $this->context->mDatas['info'];
?>
<div class="jiameng_change">
    <div class="word">
        <p>
            <span style="color: rgb(0, 0, 0);">
                <span style="font-size: 14px;">
                    <span style="font-family: 宋体;">&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="<?= $info['infoUrl']; ?>" style="color:#666;" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>简介
            </span></span>
            </span>
        </p>
        <p>
            <span style="color: rgb(0, 0, 0);">
                <span style="font-size: 14px;">
                <span style="font-family: 宋体;"><?= $info['description']; ?></span></span>
            </span>
            <br>&nbsp;</p>
    </div>
</div>
