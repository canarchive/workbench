<?php
$this->params['noBanner'] = true;
?>
<section class="mflow" style="margin-top:4rem">
    <p>拍照流程</p>
    <ul>
        <li class="oBox" style="margin-right: 1.2rem">
            <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/appointment.png" alt=""/>
            <div class="mflow_text">
                <p class="mflow_title">step 1</p>
                <p>线上/电话预约</p>
            </div>

        </li>
        <li class="gBox">
            <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/commit.png" alt=""/>
            <div class="mflow_text">
                <p class="mflow_title">step 2</p>
                <p>沟通方案</p>
            </div>

        </li>
        <li class="bBox" style="margin-right: 1.2rem">
            <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/insert.png" alt=""/>
            <div class="mflow_text">
                <p class="mflow_title">step 3</p>
                <p>执行方案</p>
            </div>

        </li>
        <li class="lBox">
            <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/payment.png" alt=""/>
            <div class="mflow_text">
                <p class="mflow_title">step 4</p>
                <p>结款交付</p>
            </div>
        </li>
    </ul>

</section>
