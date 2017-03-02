<?php
$info = $this->context->mDatas['info'];
?>
<!-- 项目介绍 -->
<section class="introduce" style="line-height:20px">
    <p>
        <span style="color: rgb(0, 0, 0);">
            <span style=";">
                <span style="font-family: 宋体;">&nbsp;&nbsp;&nbsp;&nbsp;<?= $info['name_full']; ?>简介</span>
            </span>
        </span>
    </p>
    <p>
        <span style="color: rgb(0, 0, 0);">
            <span style=";">
                <span><?= $info['description']; ?></span>
            </span>
        </span>
    </p>
</section>
