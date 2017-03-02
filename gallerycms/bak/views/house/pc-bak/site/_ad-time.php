        <div class="keLan">
        <a style="position:relative;display:block;width:1200px;height:80px;border:none;text-decoration:none;_text-decoration:none;" target="_blank" href="http://zch.jmw.com.cn/">
        <span style="position:absolute;_position:absolute;top:22px;right:201px;_top:22px;_right:210px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00;font-size:14px;" id="time_d" type="text">101</span>
        <span style="position:absolute;_position:absolute;top:22px;right:155px;_top:22px;_right:172px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00;font-size:14px;" id="time_h" type="text">00</span>
        <span style="position:absolute;_position:absolute;top:22px;right:110px;_top:22px;_right:130px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00;font-size:14px;" id="time_m" type="text">46</span>
        <span style="position:absolute;_position:absolute;top:22px;right:62px;_top:22px;_right:90px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00;font-size:14px;" id="time_s" type="text">18</span>   
        <img style="width:1200px;height:80px;border:none;" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/bfd87-2174.jpg"></a>
        </div>
        <style>
        span[type='text']{height: 28px; margin: 5px 0;padding: 5px;width: 30px;background-color: transparent;_background-color: transparent;}
        </style>
        <script>
        jQuery(function(){ 
        show_time();
        }); 
        function show_time(){ 
        var time_start = new Date().getTime(); //设定当前时间
        var time_end =  new Date("2016/12/17 00:00:00").getTime(); //设定目标时间
        // 计算时间差 
        var time_distance = time_end - time_start; 
        // 天
        var int_day = Math.floor(time_distance/86400000);
        time_distance -= int_day * 86400000; 
        // 时
        var int_hour = Math.floor(time_distance/3600000);
        time_distance -= int_hour * 3600000; 
        // 分
        var int_minute = Math.floor(time_distance/60000);
        time_distance -= int_minute * 60000; 
        // 秒 
        var int_second = Math.floor(time_distance/1000);
        // 时分秒为单数时、前面加零 
        if(int_day < 10){ 
        int_day = "0" + int_day; 
        } 
        if(int_hour < 10){ 
        int_hour = "0" + int_hour; 
        } 
        if(int_minute < 10){ 
        int_minute = "0" + int_minute; 
        } 
        if(int_second < 10){
        int_second = "0" + int_second; 
        } 
        // 显示时间 
        jQuery("#time_d").html(int_day); 
        jQuery("#time_h").html(int_hour); 
        jQuery("#time_m").html(int_minute); 
        jQuery("#time_s").html(int_second); 
        // 设置定时器
        setTimeout("show_time()",1000); 
        }
        </script>
        <!--第九届中国品牌加盟投资博览会 end-->
