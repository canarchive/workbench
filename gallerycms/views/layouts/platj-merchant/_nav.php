<?php
$info = $this->context->mDatas['info'];
?>
<script>var is_login = "unlogin";</script>
<div class="nav wrapper clearfix">
    <ul class="nav_left fl clearfix">
        <li>
            <a target="_blank" href="<?= $info['infoUrl']; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?>首页</a></li>
        <li>
            <a target="_blank" href="<?= $info['infoUrl'] . 'show.html'; ?>" title="<?= $info['name']; ?>介绍"><?= $info['name']; ?>介绍</a></li>
        <li>
            <a target="_blank" href="<?= "/{$info['city_code']}/{$info['code']}/realcase/"; ?>" title="<?= $info['name']; ?>实景案例"><?= $info['name']; ?>实景案例</a></li>
        <li>
            <a target="_blank" href="<?= "/{$info['city_code']}/{$info['code']}/working/"; ?>" title="<?= $info['name']; ?>工地"><?= $info['name']; ?>工地</a></li>
        <li>
            <a target="_blank" href="<?= "/{$info['city_code']}/{$info['code']}/designer/"; ?>" title="<?= $info['name']; ?>设计师"><?= $info['name']; ?>设计师</a></li>
        <li>
            <a target="_blank" href="<?= "/{$info['city_code']}/{$info['code']}/comment/"; ?>" title="<?= $info['name']; ?>业主点评"><?= $info['name']; ?>业主点评</a></li>
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
