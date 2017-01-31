<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['0e165-7624', 'd6112-7354', '683ed-3544'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('@gallerycms/views/platj/pc/_js', []);
?>
<!--head-->
<div class="topToolbar" id="testDiv"></div>
<input type="hidden" id="projectId" value="137829" />
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/js/loginstatus.js"></script>
<p class="clr"></p>
<!--行业列-->
<?= $this->render('@gallerycms/views/platj/pc/_toplist'); ?>
<!--广告图-->
<div class="advertis clearfix wrapper">
    <a title="阳光喔作文加盟" class="fl" ad_need_click="true" ad_id="432" href="http://search.jmw.com.cn/jmw_user/ygw/" target="_blank">
        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/19d11-1599.gif" width='714' height='60' /></a>
    <a title="福汽启腾加盟" class="fr" ad_need_click="true" ad_id="433" href="http://www.jmw.com.cn/xm6676136/" target="_blank">
        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/4e047-3593.gif" width='266' height='60' /></a>
</div>
<!--加盟网LOGO+搜索框-->
<?= $this->render('@gallerycms/views/platj/pc/_logo'); ?>
<!--导航-->
<?= $this->render('@gallerycms/views/platj/pc/_nav'); ?>
<!-----------PC公共短信验证 start-------------->
<?= $this->render('@gallerycms/views/platj/pc/_topvalid'); ?>
<!--面包屑-->
<?= $this->render('@gallerycms/views/platj/pc/_breadnav'); ?>
<!--brand information-->
<?= $this->render('@gallerycms/views/platj/pc/_brandinfo'); ?>
<!--在线咨询 屏幕中间 E-->
<?= $this->render('@gallerycms/views/platj/pc/_middlevalid'); ?>
<!--content-->
<div class="content wrapper clearfix">
    <div class="fl cont_left">
        <!--imgs begin-->
        <!--图片查看器-->
        <style>.iframShow{ border: 4px solid #fff; height: 400px; left: 50%; margin: -204px auto 20px -214px; position: fixed; top: 50%; width: 420px; z-index: 9999; }</style>
        <div class="fifth picture">
            <div class="pic_title clearfix">
                <ul class="clearfix tab_ul">
                    <li class='a_red'>
                        <a target="_blank" href="http://www.jmw.com.cn/xm137829/pinpaituku/">全部图片</a></li>
                    <li class="gray_line ">
                        <a target="_blank" href="http://www.jmw.com.cn/xm137829/dianmiantupian/">店面图片</a></li>
                    <li class="gray_line ">
                        <a target="_blank" href="http://www.jmw.com.cn/xm137829/chanpintupian/">产品图片</a></li>
                </ul>
            </div>
            <div id="gallery" class="vadio">
                <div class="tab_ul_imgs">
                    <ul class="clearfix">
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b0c59-2746.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   然采加   水性内墙底漆" title="晨阳水漆加盟 晨阳   然采加   水性内墙底漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   然采加   水性内墙底漆" style="cursor:pointer" onclick="show_all_img(648139,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F62151414562118.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/4634b-4708.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   然采丝   水性内墙漆" title="晨阳水漆加盟 晨阳   然采丝   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   然采丝   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648137,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F21371414562098.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/004c6-4388.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   然采丽   水性内墙漆" title="晨阳水漆加盟 晨阳   然采丽   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   然采丽   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648135,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F98971414562079.jpg')"></div>
                        </li>
                        <li class="current9">
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/29be4-6543.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   然采尼   水性内墙漆" title="晨阳水漆加盟 晨阳   然采尼   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   然采尼   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648133,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F31431414562057.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/d0559-9249.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳    然采贝   水性内墙漆" title="晨阳水漆加盟 晨阳    然采贝   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳    然采贝   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648131,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F13441414562038.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/7d5b7-1645.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳    天然净味抗碱底漆    水性内墙漆" title="晨阳水漆加盟 晨阳    天然净味抗碱底漆    水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳    天然净味抗碱底漆    水性内墙漆" style="cursor:pointer" onclick="show_all_img(648129,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F66281414561837.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/ae8d3-3278.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   天然净味竹炭   水性内墙漆" title="晨阳水漆加盟 晨阳   天然净味竹炭   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   天然净味竹炭   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648127,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F12821414561801.jpg')"></div>
                        </li>
                        <li class="current9">
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/8a09f-9807.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   天然净味抗甲醛   水性内墙漆" title="晨阳水漆加盟 晨阳   天然净味抗甲醛   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   天然净味抗甲醛   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648125,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F82221414561777.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/12b86-5439.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   天然净味荷 叶  水性内墙漆" title="晨阳水漆加盟 晨阳   天然净味荷 叶  水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   天然净味荷 叶  水性内墙漆" style="cursor:pointer" onclick="show_all_img(648123,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F10621414561751.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/ee63a-3128.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳  天然净味防霉  水性内墙漆" title="晨阳水漆加盟 晨阳  天然净味防霉  水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳  天然净味防霉  水性内墙漆" style="cursor:pointer" onclick="show_all_img(648121,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F21171414561725.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/2be98-4293.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳  居美加  水性内墙底漆" title="晨阳水漆加盟 晨阳  居美加  水性内墙底漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳  居美加  水性内墙底漆" style="cursor:pointer" onclick="show_all_img(648117,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F17251414561487.jpg')"></div>
                        </li>
                        <li class="current9">
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/5bbd8-9815.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳  居美仕  水性内墙漆" title="晨阳水漆加盟 晨阳  居美仕  水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳  居美仕  水性内墙漆" style="cursor:pointer" onclick="show_all_img(648115,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F14351414561463.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/35cf0-8630.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   居美清   水性内墙漆" title="晨阳水漆加盟 晨阳   居美清   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   居美清   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648093,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F28721414555148.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/778c7-6383.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   居美净   水性内墙漆" title="晨阳水漆加盟 晨阳   居美净   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   居美净   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648091,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F51631414555123.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/72c23-3918.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   居美易   水性内墙漆" title="晨阳水漆加盟 晨阳   居美易   水性内墙漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   居美易   水性内墙漆" style="cursor:pointer" onclick="show_all_img(648089,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F84151414555101.jpg')"></div>
                        </li>
                        <li class="current9">
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1d533-3965.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳  水性地坪底漆" title="晨阳水漆加盟 晨阳  水性地坪底漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳  水性地坪底漆" style="cursor:pointer" onclick="show_all_img(648087,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F92771414553324.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/2d1b3-3867.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳  水性地坪面漆" title="晨阳水漆加盟 晨阳  水性地坪面漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳  水性地坪面漆" style="cursor:pointer" onclick="show_all_img(648085,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F13031414553308.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/de9fa-1503.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   水性罩光工业漆" title="晨阳水漆加盟 晨阳   水性罩光工业漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   水性罩光工业漆" style="cursor:pointer" onclick="show_all_img(648083,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F94831414553224.jpg')"></div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/ac18e-8966.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳   水性银粉工业漆" title="晨阳水漆加盟 晨阳   水性银粉工业漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳   水性银粉工业漆" style="cursor:pointer" onclick="show_all_img(648081,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F79661414553196.jpg')"></div>
                        </li>
                        <li class="current9">
                            <a href="javascript:;">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/47995-6687.jpg" width="170" height="128" alt="晨阳水漆加盟 晨阳  水性金粉工业漆" title="晨阳水漆加盟 晨阳  水性金粉工业漆" /></a>
                            <div class="black_bd" title="晨阳水漆加盟 晨阳  水性金粉工业漆" style="cursor:pointer" onclick="show_all_img(648079,'all','http%3A%2F%2Fattachment.jmw.com.cn%2Fcomp_uploadfile%2Fpic%2F2014%2F10%2F29%2F79981414553178.jpg')"></div>
                        </li>
                    </ul>
                    <div class="black2">
                        <a class="current">1</a>
                        <a href="http://www.jmw.com.cn/xm137829/pinpaituku/2">2</a>
                        <a href="http://www.jmw.com.cn/xm137829/pinpaituku/3">3</a>
                        <a href="http://www.jmw.com.cn/xm137829/pinpaituku/2" class="next">下一页</a>
                        <a href="http://www.jmw.com.cn/xm137829/pinpaituku/3">最后一页</a></div>
                    <script>function show_all_img(id, album_id, imgSrc) {
                            $("#box").show();
                            $("#iframShow").show();

                            document.getElementById("showAlbumImgs").innerHTML = '<div class="iframShow"><iframe border="0" id="content" src="http://www.jmw.com.cn/showAllImg.php?pid=137829&id=' + id + '&imgSrc=' + imgSrc + '&album_id=' + album_id + '" frameborder="0" height="100%" width="100%" scrolling="no"></iframe></div>';
                            //document.write('<div class="iframShow"><iframe border="0" id="content" src="http://www.phptest.com/demo.html" frameborder="0" height="100%" width="100%" scrolling="no"></iframe></div>');              
                        }</script>
                    <!--imgs end--></div>
            </div>
        </div>
        <!---留言--->
        <div class="nineth">
            <div class="nineth_title clearfix">
                <span class="zixun_h3">晨阳水漆加盟在线咨询</span>
                <a target="_blank" href="http://www.jmw.com.cn/xm137829/liuyan/" title="晨阳水漆加盟在线咨询">
                    <u>查看更多</u>&gt;&gt;</a>
            </div>
            <div class="message" id="message_main">
                <div id="message_div" class="message_every clearfix">
                    <dl class="fl">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/79506-4799.jpg" width="51" height="51" alt="" /></dt>
                        <dd>鲍先生</dd></dl>
                    <ul class="tent fl">
                        <li class="sanjiao"></li>
                        <li class="from">
                            <ul class="clearfix">
                                <li class="ip">IP：
                                    <span>121.17.120.*</span></li>
                                <li class="From"></li>
                                <li class="From">网页版</li>
                                <li class="time">留言时间:
                                    <span>2017-01-17 15:43:09
                                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/c91dc-9102.gif" style='display:inline-block' /></span></li>
                            </ul>
                        </li>
                        <li class="want">资金看项目</li></ul>
                </div>
                <div id="message_div" class="message_every clearfix">
                    <dl class="fl">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/5448b-6171.jpg" width="51" height="51" alt="" /></dt>
                        <dd>吴正军</dd></dl>
                    <ul class="tent fl">
                        <li class="sanjiao"></li>
                        <li class="from">
                            <ul class="clearfix">
                                <li class="ip">IP：
                                    <span>180.174.146.*</span></li>
                                <li class="From"></li>
                                <li class="From">网页版</li>
                                <li class="time">留言时间:
                                    <span>2017-01-17 15:11:13
                                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/c91dc-9102.gif" style='display:inline-block' /></span></li>
                            </ul>
                        </li>
                        <li class="want">·我想详细了解此项目的加盟流程，请与我联系！</li></ul>
                </div>
                <div id="message_div" class="message_every clearfix">
                    <dl class="fl">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/5448b-6171.jpg" width="51" height="51" alt="" /></dt>
                        <dd>陆前锋</dd></dl>
                    <ul class="tent fl">
                        <li class="sanjiao"></li>
                        <li class="from">
                            <ul class="clearfix">
                                <li class="ip">IP：
                                    <span>58.40.195.*</span></li>
                                <li class="From"></li>
                                <li class="From">网页版</li>
                                <li class="time">留言时间:
                                    <span>2017-01-16 15:19:31
                                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/c91dc-9102.gif" style='display:inline-block' /></span></li>
                            </ul>
                        </li>
                        <li class="want">·我想详细了解此项目的加盟流程，请与我联系！</li></ul>
                </div>
                <div id="message_div" class="message_every clearfix">
                    <dl class="fl">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/6989f-5450.jpg" width="51" height="51" alt="" /></dt>
                        <dd>李总</dd></dl>
                    <ul class="tent fl">
                        <li class="sanjiao"></li>
                        <li class="from">
                            <ul class="clearfix">
                                <li class="ip">IP：
                                    <span>223.104.24.*</span></li>
                                <li class="From"></li>
                                <li class="From">手机版</li>
                                <li class="time">留言时间:
                                    <span>2017-01-15 12:45:33</span></li>
                            </ul>
                        </li>
                        <li class="want">我想询问晨阳水漆项目</li></ul>
                </div>
            </div>
        </div>
        <script>$(function() {
                var lasturl = window.location.href;
                var fromurl = document.referrer;
                $('#lasturl').val(lasturl);
                $('#fromurl').val(fromurl);
                $('#lasturlTJ').val(lasturl);
                $('#fromurlTJ').val(fromurl);
                $('#dqid10').val('');
                $('#dqid20').val('');
                $('#dqid30').val('');
                $("#list_1").hide();
            });
            function checkcontent() {
                var areaCont = $('#areaCont').val();
                areaCont = areaCont.replace(/(^\s*)|(\s*$)/g, "");
                if (areaCont == '') {
                    return false;
                } else {
                    return true;
                }
            }
            function checkmobile() {
                var yanz = /^(86)?0?1\d{10}$/;
                var mpnum = $('#mobile').val();
                if (mpnum == '') {
                    $("#spanmobile").attr('class', "correct error");
                    return false;
                } else {
                    if (yanz.test(mpnum) == false) {
                        $("#spanmobile").attr('class', "correct error");
                        return false;
                    } else {
                        $("#spanmobile").attr('class', "correct");
                        return true;
                    }
                }
            }
            function checksname() {
                var sname = $('#sname').val();
                sname = sname.replace(/(^\s*)|(\s*$)/g, "");
                if (sname == '') {
                    $("#spanname").attr('class', "correct error");
                    return false;
                } else {
                    $("#spanname").attr('class', "correct");
                    return true;
                }
            }
            function projectFootMessage() {
                var sname = $("#sname").val();
                var mobile = $("#mobile").val();
                var content = $("#areaCont").val();
                var project_message_targetId = $("#project_message_targetId").val();
                var project_message_origin = $("#project_message_origin").val();
                var lasturl = $("#lasturl").val();
                var fromurl = $("#fromurl").val();
                var dqid10 = $("#dqid10").val();
                var dqid20 = $("#dqid20").val();
                var zhanhui = $("input[name='zhanhui']:checked").val();
                if (zhanhui == undefined) {
                    zhanhui = 0;
                }
                var chk = $("input[name='chk']:checked").val();
                var jsCheck = true;
                var dqid30 = $('#dqid30').val();
                if (dqid30 == '') {
                    $("#xiaspan").attr('class', "correct error");
                    jsCheck = false;
                } else {
                    $("#xiaspan").attr('class', "correct");
                    jsCheck = true;
                }
                if (checkcontent() == false) jsCheck = false;
                if (checksname() == false) jsCheck = false;
                if (checkmobile() == false) jsCheck = false;
                if (jsCheck == true) {
                    // $('#hideFootSubmit').hide();
                    $.ajax({
                        type: 'get',
                        url: 'http://liuyan.jmw.com.cn/message/messageProjectFoot_temporary.php',
                        dataType: 'jsonp',
                        jsonp: 'callback',
                        data: {
                            is_login: is_login,
                            sname: sname,
                            mobile: mobile,
                            content: content,
                            chk: chk,
                            project_message_targetId: project_message_targetId,
                            project_message_origin: project_message_origin,
                            lasturl: lasturl,
                            fromurl: fromurl,
                            dqid10: dqid10,
                            dqid20: dqid20,
                            dqid30: dqid30,
                            zhanhui: zhanhui
                        },
                        success: function(html) {
                            if (html.status == 'login') {
                                alert('留言成功！');
                                window.location.reload();
                                //alert(is_login);
                            } else if (html.status == 'unlogin') {
                                $('#two_message_id').val(html.id);
                            }
                        }
                    });
                    if (is_login == 'unlogin') {
                        $('#click_YZ').show();
                        $('.gray_mask').show();
                        $('#two_telephone').val(mobile);
                        $('#gem_collection').val('标页留言');
                        Auto_trigger();
                    }
                }
                return jsCheck;
            }</script>
        <div class="tenth" id="tenth">
            <div class="tenth_title clearfix">
                <span class="clear_h2">我要咨询</span>
                <div class="tenth_phone">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b0a29-2052.png" alt="" />
                    <span>全国免费电话：</span>
                    <!--<strong style="display:inline-block; vertical-align:middle; color:#fff; font-size:23px;">4000-500-555转95542</strong>-->
                    <strong style="display:inline-block; vertical-align:middle; color:#fff; font-size:23px;">4000-500-555</strong></div>
            </div>
            <div class="J-messages">
                <form action="" method="post">
                    <input type="hidden" name="lasturl" id="lasturl" />
                    <input type="hidden" name="fromurl" id="fromurl" />
                    <input type="hidden" name="project_message_targetId" id="project_message_targetId" value="137829" />
                    <input type="hidden" name="project_message_origin" id="project_message_origin" value="3" />
                    <div class="J-say">
                        <div class="say_t">
                            <div class="say_tL">
                                <div class="teae">
                                    <textarea id="areaCont" name="content" onblur="checkcontent()"></textarea>
                                    <div class="J-quickly">
                                        <p>您可以根据意向选择下列
                                            <span>[
                                                <u>快捷留言</u>]</span>
                                        </p>
                                        <ul>
                                            <li>
                                                <a href="javascript:;" title="晨阳水漆项目很好，请尽快联系我详谈。">晨阳水漆项目很好，请尽快联系我详谈。</a></li>
                                            <li>
                                                <a href="javascript:;" title="请问我所在的地区有晨阳水漆加盟商了吗？">请问我所在的地区有晨阳水漆加盟商了吗？</a></li>
                                            <li>
                                                <a href="javascript:;" title="留下邮箱，请将晨阳水漆详细资料邮件给我。">留下邮箱，请将晨阳水漆详细资料邮件给我。</a></li>
                                            <li>
                                                <a href="javascript:;" title="想了解晨阳水漆的加盟流程，请与我联系！">想了解晨阳水漆的加盟流程，请与我联系！</a></li>
                                            <li>
                                                <a href="javascript:;" title="做为晨阳水漆的代理加盟商能得到哪些支持？">做为晨阳水漆的代理加盟商能得到哪些支持？</a></li>
                                            <li>
                                                <a href="javascript:;" title="请问投资晨阳水漆所需要的费用有哪些？">请问投资晨阳水漆所需要的费用有哪些？</a></li>
                                            <li>
                                                <a href="javascript:;" title="我想加盟晨阳水漆，请电话联系我。">我想加盟晨阳水漆，请电话联系我。</a></li>
                                            <li>
                                                <a href="javascript:;" title="晨阳水漆加盟，有什么优惠吗？">晨阳水漆加盟，有什么优惠吗？</a></li>
                                        </ul>
                                        <span class="quick_bg"></span>
                                    </div>
                                </div>
                                <div class="clearfix J-select">
                                    <div class="fl J-address_w">地 区</div>
                                    <div class="fl location-1 J-local">
                                        <span target="_self" href="javascript:;" id="sid1s_show_dq_1" value="省/市">省/市</span>
                                        <div class="ul_list1" id="ul_list1">
                                            <ul id="list_1" style="max-height: 265px; overflow: auto;position:relative;"></ul>
                                        </div>
                                    </div>
                                    <script>var s0 = ["sid1s_show_dq_1", "sid1s_show_dq_2", "sid1s_show_dq_3"];
                                        var opt0 = ["省/市", "地/州", "区/县"];
                                        change(0, 1);
                                        bindSelectBG();

                                        $(function() {
                                            $("#list_1 li").click(function() {
                                                setDQhtml($(this), 1);
                                                $("#dqid10").val($(this).attr('dqid_value'));

                                                $("#" + $(this).parent("ul").attr("id") + " li").removeClass('selected');
                                                var dqLevel = 0;
                                                $(this).addClass('selected');
                                                var val = $(this).attr('dqid_value');

                                                $("#sid1s_show_dq_1").html(val);
                                                $("#" + $(this).parent("ul").attr("id")).hide();
                                                var id = dqLevel + "_" + getDQid(val, dqLevel);
                                                change(id, 2);
                                                bindSelectBG();
                                                bindListUl(2, $(this).attr('position'));

                                            });

                                            $("#sid1s_show_dq_1").click(function() {
                                                $("#ul_list1").show();
                                                $("#list_1").show();
                                                return false;
                                            });
                                            $("#sid1s_show_dq_2").click(function() {
                                                $("#ul_list2").show();
                                                $("#list_2").show();
                                                return false;
                                            });
                                            $("#sid1s_show_dq_3").click(function() {
                                                $("#ul_list3").show();
                                                $("#list_3").show();
                                                return false;
                                            });
                                        });
                                        function getDQid(dqname, dqLevel) {
                                            return dsy.getId(dqname, dqLevel);
                                        }
                                        function setDQhtml(obj, u) {
                                            if (u != 1) {
                                                $('#sid1s_show_dq_' + u).html(obj.html());
                                                if (u == 2) {
                                                    var id = obj.attr('position');
                                                    change(id, 3);
                                                    $('#sid1s_show_dq_' + u).html(obj.html());
                                                    bindSelectBG();
                                                    bindListUl(3, id);
                                                }
                                            }
                                        }

                                        function bindSelectBG() {
                                            $("#ul_list1 li,#ul_list2 li,#ul_list3 li").hover(function() {
                                                $(this).css('background', '#316ac5');
                                                $(this).css('color', '#ffffff');
                                            },
                                            function() {
                                                $(this).css('background', '#ffffff');
                                                $(this).css('color', '#000000');
                                            });
                                        }
                                        function bindListUl(level, dq_key) {
                                            $("#list_" + level + " li").click(function() {
                                                setDQhtml($(this), level);
                                                $("#dqid" + level + "0").val($(this).attr('dqid_value'));

                                                $("#" + $(this).parent("ul").attr("id") + " li").removeClass('selected');
                                                var dqLevel = dq_key; //list_1 写死 0 (list_2 : 1| list_3 : 2)
                                                $(this).addClass('selected');
                                                var val = $(this).attr('dqid_value');

                                                $("#sid1s_show_dq_" + level).html(val);
                                                $("#" + $(this).parent("ul").attr("id")).hide();
                                                var id = dqLevel + "_" + getDQid(val, dqLevel);
                                            });
                                        }</script>
                                    <div class="fl location-2 J-local">
                                        <span target="_self" href="javascript:;" id="sid1s_show_dq_2">地/州</span>
                                        <div class="ul_list2" id="ul_list2">
                                            <ul id="list_2" style="max-height: 265px; overflow: auto; position:relative;display:none;"></ul>
                                        </div>
                                    </div>
                                    <div class="fl location-3 J-local">
                                        <span target="_self" href="javascript:;" id="sid1s_show_dq_3">区/县</span>
                                        <div class="ul_list3" id="ul_list3">
                                            <ul id="list_3" style="max-height: 265px; overflow: auto;position:relative; display:none;"></ul>
                                        </div>
                                    </div>
                                    <span id="xiaspan" class=""></span>
                                    <input type="hidden" value="" name="dqid10" id="dqid10" />
                                    <!-- 省级 -->
                                    <input type="hidden" value="" name="dqid20" id="dqid20" />
                                    <!-- 市级 -->
                                    <input type="hidden" value="" name="dqid30" id="dqid30" />
                                    <!-- 区级 -->
                                    <script>$(function() {
                                            $("#sid1s_show_dq_3").click(function() {
                                                var dqid30_value = $("#dqid30").val();
                                                if (dqid30_value != '区/县') {
                                                    $("#xiaspan").attr('class', "correct");
                                                }
                                            });
                                        });</script>
                                    <span class="J-input1">(请输入您的地区)</span></div>
                                <div class="J-address clearfix">
                                    <div class="J-address_w">姓 名</div>
                                    <input type="text" id="sname" name="sname" onblur="checksname()" style="width:57px;" value="" />
                                    <span class="chk3" style="float:left; font-size:15px; color:#000; line-height:32px; padding-left:5px; padding-right:11px;">性别</span>
                                    <input type="radio" class="chk4" name="chk" style="margin-top:7px;" value="0" checked="checked" />
                                    <label style="float:left; font-size:15px; color:#000; line-height:32px; padding:0 14px 0 5px;">男</label>
                                    <input type="radio" class="chk4" name="chk" style="margin-top:7px;" value="1" />
                                    <label style="float:left; font-size:15px; color:#000; line-height:32px; padding:0 14px 0 5px;">女</label>
                                    <span id="spanname"></span>
                                    <span class="J-input2">(请输入您的姓名)</span></div>
                                <div class="J-address clearfix">
                                    <div class="J-address_w">手 机</div>
                                    <input type="text" name="mobile" id="mobile" onblur="checkmobile()" maxlength="11" style="width: 197px;" value="" />
                                    <span id="spanmobile"></span>
                                    <span class="J-input3">(请输入您的手机)</span></div>
                                <div class="say_b">
                                    <input type="button" value="提交咨询" id='hideFootSubmit' onclick="return projectFootMessage();" /></div>
                                <style type="text/css">.tongShi{padding:17px 0 20px 12px;} .tongShi input{margin:2px 12px 0 0;} .tongShi p a{color:#e43c01;font-weight:bold;}</style>
                                <div class="tongShi clearfix">
                                    <input type="hidden" name="zhanhui" value="0" />
                                    <!--<input type="checkbox" name="zhanhui" class="fl" value="1" checked/>
                                    <p class="fl">已有
                                        <i style="color:#e43c01;font-weight:bold;"></i>人想去
                                        <a href="http://zch.jmw.com.cn" target="_blank">
                                            <a href="http://zch.jmw.com.cn" target="_blank">第九届中国品牌加盟投资博览会-北京国家会议中心</a>现场看
                                            <span style="color: #E43C01;font-weight: bold;">晨阳水漆</span>创业项目(
                                            <a href="http://zch.jmw.com.cn" target="_blank">我也想去</a>)</p>--></div></div>
                        </div>
                    </div>
                </form>
                <!--<div class="J-say-img"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/86bea-2932.jpg" alt="" /></div>-->
                <style>.J-say-img .three_pic{padding-bottom:50px;margin-top:10px;} .J-say-img .three_pic a{display:block;float:left;margin-right:10px;width:200px;height:62px;} .J-say-img .three_pic img{float:left;width:100%;height:100%;}</style>
                <div class="J-say-img">
                    <div class="clearfix" style="height:40px;margin-right:6px;color:#717171;">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/2498b-4213.jpg" alt="" class="fl" />
                        <!--<p class="fr" style="line-height:30px;">已有<i style="color:#e43c01;font-weight:bold;">位</i>创业者线上发送意向：在<i style="color:#e43c01;font-weight:bold;position:relative">北京<span style="font-size:25px;position:absolute;top:-13px;">.</span>&nbsp;&nbsp;国家会议中心</i>现场去看<i style="color:#e43c01;font-weight:bold;">投资博览会</i></p>--></div>
                    <div class="three_pic">
                        <a href="http://search.jmw.com.cn/cybd.php" target="_blank">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/8cffc-5192.png" alt="" /></a>
                        <a href="http://zch.jmw.com.cn/" target="_blank" style="width:275px;">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/957e2-7586.gif" alt="" /></a>
                        <a href="javascript:;" onclick="waitTime();">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/171fd-8106.png" alt="" /></a>
                    </div>
                </div>
                <style>.jingQingQidai{display: none;width:295px;height:116px;border-radius:6px;background:rgba(0,0,0,0.27);position:fixed;top:50%;left:50%;margin-left:-145px;margin-top:-50px;z-index:8000;} .jingQing{width:280px;height:100px;background:#fff;margin:8px auto;} .jingQing p{height:24px;} .jingQing p img{margin:6px 6px 0 0;cursor:pointer;} .jingQing dl{display:block;text-align:center;font-size:24px;font-weight:bold;color:#e43c01;} .jingQing dl img{margin:4px auto;}</style>
                <div class="jingQingQidai">
                    <div class="jingQing">
                        <p onclick="waitTimeClose()">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/661b8-5792.png" alt="" class="fr" /></p>
                        <dl>
                            <dt>
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/2d3f9-1179.png" alt="" /></dt>
                            <dd>敬请期待!</dd></dl>
                    </div>
                </div>
                <script>function waitTime() {
                        $('.jingQingQidai').show();
                        $('#black_ceng').show();
                    }
                    function waitTimeClose() {
                        $('.jingQingQidai').hide();
                        $('#black_ceng').hide();
                    }</script>
            </div>
        </div>
        <script type="text/javascript">$(function() {
                $(".J-quickly ul li a").click(function() {
                    var oldcontent = $(this).html();
                    newcontent = oldcontent.replace('该项目', "晨阳水漆");
                    $("#areaCont").val(newcontent);
                });
            });</script>
        <style type="text/css">.tenth{ margin-top:10px;} .tenth .tenth_title{ background:#e43c01; height:50px; overflow:hidden;} .tenth .tenth_title h2{ float:left; font-size:20px; color:#fff; padding-left:20px; line-height:50px;} .tenth_phone{ float: right; margin-top: 13px; padding-right: 30px;} .tenth_phone img{ display: inline-block; vertical-align: middle;} .tenth_phone span{ display: inline-block; vertical-align: middle; font-size: 18px; color: #fff; padding-left: 4px;} .tenth .J-messages{ border:1px solid #cfcfcf; border-top:none; padding: 20px 9px 9px;} .tenth .J-say{ background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/0def7-1244.gif) no-repeat; width:720px; padding-top: 10px; border-bottom: 1px solid #e9e9e9;} .say_t .say_tL{ width:700px; padding-left:19px;} .say_t .say_tL .teae{ position:relative; *z-index:100;} .say_t .say_tL .teae textarea{ width:364px; height:110px; border:none; border:1px solid #bebebe; background:#fff; color:#333; font-size:12px; font-family:"微软雅黑"; line-height:20px; padding:5px;} .J-quickly{ position:absolute; left:386px; top:0px; z-index:100; width:297px;} .J-quickly p{ background:#ea6d41; height:41px; line-height:41px; font-size:14px; color:#fff; padding-left:18px; } .J-quickly p span{ color:#ffff00; padding-left:7px;} .J-quickly ul{ border:1px solid #ea6d41; background:#fff; border-top:none; padding: 18px 0; width:295px;} .J-quickly ul li{ height:30px; line-height:30px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/6a261-2612.png) no-repeat 14px 14px; text-indent:25px;overflow:hidden; vertical-align: bottom; width:295px;} .J-quickly ul li a{ color:#666; display:block; width:500px;} .J-quickly ul li a:hover{ background:#ffd9cb url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/6a261-2612.png) no-repeat 14px 14px; color:#e43c01;width:295px;} .J-quickly .quick_bg{ background: url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/b06bf-9063.gif) no-repeat; width: 7px; height: 14px; position: absolute; top: 14px; left: -7px; z-index: 10;} .J-select{ margin-top:14px;} .location-1{ width:63px; background:#fff; border-radius:0; border:1px solid #bebebe; height:30px; line-height:30px; position:relative; z-index:99;} .location-1 span{ display:block; width:63px; height:30px; font-size:12px; color:#333; text-indent:6px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/48a61-8765.png) no-repeat 47px center; cursor: pointer;} .location-1 .ul_list1{ width:63px; position:absolute; left:-1px; top:29px; z-index:100; border:1px solid #bebebe; border-top: none; background:#fff; display: none;} .location-1 .ul_list1 ul li{ line-height:26px; padding-left:6px;} .location-1 .ul_list1 ul li a{ color:#999;} .location-2{ width:60px; margin-left:5px; display:inline; background:#fff; border-radius:0; border:1px solid #bebebe; height:30px; line-height:30px; position:relative; z-index:99;} .location-2 span{ display:block; width:60px; height:30px; font-size:12px; color:#333; text-indent:4px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/48a61-8765.png) no-repeat 43px center; cursor: pointer;} .location-2 .ul_list2{ width:60px; position:absolute; left:-1px; top:29px; z-index:100; border:1px solid #bebebe; border-top: none; background:#fff; display: none;} .location-2 .ul_list2 ul li{ line-height:26px; padding-left:4px;} .location-2 .ul_list2 ul li a{ color:#999;} .location-3{ width:66px; margin-left:5px; display:inline; background:#fff; border-radius:0; border:1px solid #bebebe; height:30px; line-height:30px; position:relative; z-index:99;} .location-3 span{ display:block; width:66px; height:30px; font-size:12px; color:#333; text-indent:5px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/48a61-8765.png) no-repeat 45px center; cursor: pointer;} .location-3 .ul_list3{ width:66px; position:absolute; left:-1px; top:29px; z-index:100; border:1px solid #bebebe; border-top: none; background:#fff; display: none;} .location-3 .ul_list3 ul li{ line-height:26px; padding-left:5px;} .location-3 .ul_list3 ul li a{ color:#999;} .J-input1{ float: left; color: #e10000; line-height: 32px; padding-left: 11px;} .J-input2{ float: left; color: #e10000; line-height: 32px; padding-left: 11px;} .J-input3{ float: left; color: #e10000; line-height: 32px; padding-left: 11px;} .J-address{ margin-top:14px;} .J-address_w{ float:left; padding-right: 12px; color:#000; font-size:15px; line-height:32px;} .J-address input{ float:left; /*width:197px;*/ height:18px; line-height:18px; padding: 6px 3px; overflow:hidden; border:1px solid #bebebe; background:#fff; color:#333;} .J-say .say_b input{ background: url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/8ce6e-7742.png) no-repeat; width:204px; height:42px; line-height:38px; overflow:hidden; border:none; font-size:18px; color:#fff; text-align:center; font-family:"微软雅黑"; margin:15px 0 0 46px; cursor:pointer;} .J-say-img{padding: 25px 0px 22px 6px;}</style></div>
    <!---右-->
    <div class="fr cont_right">
        <div class='chick_box'>
            <div class="chick clearfix">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/8fc7b-4017.jpg" width="45" height="45" alt="" />
                <ul>
                    <li>核实专员：
                        <span>吴彤彤</span></li>
                    <li>核实日期：
                        <span>2016-11-11</span></li>
                </ul>
            </div>
            <div class="chick_cont">
                <div class="chick_title clearfix">
                    <span class="fl xm">审核项目</span>
                    <span class="fr zt">审核状态</span></div>
                <ul>
                    <li class="clearfix">
                        <span>加盟热线</span>
                        <i>
                        </i>
                    </li>
                    <li class="clearfix">
                        <span>公司地址</span>
                        <i>
                        </i>
                    </li>
                    <li class="clearfix">
                        <span>直营店数量</span>
                        <i>
                        </i>
                    </li>
                    <li class="clearfix">
                        <span>加盟/代理店数量</span>
                        <i>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 网友点评 -->
        <div class="p_dianPing">
            <p class="p_p_title clearfix">
                <span class="fl">网友点评</span>
                <a href="http://www.jmw.com.cn/xm137829/wangyoudianping/" class="fr">更多(17)>></a></p>
            <ul class="dianPing_ul">
                <li class="li1">
                    <font class="p_red">
                        <a style="color:red;" href="http://www.jmw.com.cn/xm137829">晨阳水漆</a></font>意向加盟者
                    <font class="p_red"></font></li>
                <li class="li2 clearfix">
                    <span class="fl span1">
                        <image src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1a0eb-2516.png"></span>
                    <span class="fr span2">2015 - 10 - 30</span></li>
                <li class="li3">晨阳水漆后，觉得这个品牌挺不错的，整体感觉不错，很想加盟这个...</li></ul>
            <ul class="dianPing_ul">
                <li class="li1">
                    <font class="p_red">
                        <a style="color:red;" href="http://www.jmw.com.cn/xm137829">晨阳水漆</a></font>意向加盟者
                    <font class="p_red"></font></li>
                <li class="li2 clearfix">
                    <span class="fl span1">
                        <image src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1a0eb-2516.png"></span>
                    <span class="fr span2">2015 - 10 - 29</span></li>
                <li class="li3">晨阳水漆了解后觉得品牌整体还不错，打算加盟这个品牌</li></ul>
            <ul class="dianPing_ul">
                <li class="li1">
                    <font class="p_red">
                        <a style="color:red;" href="http://www.jmw.com.cn/xm137829">晨阳水漆</a></font>意向加盟者
                    <font class="p_red"></font></li>
                <li class="li2 clearfix">
                    <span class="fl span1">
                        <image src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1a0eb-2516.png"></span>
                    <span class="fr span2">2015 - 09 - 28</span></li>
                <li class="li3">觉得晨阳水漆有一定的品质，加盟政策了解了一下，迟迟力度还行，...</li></ul>
        </div>
        <!-- 网友点评 end -->
        <style>span[type='text']{height: 28px; margin: 5px 0;padding: 5px;width: 30px;background-color: transparent;_background-color: transparent;}</style>
        <!-- <div class="advertisement">
        <!---->
        <!-- <a href="http://zch.jmw.com.cn/d8/" target="blank" style="position:relative;display:block;width:230px;height:90px;border:none;text-decoration:none;_text-decoration:none;">
        <!--<span type="text" id="time_d" style="position:absolute;_position:absolute;top:64px;left:18px;_top:64px;_left:22px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>
        <span type="text" id="time_h"style="position:absolute;_position:absolute;top:64px;left:66px;_top:64px;_left:70px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>
        <span type="text" id="time_m" style="position:absolute;_position:absolute;top:64px;left:124px;_top:64px;_left:129px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>
        <span type="text" id="time_s"style="position:absolute;_position:absolute;top:64px;left:170px;_top:64px;_left:176px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>-->
        <!--<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/fab84-3418.jpg" style="width:230px;height:90px;border:none;"></a>
        </div>
        <!--<script>
        //展会计时器
        $(function(){ 
        show_time();
        }); 
        function show_time(){ 
        var time_start = new Date().getTime(); //设定当前时间
        var time_end =  new Date("2015/12/19 00:00:00").getTime(); //设定目标时间
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
        $("#time_d").html(int_day); 
        $("#time_h").html(int_hour); 
        $("#time_m").html(int_minute); 
        $("#time_s").html(int_second); 
        // 设置定时器
        setTimeout("show_time()",1000); 
        }
        </script>-->
        <script>showEvoteNew(137829, '');</script>
        <div class="heat">
            <div class="heat_title" style="margin-top:10px;">
                <span>建材加盟热度榜</span></div>
            <div class="heat_cont">
                <ul>
                    <li class="clearfix">
                        <span class="h_one">1</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm137829/" target="_blank" class="my_hyrdb" title="晨阳水漆加盟">
                            <u>[晨阳水漆加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_two">2</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm6572154/" target="_blank" class="my_hyrdb" title="欧克斯门窗加盟">
                            <u>[欧克斯门窗加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_three">3</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm158545/" target="_blank" class="my_hyrdb" title="舒鑫e家加盟">
                            <u>[舒鑫e家加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">4</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm6589649/" target="_blank" class="my_hyrdb" title="空间美贝壳粉生态涂料加盟">
                            <u>[空间美贝壳粉生态涂料加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">5</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm6562900/" target="_blank" class="my_hyrdb" title="室美伦加盟">
                            <u>[室美伦加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">6</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm58277/" target="_blank" class="my_hyrdb" title="德尔地板加盟">
                            <u>[德尔地板加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">7</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm6581027/" target="_blank" class="my_hyrdb" title="荣事达管业加盟">
                            <u>[荣事达管业加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">8</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm79341/" target="_blank" class="my_hyrdb" title="樱花涂料加盟">
                            <u>[樱花涂料加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">9</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm6594594/" target="_blank" class="my_hyrdb" title="忆江南锦缎泥加盟">
                            <u>[忆江南锦缎泥加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                    <li class="clearfix">
                        <span class="h_blue">10</span>
                        <a target="_blank" href="http://www.jmw.com.cn/xm76445/" target="_blank" class="my_hyrdb" title="澳普利发门窗加盟">
                            <u>[澳普利发门窗加盟]</u>
                        </a>
                        <span class="Rside">建材</span></li>
                </ul>
            </div>
        </div>
        <div class="recommend">
            <div class="recommend_title">
                <span>加盟品牌推荐</span></div>
            <div class="recommend_cont">
                <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/platj/css/683ed-3544.css" />
                <div class="recommend_child">
                    <div class="clearfix re_childTop">
                        <div class="fl">
                            <a href="http://www.jmw.com.cn/xm6649630/" target="_blank">
                                <img title="东时便当加盟" width="113" height="87" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/7e954-2138.jpg"></a>
                        </div>
                        <ul class="fl">
                            <li class="li_libj">
                                <a onclick="javascript:attention('6649630','东时便当','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                            <li class="li_libj li_message">
                                <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('6649630','东时便当','','7','1'); return false;" onblur="">快捷留言</a></li>
                            <li class="li_libj orenge_bj">
                                <a class="color_w" href="http://www.jmw.com.cn/xm6649630/" target="_blank" title="东时便当加盟">项目详情</a></li>
                        </ul>
                    </div>
                    <div class="re_childBtn">
                        <ul>
                            <li>
                                <span>
                                    <span class="span_leter">项目名</span>：</span>
                                <a title="东时便当加盟" href="http://www.jmw.com.cn/xm6649630/" target="_blank">东时便当</a></li>
                            <li>
                                <span>
                                    <span class="span_leter">投资额</span>：</span>
                                <a title="东时便当3万—10万加盟" href="http://www.jmw.com.cn/xm6649630/" target="_blank">3万—10万</a></li>
                            <li class="li_last">
                                <span>项目特点：</span>
                                <a title="东时便当加盟" href="http://www.jmw.com.cn/xm6649630/" target="_blank">全球便当料理工坊。</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommend_child">
                    <div class="clearfix re_childTop">
                        <div class="fl">
                            <a href="http://www.jmw.com.cn/xm6673056/" target="_blank">
                                <img title="学习星加盟" width="113" height="87" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/d7faf-5904.jpg"></a>
                        </div>
                        <ul class="fl">
                            <li class="li_libj">
                                <a onclick="javascript:attention('项目id号6673056','学习星','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                            <li class="li_libj li_message">
                                <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('项目id号6673056','学习星','','7','2'); return false;" onblur="">快捷留言</a></li>
                            <li class="li_libj orenge_bj">
                                <a class="color_w" href="http://www.jmw.com.cn/xm6673056/" target="_blank" title="学习星加盟">项目详情</a></li>
                        </ul>
                    </div>
                    <div class="re_childBtn">
                        <ul>
                            <li>
                                <span>
                                    <span class="span_leter">项目名</span>：</span>
                                <a title="学习星加盟" href="http://www.jmw.com.cn/xm6673056/" target="_blank">学习星</a></li>
                            <li>
                                <span>
                                    <span class="span_leter">投资额</span>：</span>
                                <a title="学习星20万-50万加盟" href="http://www.jmw.com.cn/xm6673056/" target="_blank">20万-50万</a></li>
                            <li class="li_last">
                                <span>项目特点：</span>
                                <a title="学习星加盟" href="http://www.jmw.com.cn/xm6673056/" target="_blank">朝阳教育教具行业。</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommend_child">
                    <div class="clearfix re_childTop">
                        <div class="fl">
                            <a href="http://www.jmw.com.cn/xm86635/" target="_blank">
                                <img title="爱贝国际少儿英语加盟" width="113" height="87" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/85e42-8962.jpg"></a>
                        </div>
                        <ul class="fl">
                            <li class="li_libj">
                                <a onclick="javascript:attention('86635','爱贝国际少儿英语','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                            <li class="li_libj li_message">
                                <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('86635','爱贝国际少儿英语','','7','3'); return false;" onblur="">快捷留言</a></li>
                            <li class="li_libj orenge_bj">
                                <a class="color_w" href="http://www.jmw.com.cn/xm86635/" target="_blank" title="爱贝国际少儿英语加盟">项目详情</a></li>
                        </ul>
                    </div>
                    <div class="re_childBtn">
                        <ul>
                            <li>
                                <span>
                                    <span class="span_leter">项目名</span>：</span>
                                <a title="爱贝国际少儿英语加盟" href="http://www.jmw.com.cn/xm86635/" target="_blank">爱贝国际少儿英语</a></li>
                            <li>
                                <span>
                                    <span class="span_leter">投资额</span>：</span>
                                <a title="爱贝国际少儿英语100万-200万加盟" href="http://www.jmw.com.cn/xm86635/" target="_blank">100万-200万</a></li>
                            <li class="li_last">
                                <span>项目特点：</span>
                                <a title="爱贝国际少儿英语加盟" href="http://www.jmw.com.cn/xm86635/" target="_blank">高端幼少儿英语知名品牌。</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommend_child">
                    <div class="clearfix re_childTop">
                        <div class="fl">
                            <a href="http://www.jmw.com.cn/xm6572151/" target="_blank">
                                <img title="爱代驾加盟" width="113" height="87" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/9fda6-9920.jpg"></a>
                        </div>
                        <ul class="fl">
                            <li class="li_libj">
                                <a onclick="javascript:attention('6572151','爱代驾','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                            <li class="li_libj li_message">
                                <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('6572151','爱代驾','','7','4'); return false;" onblur="">快捷留言</a></li>
                            <li class="li_libj orenge_bj">
                                <a class="color_w" href="http://www.jmw.com.cn/xm6572151/" target="_blank" title="爱代驾加盟">项目详情</a></li>
                        </ul>
                    </div>
                    <div class="re_childBtn">
                        <ul>
                            <li>
                                <span>
                                    <span class="span_leter">项目名</span>：</span>
                                <a title="爱代驾加盟" href="http://www.jmw.com.cn/xm6572151/" target="_blank">爱代驾</a></li>
                            <li>
                                <span>
                                    <span class="span_leter">投资额</span>：</span>
                                <a title="爱代驾20万—50万加盟" href="http://www.jmw.com.cn/xm6572151/" target="_blank">20万—50万</a></li>
                            <li class="li_last">
                                <span>项目特点：</span>
                                <a title="爱代驾加盟" href="http://www.jmw.com.cn/xm6572151/" target="_blank">专业代驾服务平台，酒后代驾、公司代驾服务。</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommend_child">
                    <div class="clearfix re_childTop">
                        <div class="fl">
                            <a href="http://www.jmw.com.cn/xm6578773/" target="_blank">
                                <img title="kiumi韩式美食屋加盟" width="113" height="87" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b87a7-1869.jpg"></a>
                        </div>
                        <ul class="fl">
                            <li class="li_libj">
                                <a onclick="javascript:attention('6578773','kiumi韩式美食屋','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                            <li class="li_libj li_message">
                                <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('6578773','kiumi韩式美食屋','','7','5'); return false;" onblur="">快捷留言</a></li>
                            <li class="li_libj orenge_bj">
                                <a class="color_w" href="http://www.jmw.com.cn/xm6578773/" target="_blank" title="kiumi韩式美食屋加盟">项目详情</a></li>
                        </ul>
                    </div>
                    <div class="re_childBtn">
                        <ul>
                            <li>
                                <span>
                                    <span class="span_leter">项目名</span>：</span>
                                <a title="kiumi韩式美食屋加盟" href="http://www.jmw.com.cn/xm6578773/" target="_blank">kiumi韩式美食屋</a></li>
                            <li>
                                <span>
                                    <span class="span_leter">投资额</span>：</span>
                                <a title="kiumi韩式美食屋5万—10万加盟" href="http://www.jmw.com.cn/xm6578773/" target="_blank">5万—10万</a></li>
                            <li class="li_last">
                                <span>项目特点：</span>
                                <a title="kiumi韩式美食屋加盟" href="http://www.jmw.com.cn/xm6578773/" target="_blank">韩式美食，独家绝味！</a></li>
                        </ul>
                    </div>
                </div>
                <div class="recommend_child">
                    <div class="clearfix re_childTop">
                        <div class="fl">
                            <a href="http://www.jmw.com.cn/xm143208/" target="_blank">
                                <img title="例格女装加盟" width="113" height="87" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/4511f-3650.jpg"></a>
                        </div>
                        <ul class="fl">
                            <li class="li_libj">
                                <a onclick="javascript:attention('143208','例格女装','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                            <li class="li_libj li_message">
                                <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('143208','例格女装','','7','6'); return false;" onblur="">快捷留言</a></li>
                            <li class="li_libj orenge_bj">
                                <a class="color_w" href="http://www.jmw.com.cn/xm143208/" target="_blank" title="例格女装加盟">项目详情</a></li>
                        </ul>
                    </div>
                    <div class="re_childBtn">
                        <ul>
                            <li>
                                <span>
                                    <span class="span_leter">项目名</span>：</span>
                                <a title="例格女装加盟" href="http://www.jmw.com.cn/xm143208/" target="_blank">例格女装</a></li>
                            <li>
                                <span>
                                    <span class="span_leter">投资额</span>：</span>
                                <a title="例格女装10万-20万加盟" href="http://www.jmw.com.cn/xm143208/" target="_blank">10万-20万</a></li>
                            <li class="li_last">
                                <span>项目特点：</span>
                                <a title="例格女装加盟" href="http://www.jmw.com.cn/xm143208/" target="_blank">例格女装，源自意大利，欧洲风格流行元素。</a></li>
                        </ul>
                    </div>
                </div>
                <!--<style type="text/css"> 
                .secfrom_1{ padding:0; position: absolute; top: -26px; right: -62px; }
                .box_1{ padding:0;}
                .box_2 p.btn{ padding-top:0;}
                #show_hide{width:375px; height:352px; border:1px solid #000;background:#fff;z-index:1009;left:50%;/*FF IE7*/
                top:50%;/*FF IE7*/
                margin-left:-187px!important;/*FF IE7*/
                margin-top:-151px!important;/*FF IE7*/
                margin-top:0;position:fixed!important;/*FF IE7*/
                position:absolute;/*IE6*/
                _top:expression(eval(document.compatMode &&
                document.compatMode=='CSS1Compat') ?
                documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
                document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/
                }
                #sec_from,.secIframe{width:315px; position:absolute;left:-1px;top:-1px;}
                .secIframe{filter:alpha(opacity=0);opacity:0;}
                .secfrom_1{text-align:right; }
                .secfrom_2{width:315px;position:relative; margin-left:30px; }
                .secfrom_2 .secMsg{left:66px;top:30px;}
                .box_1 span{margin-left:15px;}
                .box_1 span a{color:#0A4DA4;}
                .box_1 textarea{width:298px;height:100px;resize:none; color:#999999; padding:8px; }
                .box_2{width:100%;overflow:hidden;}
                .box_2 p{height:36px;line-height:36px; margin-top:15px; overflow:hidden;}
                .box_2 p span{color:#f00;margin:0 3px;}
                .box_2 p input.name,.box_2 p input.tel{height:34px;border:1px solid #ccc;line-height:34px;padding:0 5px;}
                .box_2 p input.name{width:140px;}
                .box_2 p input.tel{width:243px;}
                .box_2 p label{margin:0 2px;}
                .box_2 p.tel input{width:214px;}
                .box_2 .btn{ width: 315px; background: #e93c00; height:36px; line-height: 36px; text-align: center; color: #fff; border: none;}
                </style>-->
                <!--快捷留言固定定位-->
                <!--<div name="show_hide" style="display: none;" id="show_hide">
                <iframe frameborder="0" class="secIframe"></iframe>
                <div id="sec_from">
                <div class="secfrom_1"><a onclick="closeBg();" href="javascript:;"><img width="26" height="26" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1b5cd-8225.png"></a></div>
                <div class="secfrom_2">
                <form action="http://liuyan.jmw.com.cn/message/messageProjectQuick.php" name="UbbFm" id="postFrom" method="post" onsubmit="return onClickMessInfoNew();">
                <input type="hidden" name="lasturl_quick" id="lasturl_quick" />
                <input type="hidden" name="fromurl_quick" id="fromurl_quick" />            
                <input type="hidden" name="project_message_origin" id="origin_quick"  />
                <div class="box_1" style="height:44px; line-height:44px;">留言内容:<span>[<a href="javascript:;" onmouseover="javascript:jQuery('#secly_1').show();" onmouseout="javascript:jQuery('#secly_1').hide();" onclick="return false">快捷留言</a>]</span></div>
                <div class="box_1"><textarea id="js_textarea" name="content" onkeyup="keyUp();">此项目很好，请尽快联系我详谈。</textarea></div>
                <div class="box_2">
                <p>您的姓名：<input type="text" class="name" value="" id="Uname" name="sname" maxlength="6"><span></span>性别：<label>男</label><input type="radio" class="a3" checked="" value="0" id="sexm" name="sex"><label>女</label><input type="radio" class="a3" value="1" id="sexfm" name="sex"></p>
                <p>联系电话：<input type="text" class="tel" maxlength="11" value="" id="Utel" name="mobile"></p>
                <input type="hidden" name="sid" value="770" id="Usid">
                <p><input id='firstQuick' type="submit" class="btn" value="提交"/></p></div>
                <div onmouseover="jQuery('#secly_1').show();" onmouseout="jQuery('#secly_1').hide();" style="display: none;" id="secly_1" class="secMsg">
                <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
                <ul>
                <li><a href="javascript:;" onclick="onClickBBSFrom('此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
                <li><a href="javascript:;" onclick="onClickBBSFrom('请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
                <li><a href="javascript:;" onclick="onClickBBSFrom('我已留下了邮箱，请将此项目详细资料发邮件给我。')">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                <li><a href="javascript:;" onclick="onClickBBSFrom('我想详细了解此项目的加盟流程，请与我联系。')">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                <li><a href="javascript:;" onclick="onClickBBSFrom('做为此项目的代理加盟商能得到哪些支持？')">做为此项目的代理加盟商能得到哪些支持？</a></li>
                <li><a href="javascript:;" onclick="onClickBBSFrom('请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
                <li class="noLine"><a href="javascript:;" onclick="onClickBBSFrom('我想加盟此项目，请电话联系我。')">我想加盟此项目，请电话联系我。</a></li></ul>
                </div>
                </form>
                </div>
                </div>
                </div>-->
                <!--加盟品牌推广 start--->
                <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/platj/css/35fe8-8296.css" />
                <div class="Pfind_money" id="pFind12" style="display:none; ">
                    <form action="" name="UbbFm" id="postFrom" method="post">
                        <input type="hidden" name="lasturl_quick" id="lasturl_quick" />
                        <input type="hidden" name="fromurl_quick" id="fromurl_quick" />
                        <input type="hidden" name="project_message_origin" id="origin_quick" class="origin_quick_check" />
                        <p class="p_title1 clearfix">
                            <span class="fr" onclick="$('#pFind12').hide();$('.gray_mask').hide();">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1b5cd-8225.png" alt="" /></span>
                        </p>
                        <div class="Pfind_money2">
                            <p class="p_title4 clearfix">
                                <span>留言内容</span>
                                <span class="fr hover_SJ" onmouseout="$('#tj_secMsg').hide();" onmouseover="$('#tj_secMsg').show();">快捷留言</span></p>
                            <style type="text/css">.secMsg { width: 360px; position: absolute; z-index: 1008; background: #fff; left: 238px; top: 113px; } .secMsg .msgIframe { width: 360px; height: 228px; position: absolute; left: 0; top: 0; z-index: -1; opacity: 0;} .sq_form .secMsg p { height: 35px; line-height: 35px; padding: 0 10px; margin: 0; overflow: hidden; color: #fff; } .secMsg p strong { float: left;} .secMsg p a { float: right; width: 13px; height: 13px; margin-top: 7px; outline: none;} .sq_form .secMsg ul { padding:5px 10px; } .secMsg ul li { height: 25px; line-height: 25px; padding-left: 11px; overflow: hidden; white-space: nowrap; border-bottom: 1px dashed #ccc; background: url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/90cc8-9801.jpg) no-repeat 3px center;}</style>
                            <div class="secMsg" id="tj_secMsg" style="display: none; left:273px; top:78px;" onmouseout="$('#tj_secMsg').hide();" onmouseover="$('#tj_secMsg').show();">
                                <iframe class="msgIframe" frameborder="0"></iframe>
                                <p style="background:#e93c00;">
                                    <strong>您可以根据意向选择下列[快捷留言]</strong>
                                    <a style="margin-top:7px;" target="_self" href="javascript:;" onclick="$('.secMsg').hide();">
                                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/3bb8b-4720.gif"></a>
                                </p>
                                <ul style="border:1px solid #e93c00;">
                                    <li>
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this))">此项目很好，请尽快联系我详谈。</a></li>
                                    <li>
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this))">请问我所在的地区有此项目加盟商了吗？</a></li>
                                    <li>
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                                    <li>
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                                    <li>
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                                    <li>
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">请问投资此项目所需要的费用有哪些？</a></li>
                                    <li class="noLine">
                                        <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">我想加盟此项目，请电话联系我。</a></li>
                                </ul>
                            </div>
                            <textarea onkeyup="keyUp();" name="content" id="js_textarea" cols="30" rows="10">请输入您的疑问</textarea>
                            <div class="name_box">
                                <p>姓&nbsp;名：
                                    <input type="text" class="name" value="您的姓名" id="Uname" name="sname" maxlength="6" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}">性别：
                                    <label>
                                        <input type="radio" class="a3" value="0" id="sexm" name="sex" checked="">男</label>
                                    <label>
                                        <input type="radio" class="a3" value="1" id="sexfm" name="sex">女</label></p>
                                <p>手&nbsp;机：
                                    <input type="text" class="tel" maxlength="11" value="手机号码" id="Utel" name="mobile" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}"></p>
                                <input type="hidden" name="sid" value="770" id="Usid">
                                <p>
                                    <input id='firstQuick' type="button" value="提交" class="btn" onclick="onClickMess($(this));" /></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!--加盟品牌推广 end---></div>
        </div>
        <div class="advertisement">
            <a title="巴比酷" ad_need_click="true" ad_id="435" href="http://www.jmw.com.cn/xm6624475/" target="_blank">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/4fa1e-9972.gif" width='230' height='90' /></a>
            <a title="寻鱼私烤招商加盟" ad_need_click="true" ad_id="436" href="http://search.jmw.com.cn/jmw_user/xunyu/" target="_blank">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/551e2-8821.gif" width='230' height='90' /></a>
            <a title="千叶珠宝" ad_need_click="true" ad_id="437" href="http://www.jmw.com.cn/xm6584328/" target="_blank">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/20ee2-9171.gif" width='230' height='90' /></a>
            <a title="勾馋麻辣烫" ad_need_click="true" ad_id="451" href="http://search.jmw.com.cn/jmw_user/gcmlt/" target="_blank">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1c6c6-2025.gif" width='230' height='90' /></a>
        </div>
    </div>
    <script language="javascript" type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/js/webcall.js"></script>
    <!-- 400点击回拨 -->
    <div class="gray_mask" style="display: none;"></div>
    <div class="Pfind_money" id="click_Pfind4" style="display:none; ">
        <p class="p_title1 clearfix">
            <span class="fr" onclick="$('#click_Pfind4').hide();$('.gray_mask').hide();">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/1b5cd-8225.png" alt="" /></span>
        </p>
        <div class="Pfind_money2">
            <p class="p_title2">晨阳水漆全国免费咨询热线</p>
            <ul class="p_ul">
                <!--<li style="color:#333; font-size:16px; font-weight:bold; ">免费通话<span style="color:#e93c00;">4000-500-555转95542</span></li>-->
                <li style="color:#333; font-size:16px; font-weight:bold; ">免费通话
                    <span style="color:#e93c00;">4000-500-555</span></li>
                <li style="color:#666; font-size:12px;">
                    <span style="color:#999; font-size:12px;">请提供您的联系方式，加盟顾问会及时与您联系</span></li>
            </ul>
            <div class="name_box">
                <p>姓&nbsp;名：
                    <input type="text" class="name" fourTelUserName="fourTelUserName" value="您的姓名" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}" id="name" name="name">性别：
                    <label>
                        <input type="radio" class="a3" fourTelUserGender="fourTelUserGender" value="0" id="sex" name="tel_sex" checked="checked">男</label>
                    <label>
                        <input type="radio" class="a3" value="1" fourTelUserGender="fourTelUserGender" id="sex" name="tel_sex">女</label></p>
                <p>手&nbsp;机：
                    <input type="text" class="tel" maxlength="11" value="手机号码" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}" id="mobil" name="mobil"></p>
                <p>
                    <input type="button" value="立即咨询" class="btn" onclick="Webcall();return false;" /></p>
                <!--<p style="color:#999;"><span style="color:#126ebc;">温馨提示：</span>通话费用将由企业支付，请放心拨打！</p>--></div>
            <input type="hidden" name="tid" id="tid" value="137829">
            <input type="hidden" name="cname" id="cname" value="晨阳水漆"></div>
    </div>
    <script>function showStory(cid, phone, cname) {
            $('#click_Pfind4').show();
            $('.gray_mask').show();
        }
        function Webcall() {
            var lasturl = window.location.href;
            var fromurl = document.referrer;
            var com_id = jQuery('#tid').val();
            var tel_name;
            var tel_sex;

            cname = jQuery("#cname").val();
            cn_num = jQuery('#mobil').val();
            tel_name = jQuery("#name").val();
            tel_name = tel_name.replace(/(^\s*)|(\s*$)/g, "");
            tel_sex = $('input:radio[id="sex"]:checked').val();

            if (tel_name == '' || tel_name == '您的姓名') {
                alert('请输入您的姓名！');
                return false;
            }
            if (cn_num == '手机号码' || cn_num == '') {
                alert('请填写您的联系方式！');
                return false;
            } else {
                var yanz = /^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/;
                if (yanz.test(cn_num) == false) {
                    alert('请填写您正确的联系方式！');
                    return false;
                }
            }
            // alert('是不是这个文件那');
            /*if(com_id != '' && cn_num != 0)
{
$('.advice-3-bot').hide();
var call=new WebCall400(com_id);
call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
call.webcall(cn_num);
jQuery.ajax({
    url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
    type:'get',
    data:'com_id='+com_id+'&cb_num='+cn_num,
    cache:false,
    dataType:'jsonp',
    async:false,
    jsonp: "call_status",//服务端用于接收callback调用的function名的参数
    success:function(data,text)
    {
        alert(data.msg); 
        jQuery.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/messageFor400Index.php',
            dataType:'jsonp',
            cache:false,
            async:false,
            jsonp:'fouroorecord',
            data:'phone='+cn_num+'&target_id='+com_id+'&sex='+tel_sex+'&name='+tel_name+'&cname='+cname+'&origin=16-2&content='+'通过400电话为'+cname+'项目留言，想了解加盟流程。请尽快联系！'+'&400index_lasturl='+lasturl+'&400index_fromurl='+fromurl,
            success:function(html){
                setTimeout(sleepReload(),'2000');                    
            }
        });
    }
});
function sleepReload(){
    window.location.reload();
}
} */

            if (com_id != '' && cn_num != 0) {
                $('.advice-3-bot').hide();
                $.ajax({
                    type: 'get',
                    dataType: 'jsonp',
                    jsonp: 'fouroorecord',
                    async: false,
                    url: 'http://liuyan.jmw.com.cn/message/messageFor400Index_temporary.php',
                    data: 'is_login=' + is_login + '&phone=' + cn_num + '&target_id=' + com_id + '&sex=' + tel_sex + '&name=' + tel_name + '&cname=' + cname + '&origin=16-2&content=' + '通过全国免费热线咨询' + cname + '项目留言，想了解加盟流程。请尽快联系！' + '&400index_lasturl=' + lasturl + '&400index_fromurl=' + fromurl,
                    success: function(html) {
                        if (html.status == 'login') {
                            $('#click_Pfind4').hide();
                            $('.gray_mask').hide();
                            /*var call=new WebCall400(com_id);
            call.fourTelUserName=$('[fourTelUserName="fourTelUserName"]').val();
            call.fourTelUserGender=$('[fourTelUserGender="fourTelUserGender"]:checked').val();
            call.webcall(cn_num);
            jQuery.ajax({
                url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                type:'get',
                data:'com_id='+com_id+'&cb_num='+cn_num,
                cache:false,
                dataType:'jsonp',
                async:false,
                jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                success:function(data,text)
                {
                    alert(data.msg);
                    setTimeout(sleepReload(),'2000');       
                }
            });*/
                            alert('留言成功！');
                            window.location.reload();
                        } else if (html.status == 'unlogin') {
                            $('#two_message_id').val(html.id);
                        }
                    }
                });

                if (is_login == 'unlogin') {
                    $('#two_telephone').val(cn_num);
                    //$('#tel_400').val('tel_400');
                    $('#click_Pfind4').hide();
                    $('#click_YZ').show();
                    $('#black_ceng').hide();
                    $('.gray_mask').show();
                    Auto_trigger();
                }

            }
        }
        function sleepReload() {
            window.location.reload();
        }</script>
</div>
<!--footer-->
<?= $this->render('@gallerycms/views/platj/pc/_footer'); ?>
