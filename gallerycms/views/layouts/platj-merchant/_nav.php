<?php
$info = $this->context->mDatas['info'];
$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
$baseUrl = Yii::getAlias('@gallerycmsurl');
?>
<script>var is_login = "unlogin";</script>
<div class="nav wrapper clearfix">
    <ul class="nav_left fl clearfix">
        <li>
            <a <?php if ($currentNav == 'index') { echo 'class="current2"'; } ?> href="<?= $info['infoUrl']; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?>首页</a></li>
        <li>
            <a <?php if ($currentNav == 'desc') { echo 'class="current2"'; } ?> href="<?= "{$baseUrl}/{$info['city_code']}/showsj_{$info['code']}.html"; ?>" title="<?= $info['name']; ?>介绍"><?= $info['name']; ?>介绍</a></li>
        <li>
            <a <?php if ($currentNav == 'realcase') { echo 'class="current2"'; } ?> href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}_realcase/"; ?>" title="<?= $info['name']; ?>实景案例"><?= $info['name']; ?>实景案例</a></li>
        <li>
            <a <?php if ($currentNav == 'working') { echo 'class="current2"'; } ?> href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}_working/"; ?>" title="<?= $info['name']; ?>工地"><?= $info['name']; ?>工地</a></li>
        <li>
            <a <?php if ($currentNav == 'designer') { echo 'class="current2"'; } ?> href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}_designer/"; ?>" title="<?= $info['name']; ?>设计师"><?= $info['name']; ?>设计师</a></li>
        <li>
            <a <?php if ($currentNav == 'comment') { echo 'class="current2"'; } ?> href="<?= "{$baseUrl}/{$info['city_code']}/{$info['code']}_comment/"; ?>" title="<?= $info['name']; ?>业主点评"><?= $info['name']; ?>业主点评</a></li>
        <script type="text/javascript">jQuery(document).ready(function() {
                $.ajax({
                    type: "get",
                    async: false,
                    url: "http://protectedapi.jmw.com.cn/service/getProjectService.php?pid=137829&sid=29",
                    dataType: "jsonp",
                    jsonp: "callback",
                    jsonpCallback: "flightHandler",
                    success: function(json) {
                        if (json.sid == true) {
                            $("#project_poster").show();
                        }
                    },
                });
            });</script>
    </ul>
    <!--<ul class="nav_right fr clearfix">
        <li><a href="" title=""></a></li>
        <li><span></span></li>
        <li><a href="" title=""></a></li>
    </ul>-->
</div>
