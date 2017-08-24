<input type="hidden" id="currentMenu" value="index">
<input type="hidden" id="currentMenu3" value="">
<script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/r2.js"></script>
<script type="text/javascript">NProgress.start();</script>
<script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/statistics.js"></script>
<!--<script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/growingio-portal.js"></script>-->
<script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/common.v2.js"></script>
<script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/floatservice.js"></script>
<link rel="stylesheet" href="http://42.96.194.225/filesys/spider/pages/asset/merchant/css/c8328-4059.css">
<script type="text/javascript" src="http://42.96.194.225/filesys/spider/pages/asset/merchant/js/video.js"></script>
<script type="text/javascript">$(function() {
        //小易视频控制
        /*var myPlayer = videojs("my-video");
$(".ind-video-play").click(function(e){
  e.preventDefault();
  $(".ydh-video").show();
  myPlayer.play();
});
$("#video-cancel").click(function(e){
  e.preventDefault();
  $(".ydh-video").hide();
  myPlayer.pause();
});*/
        // 焦点图视频控制
        var nowNum = null;
        var Bovideo = $('.ydh-head-video-content', '.ydh-head-video');
        var jsonVideo = {};
        for (var i = 0; i < Bovideo.length; i++) {
            jsonVideo[i] = videojs("head-video" + i);
        }
        var Hvideo = $('.header-video-btn', '.index-header-banner')
        //首页视频
        Hvideo.on('click',
        function(e) {
            e = e || window.event;
            e.preventDefault(); //阻止A链接
            var $this = $(this).parents("li").find(".header-video-fake");
            var num = $this.data('num');
            nowNum = num;
            $('.ydh-head-video').show();
            Bovideo.eq(num).show();
            jsonVideo[num].play();

        });
        $('.ydh-head-video').on('click',
        function(e) {
            e = e || window.event;
            if (e.target == e.currentTarget) {
                $('.ydh-head-video').hide();
                Bovideo.hide();
                jsonVideo[nowNum].pause();
            }
        });
    });</script>
