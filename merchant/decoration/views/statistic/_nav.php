<?php
use yii\helpers\Url;

?>
<aside class="sidebar">
    <ul class="side-list">
	    <li <?php if ($type == 'total') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/statistic/index', 'type' => 'total']); ?>">汇总</a>
        </li>
	    <li <?php if ($type == 'index') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/statistic/index', 'type' => 'day']); ?>">日报</a>
        </li>
	    <!--<li <?php if ($type == 'channel') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/statistic/index', 'type' => 'channel']); ?>">渠道报表</a>
        </li>
	    <li <?php if ($type == 'channelday') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/statistic/index', 'type' => 'channelday']); ?>">渠道日报</a>
        </li>-->
    </ul>
</aside>
