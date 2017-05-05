<?php
use yii\helpers\Url;

?>
<aside class="sidebar">
    <ul class="side-list">
	    <li <?php if ($curAction == 'index') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/user/index']); ?>">业主列表</a>
        </li>
    </ul>
</aside>
