<?php
use yii\helpers\Html;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="keywords" content=" 居然之家自营的家装 没有增项的家装 先行赔付消费无忧/不环保全额赔施工款/承诺预算0增加/质保领先行业1年" />
<meta name="description" content="http://www.juranliwu.com/" />
<title>大牌HUI_居然之家_乐屋装饰</title>
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/css/947da-3798.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/js/jquery-1.8.3.min.js" charset="gb2312"></script>
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/css/c5512-7921.css" rel="stylesheet" type="text/css" />
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/js/layer.js" type="text/javascript"></script>
<style type="text/css"></style>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>

<body>
<script type="text/javascript">function submitform2() {

        var d = new Date();
        var time = d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate() + "  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

        document.getElementById("orderDate").value = time;

    var myreg = /^1[3|4|5|7|8]\d{9}$/;///^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if (!myreg.test($("#telOfCustomer2").val())) {
        alert('请输入正确的手机号码!');
        return false;
    }
    var $data = {
        'name': $("#nameOfCustomer2").val(),
        'mobile': $("#telOfCustomer2").val(),
        'position': 'top'
    };

    signup($data);
}

function signup($data)
{
    $data.position = $("#position").val() + '-' + $data.position;
    $data.position_name = $("#position_name").val();
    $data.info_id = $("#info_id").val();
    $data.cid = $("#cid").val();
    $data._csrf = $("#_csrf").val();
    console.log($data);
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
						var redirectUrl = $("#return_url").val();
						if (redirectUrl) {
                //var redirectUrl = window.BASE_URL + '/bm-result.html';
                    parent.location.href = redirectUrl;
						}
						alert('报名成功');
            }else if ( data.status == 400 ) {
                alert(data.message);
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            } else {
                alert('报名失败');
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            }
        }//end success

    })// end ajax
    return false;
}
</script>
<script type="text/javascript">$(document).ready(function() {
        $('.fsdx').on('click',
        function() {
            layer.open({
                type: 2,
                title: '',
                shadeClose: true,
                shade: 0.8,
                area: ['384px', '554px'],
                content: 'tc.html' //iframe的url
            });
        });
    });</script>
<!--placeholder兼容不同浏览器-->
<script>$(document).ready(function() {
        var doc = document,
        inputs = doc.getElementsByTagName('input'),
        supportPlaceholder = 'placeholder' in doc.createElement('input'),

        placeholder = function(input) {
            var text = input.getAttribute('placeholder'),
            defaultValue = input.defaultValue;
            if (defaultValue == '') {
                input.value = text
            }
            input.onfocus = function() {
                if (input.value === text) {
                    this.value = ''
                }
            };
            input.onblur = function() {
                if (input.value === '') {
                    this.value = text
                }
            }
        };

        if (!supportPlaceholder) {
            for (var i = 0,
            len = inputs.length; i < len; i++) {
                var input = inputs[i],
                text = input.getAttribute('placeholder');
                if (input.type === 'text' && text) {
                    placeholder(input)
                }
            }
        }
    });</script>
<!--placeholder结束-->
<div class="foot_applyBox">
    <div class="foot_apply">
        <input type="text" id="nameOfCustomer2" placeholder="您的姓名" />
        <input type="text" id="telOfCustomer2" placeholder="您的电话" />
        <input class="tijiao" type="submit" value="点击报名" onclick="submitform2()" /></div>
</div>
<form action="http://lohohd.juran.com.cn/juran/jrSignup/save" method="post">
    <!--客户ID-->
    <input id="customerId" hidden="true" htmlEscape="false" maxlength="6" class="input-xlarge " />
    <!--活动ID-->
    <input id="codeOfEvent" hidden="true" value="170222" htmlEscape="false" maxlength="36" class="input-xlarge " />
    <!--活动标题-->
    <input id="titleOfEvent" hidden="true" value="大牌HUI" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--活动类型-->
    <input id="typeOfEvent" hidden="true" value="乐屋PC" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--渠道-->
    <input id="channelOfCustomer" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " />
    <!--报名时fixed间-->
    <input id="orderDate" hidden="true" value="" htmlEscape="false" maxlength="50" class="input-xlarge " /></form>
