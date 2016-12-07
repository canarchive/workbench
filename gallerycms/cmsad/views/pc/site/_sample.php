<?php 
use yii\helpers\Url;
?>
<div class="new-case">
    <div class="new-case-con">
        <h2>成功案例</h2>
        <p>案例展现实力</p>
        <div class="case-con">
            <a class="slid_prev"></a>
            <a class="slid_next"></a>
            <div class="slid">
                <ul class="clearfix">
                    <?php foreach ($infos as $info) { ?>
                    <li>
                        <a href="<?= Url::to(['/cmsad/sample/show', 'id' => $info['id']]); ?>" >
                            <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                            <div class="water-name">
                                <span class="name-l"></span>
                                <!--<span class="name-m">NEW Z+</span>
                                <span class="name-r"></span>-->
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
