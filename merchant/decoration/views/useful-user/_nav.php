<?php
use yii\helpers\Url;

?>
<aside class="sidebar">
    <ul class="side-list">
	    <li <?php if ($curAction == 'index') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/useful-user/index']); ?>">有效信息</a>
        </li>
    </ul>
</aside>
