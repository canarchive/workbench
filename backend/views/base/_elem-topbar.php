<?php
use yii\helpers\Url;

$roleName = isset($this->params['roleName']) ? $this->params['roleName'] : '操作员';
?>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
            <img alt="Charisma Logo" src="<?= Yii::getAlias('@asseturl/backend/'); ?>img/logo20.png" class="hidden-xs"/>
            <span>Charisma</span>
        </a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?= $roleName; ?></span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <!--<li><a href="">Profile</a></li>-->
                <li class="divider"></li>
                <li><a href="<?= Yii::getAlias('@backendurl') . Url::to(['/entrance/logout']); ?>">退出</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->

        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container animated tada">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-tint"></i><span
                    class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="themes">
                <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
            </ul>
        </div>
        <!-- theme selector ends -->

        <ul class="collapse navbar-collapse nav navbar-nav top-menu" id="baseMenu">
            <?php foreach ($this->params['menus'] as $menu) { if ($menu['parent_code'] == '') { ?>
            <li id="baseMenu_<?php echo $menu['code']; ?>"><a href="javascript: setLeftNav('<?php echo $menu['code']; ?>'); void(0);"><?php echo $menu['name']; ?></a></li>
            <?php } } ?>
        </ul>
    </div>
</div>
<!-- topbar ends -->