<div class="zong">
    <div class="header_bg"></div>
    <div>
        <div class="nav">
            <div class="logo">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/cbcdf-4911.png"></div>
            <ul class="fixed">
                <li>
                    <a href="http://www.juranliwu.com/lw">首页</a></li>
                <li>
                    <a href="http://www.juranliwu.com/lw/jrDesigner">设计师</a></li>
                <li>
                    <a href="http://www.juranliwu.com/lwcase">案例</a></li>
                <li>
                    <a href="http://www.juranliwu.com/lw/jrBuildingSite">在施工地</a></li>
                <li>
                    <a href="http://www.juranliwu.com/juran/event/161021/index.html">居然别墅</a></li>
            </ul>
            <div class="phone">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/ea61d-6411.png"></div>
        </div>
        <div class="tu_2"></div>
        <div class="tu_3"></div>
        <div style="  height:480px; background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/4fb81-1748.jpg) no-repeat; background-position: center center;">
            <div>
                <a name="bm"></a>
                <iframe src="/jr-bm.html" runat="server" id="mapbm" name="mapbm" style=" height:480px; width: 100%" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="tu_4"></div>
        <div class="tu_6">
            <a type="button" name="button" id="btn2" href="#bm"></a>
        </div>
        <div class="design_bg">
            <div class="main1140">
                <!--拍摄服务流程开始-->
                <div class="process-box">
                    <ul class="three">
                        <li></li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg8"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">李雅堂</p>
                                <p class="desc_1">北四二店设计师NO.1</p></div>
                        </li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg9"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">程建民</p>
                                <p class="desc_1">北四二店设计师NO.1</p></div>
                        </li>
                        <li></li>
                    </ul>
                    <ul class="one">
                        <li></li>
                        <li style="margin-left: -145px;">
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg1"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">曹鸿东</p>
                                <p class="desc_1">延庆二店设计师NO.1</p></div>
                        </li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg2"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">吴本根</p>
                                <p class="desc_1">北四一店设计师</p></div>
                        </li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg3"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">王超</p>
                                <p class="desc_1">顺义店设计师</p></div>
                        </li>
                        <li style="margin-left: -145px;"></li>
                    </ul>
                    <ul class="two">
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg4"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">梁娜</p>
                                <p class="desc_1">十里河设计师</p></div>
                        </li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg5"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">李晗</p>
                                <p class="desc_1">北四一店设计师</p></div>
                        </li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg6"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">胡江</p>
                                <p class="desc_1">金源店设计师</p></div>
                        </li>
                        <li>
                            <div class="kuang kuang1"></div>
                            <div class="kuang kuang2"></div>
                            <div class="text1">
                                <div class="bg bg7"></div>
                            </div>
                            <div class="text2">
                                <div class="mengban"></div>
                                <p class="desc">罗刚</p>
                                <p class="desc_1">玉泉营店设计师实力担当</p></div>
                        </li>
                    </ul>
                </div>
                <!--拍摄服务流程结束--></div>
        </div>
        <div class="tu_8">
            <div class="site_big">
                <div class="site01">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/a7b13-4993.png">
                    <div class="black_box">
                        <h1>顺义天竺新新家园10套</h1></div>
                </div>
                <div class="site02">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/f13f4-5881.png">
                    <div class="black_box">
                        <h1>金隅山墅 5套</h1></div>
                </div>
                <div class="site03">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/d573e-2994.png">
                    <div class="black_box">
                        <h1>固安牛坨孔雀城8套</h1></div>
                </div>
                <div class="site04">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/65e52-9765.png">
                    <div class="black_box">
                        <h1>顺义鲁能七号院12套</h1></div>
                </div>
                <div class="site05">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/a33c4-8741.png">
                    <div class="black_box">
                        <h1>通州鲁能格拉斯小镇10套</h1></div>
                </div>
                <div class="site06">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/154d7-1126.png">
                    <div class="black_box">
                        <h1>丰台区领袖翡翠山3套</h1></div>
                </div>
                <div class="site07">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/f4096-5553.png">
                    <div class="black_box">
                        <h1>燕郊华堂高尔夫庄园4套</h1></div>
                </div>
                <div class="site08">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/e5fa6-1513.png">
                    <div class="black_box">
                        <h1>恒盛波尔多小镇12套</h1></div>
                </div>
                <div class="site09">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/img/5a43d-3642.png">
                    <div class="black_box">
                        <h1>龙湖香堤溪岸5套</h1></div>
                </div>
            </div>
            <a type="button" name="button" id="btn3" href="#bm"></a>
        </div>
        <div class="tu_9"></div>
        <div class="tu_10"></div>
        <div class="tu_11"></div>
        <div class="tu_12">
            <a type="button" name="button" id="btn4" href="#bm"></a>
        </div>
        <div class="tu_13"></div>
        <div class="tu_14"></div>
        <div class="tu_15">
            <a type="button" name="button" id="btn5" href="#bm"></a>
        </div>
        <div class="tu_16"></div>
        <div class="tu_17">
            <a type="button" name="button" id="btn6" href="#bm"></a>
        </div>
        <div class="tu_18"></div>
        <div class="tu_19">
            <a type="button" name="button" id="btn7" href="#bm"></a>
        </div>
        <div class="tu_20"></div>
        <div class="tu_21"></div>
        <div class="tu_22"></div>
        <div class="tu_23">
            <a type="button" name="button" id="btn9" href="#bm"></a>
        </div>
        <div class="footer">
            <div>
                <a href="http://lohohd.juran.com.cn/">首页</a>|
                <a href="http://www.juranliwu.com/lw/readme" target="_blank">公司简介</a>|
                <a href="http://www.juranliwu.com/lwcommu" target="_blank">热装小区</a>|
                <a href="http://www.juranliwu.com/lw/jrDesigner" target="_blank">设计团队</a>
                <div>Copyright (C)居然之家 2003-2016, All Rights Reserved. 京ICP备05048971号</div></div>
        </div>
    </div>
    <!-- 返回顶部-->
    <script type="text/javascript" left="80%" bottom="20%" text="返回顶部" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/js/x-return-top.min.js"></script>
