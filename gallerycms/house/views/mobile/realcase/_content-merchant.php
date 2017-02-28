<div id="thumbs">
    <section class="picture_sect">
        <?php $i = 0; foreach ($infos['infos'] as $info) { ?>
        <?php if ($i % 3 == 0) { echo '<ul class="clear">'; } ?>
            <li>
                <a ref="nofollow" href="<?= $info['thumb']; ?>"><img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>" /></a>
            </li>
        <?php if ($i % 3 == 2) { echo '</ul>'; } ?>
        <?php $i++; } ?>
        <?php if ($i % 3 != 2) { echo '</ul>'; } ?>
    </section>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/touchtouch.jquery.js"></script>
<script>$(function() {
        $('#thumbs a').touchTouch();
    });</script>
<!-- 图库 end-->
