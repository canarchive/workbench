<?php
use yii\helpers\Url;
?>
        <?php if ($this->context->isMobile) { ?>
        <a rel="nofollow" href="mqqwpa://im/chat?chat_type=wpa&uin=<?= Yii::$app->params['siteQQ']; ?>&version=1&src_type=web&web_src=weinaya.com" target="_blank" class="button radius small" title="咨询">咨询</a>
        <?php } else { ?>
        <a rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" target="_blank" class="button radius small" title="咨询客服">咨询</a>
        <?php } ?>
        <a rel="nofollow" href="<?= Url::to(['/site/signin']); ?>" class="button success radius small" title="登陆">登陆</a>