</div>
<!-- 返回顶部over-->
<!---- <script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/js/pc.min.js" id="zhichiload"></script>
<div class="lxth">
<input name="telInput" id="telInput" type="text" placeholder="请输入电话号码" class="ione"/>
<input name="callBtn" id="callBtn" type="button" value="" class="itwo"/></div>
---->
<map name="Map" id="Map">
    <area shape="rect" coords="176,60,230,80" href="http://www.juranliwu.com/" target="_blank" />
    <area shape="rect" coords="285,60,355,79" href="http://www.juranliwu.com/lw/jrDesigner" target="_blank" />
    <area shape="rect" coords="419,60,502,79" href="http://www.juranliwu.com/lw/readme" target="_blank" />
    <area shape="rect" coords="563,61,640,79" href="http://www.juranliwu.com/lw/wiki" target="_blank" />
    <area shape="rect" coords="701,61,777,78" href="http://www.juranliwu.com/lw/readme" target="_blank" /></map>
<map name="Map2" id="Map2">
    <area shape="rect" coords="14,5,280,49" href="http://www.juranliwu.com/lw/" target="_blank" /></map>
<map name="Map6" id="Map6">
    <area shape="rect" coords="72,224,1130,457" href="https://detail.tmall.com/item.htm?spm=a1z10.5-b.w4011-14129561946.57.9UrDN0&id=536477006052&rn=4e81ee06bfffb452ce6bcd5fdb203b4b&abbucket=13&skuId=3202746296091" target="_blank" /></map>
<!-- ZZCode -->
<script type="text/javascript">var _zzsiteid = "gx2UH0eocQp";
    var _zzid = "gx2UH0eocQo"; (function() {
        var zz = document.createElement('script');
        zz.type = 'text/javascript';
        zz.async = true;
        zz.src = 'https:' == document.location.protocol ? 'https://static.zhiziyun.com/trace/api/trace.js': 'http://static.zhiziyun.com/trace/api/trace.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(zz, s);
    })();</script>
<!-- end ZZCode -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/spreadjr/js/pc.min.js" id="zhichiload"></script>
<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://": " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F831c2d1d025ae244c03cfb21493fd443' type='text/javascript'%3E%3C/script%3E"));</script>
<map name="Map11" id="Map11">
    <area shape="rect" coords="488,416,716,479" href="#bm" /></map>
<input type="hidden" id="return_url" value="http://www.juran.com.cn/" />
<input type="hidden" id="cid" value="672" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
</body>

</html>
