<!-- 广告+导航 -->
<div id="most-pai" style="height:auto;">
    <div class="ad-top">
        <style type="text/css">.daoJishi{ position:relative; } .time{ position:absolute; top:15px; font-size:14px;} .day{ right:205px; display:inline-block; width:26px; height:19px; line-height:19px; background:#fff; text-align:center; top:13px;} .hour{ right:163px; } .minute{ right:116px; } .second{ right:68px; }</style>
        <div class="daoJishi wrap_mar">
            <a href="/" title="" target="_blank">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/874f3-8658.jpg" alt="第十届展会预告加盟" /></a>
            <!--<span class="day time"></span>
            <span class="hour time"></span>
            <span class="minute time"></span>
            <span class="second time"></span>-->
        </div>
    </div>
    <script>//setInterval(show_time, 1000);
        function show_time() {
            var time_start = new Date().getTime(); //设定当前时间
            var time_end = new Date("2017/4/29 00:00:00").getTime(); //设定目标时间
            // 计算时间差 
            var time_distance = time_end - time_start;
            // 天
            var int_day = Math.floor(time_distance / 86400000); time_distance -= int_day * 86400000;
            // 时
            var int_hour = Math.floor(time_distance / 3600000); time_distance -= int_hour * 3600000;
            // 分
            var int_minute = Math.floor(time_distance / 60000); time_distance -= int_minute * 60000;
            // 秒 
            var int_second = Math.floor(time_distance / 1000);
            // 时分秒为单数时、前面加零 
            if (int_day < 10) {
                int_day = "0" + int_day;
            }
            if (int_hour < 10) {
                int_hour = "0" + int_hour;
            }
            if (int_minute < 10) {
                int_minute = "0" + int_minute;
            }
            if (int_second < 10) {
                int_second = "0" + int_second;
            }
            // 显示时间 
            jQuery(".day").html(int_day);
            jQuery(".hour").html(int_hour);
            jQuery(".minute").html(int_minute);
            jQuery(".second").html(int_second);
        }</script>
</div>
