<section style="width:100%; background:#fff; border-bottom:1px solid #E8EAEE;">
    <ul class="zaixianzixun-example wrap" id="listpage_all">
        <?php $i = 0; foreach ($infos as $info) { ?>
        <li>
            <dl class="mass-1 fl">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/79506-4799.jpg" alt=""></dt>
                <dt style="margin-bottom: 10px;"><?= $info['ownerInfo']['name']; ?></dt>
                <!--<dt>网页版</dt>-->
            </dl>
            <ul class="mass-2 fr">
                <i></i>
                <li class="mass-2-1">装修阶段： <?= $info['status']; ?> 评论时间: <?= date('Y年m月d日', $info['created_at']); ?>
                    <img style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/c91dc-9102.gif" class="fr" /></li>
                <li class="mass-2-2"><?= $info['content']; ?></li></ul>
        </li>
        <?php } ?>
    </ul>
    <p class="p_zhanKai show_content" onclick="show_more($(this));" style="font-size:0.8rem;color:#e44b46;text-align:center;cursor:pointer;height:22px; ">查看更多
        <i class="zK_i"></i></p>
    <input type="hidden" id="pagesize" value="2" /></div>
</section>
