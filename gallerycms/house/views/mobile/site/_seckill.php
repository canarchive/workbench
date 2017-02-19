<!--加盟播报动态 start-->
<div class="scrollUp">
<div class="scrollUp-left fl"></div>
<ul class="scrollUp-right fl">
<script>
var marqueeContent = new Array();
marqueeContent = null;
var marqueeInterval=new Array();  //定义一些常用而且要经常用到的变量
var marqueeId=0;
var marqueeDelay=3000;
var marqueeHeight=50;
//接下来的是定义一些要使用到的函数
function initMarquee() {
var str=marqueeContent[0];
document.write('<div id=marqueeBox style="overflow:hidden;height:'+marqueeHeight+'px"><div>'+str+'</div></div>');
marqueeId++;
marqueeInterval[0]=setInterval("startMarquee()",marqueeDelay);
}
function startMarquee() {
var str=marqueeContent[marqueeId];
marqueeId++;
if(marqueeId>=marqueeContent.length) marqueeId=0;
if(marqueeBox.childNodes.length==1) {
var nextLine=document.createElement('UL');
nextLine.innerHTML=str;
marqueeBox.appendChild(nextLine);
}
else {
marqueeBox.childNodes[0].innerHTML=str;
marqueeBox.appendChild(marqueeBox.childNodes[0]);
marqueeBox.scrollTop=0;
}
clearInterval(marqueeInterval[1]);
marqueeInterval[1]=setInterval("scrollMarquee()",4);
}
function scrollMarquee() {
marqueeBox.scrollTop++;
if(marqueeBox.scrollTop%marqueeHeight==(marqueeHeight-1)){
clearInterval(marqueeInterval[1]);
}
}
initMarquee();
</script>
</ul>
</div>
<style>
.scrollUp{width: 96%;margin: 10px auto;padding: 11px 2%;background: #ffffff;overflow: hidden;}
.scrollUp-left{width: 48px;height: 52px;box-sizing: border-box; border-right: 1px solid #D4D4D4; background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/f1c6f-6198.png") no-repeat scroll 0.03rem 0.2rem; background-size: 83% 87%;}
.scrollUp-right{width: 81%;height: 100%;margin-left: 2%;}
@media screen and (max-width:320px) {.scrollUp-right{width: 79%;}}
.scrollUp-right li{height: 20px;width: 100%;overflow: hidden;line-height: 15px;margin-bottom: 4px;}
.most-new{display: block;margin-top:2px; float: left;height: 70%;line-height: 16px;font-size: 0.625rem;color: #E70000;border: 1px solid #E70000;padding: 0 1px;border-radius: 2px;}
.most-user{font-size: 0.625rem;margin-left: 4px;}
.most-user a{color: #E70000;}
</style>
<!------加盟播报 end------->
<!-- 加盟优惠秒杀 -->
<div class="limit_project clear"> 
<div class="left_project fl"> 
<a href="http://m.jmw.com.cn/buying.php" class="a1_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/56fee-9686.png" alt="" /></a>
<a href="http://m.jmw.com.cn/xm6649634/" class="a2_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/e790d-2893.png" alt="" /></a>
<span class="hour time"></span>
<span class="minute time"></span>
<span class="second time"></span></div>
<div class="right_progect fr"> 
<a href="http://m.jmw.com.cn/so/" class="a3_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/1654b-8729.png" alt="" /></a>
<div class="clear" style="margin-top:-1px;">
<a href="http://m.jmw.com.cn/so/" class="fl" style=" width:50%; border-right:1px solid #f2f2f2; box-sizing: border-box;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/29cd8-4788.png" alt="" /></a>
<a href="https://weidian.com/?userid=214234322" rel="nofollow" class="fr" style=" width:50%; border-right:1px solid #fff; box-sizing: border-box;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/02fb3-7483.jpg" alt="" /></a></div>
</div>
</div>
<script>
jQuery(function(){ 
show_time();
}); 
function show_time(){
var time_start = new Date().getTime(); //设定当前时间
var time_end =  new Date("2017/01/22 00:00:00").getTime(); //设定目标时间
// 计算时间差 
var time_distance = time_end - time_start; 
// 天
var int_day = Math.floor(time_distance/86400000) 
time_distance -= int_day * 86400000; 
// 时
var int_hour = Math.floor(time_distance/3600000) 
time_distance -= int_hour * 3600000; 
// 分
var int_minute = Math.floor(time_distance/60000) 
time_distance -= int_minute * 60000; 
// 秒 
var int_second = Math.floor(time_distance/1000) 
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
//jQuery("#time_d").html(int_day); 
jQuery(".hour").html(int_hour); 
jQuery(".minute").html(int_minute); 
jQuery(".second").html(int_second); 
// 设置定时器
setTimeout("show_time()",1000); 
}
</script>
<!--限时秒杀 stop-->
<!--限时秒杀 stop-->
<!--创业者 加盟商统计 start-->
<div class="statistical clear">
<div class="chuangyezhe fl">
<h3 onclick="publish_message('2','14','我想找创业项目，请帮我推荐几个好项目')">我是创业者</h3>
<ul>
<li class="tongji1">已有</li>
<li class="tongji2">4032572<span class="wei">位</span></li>
<li class="tongji1">创业者登记意向</li>
<li class="tongji1 tongji3"><a onclick="publish_message('2','14','我想找创业项目，请帮我推荐几个好项目')">找创业项目</a></li></ul>
<ul>
<li class="tongji1">总计</li>
<li class="tongji2">1779<span class="wei">人/次</span></li>
<li class="tongji1">享受加盟优惠</li>
<li class="tongji1 tongji3"><a onclick="publish_message('2','15','有优惠信息请及时告诉我')">找加盟优惠</a></li></ul>
</div>
<div class="chuangyezhe  jiamengshang">
<h3 onclick="zhaoshang_message('28','16','我想入驻中国加盟网，成为企业会员，展示产品，推广项目')">我是品牌商</h3>
<ul>
<li class="tongji1">已有</li>
<li class="tongji2">87709<span class="wei">家</span></li>
<li class="tongji1">通过资质审核</li>
<li class="tongji1 tongji3"><a onclick="zhaoshang_message('28','16','我想入驻中国加盟网，成为企业会员，展示产品，推广项目')">我要加入</a></li></ul>
<ul>
<li class="tongji1">共有</li>
<li class="tongji2">392226<span class="wei">条</span></li>
<li class="tongji1">资讯商机视频</li>
<li class="tongji1 tongji3"><a onclick="zhaoshang_message('28','17','我想发布资讯/商机/视频')">我要发布</a></li></ul>
</div>
<style>
.wei{font-size:0.7em;}
</style>
</div>
<!--创业者 加盟商统计 stop-->
