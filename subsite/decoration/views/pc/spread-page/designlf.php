<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/favicon.ico';
$urls = $this->context->navUrls;
?>
<link rel="shortcut icon" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/common/css/webcommon.css"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/web/mycss/main.css"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/web/mycss/active_page.css"/>
<script>
document.write('<script type="text/javascript"  data-lxb-uid="23355229" data-lxb-gid="328332" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"></scr' + 'ipt>' );
</script>
<!--header-->
<header class="header clearfloat">
    <div class="header_top">
        <div class="toptext container">
            <a class="mr20" href="<?= $urls['city']; ?>">兔班长</a>
            <span class="mr10">装修就上兔班长</span>
            <a class="mr20 fontcolor" href="<?= $urls['index'] . '/beijing/'; ?>">北京</a>
            <!--<em>|</em>
            <a class="active" href="#">北京</a>
            <a href="#">上海</a>-->
			<span class="top_phone fontcolor"> 7*24小时免费直拨 <?= Yii::$app->params['siteHotline']; ?>
                <!--<span class="top_time">（服务时间：8：00~21：00）</span>-->
            </span>
            <i></i>
        </div>
    </div>
    <div class="container">
        <div class="logo clearfloat">
            <div class="logo_left lf">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/third/designlf/<?= $this->context->merchantInfo['code']; ?>.png" />
            </div>

            <div class="logo_center lf">
                <div class="logo_select  lf">
                    <span id="logo_text" class="logo_text">
                        <i>装修公司</i>
                        <em class="icon_arrows"></em>
                    </span>
                    <ul class="logo_list">
                        <li><a>装修公司</a></li>
                        <li><a>装修问答</a></li>
                    </ul>
                </div>

                <input class="logo_input lf " type="text" placeholder="挑选您心仪的装修公司"/>
                <input type="button" value="搜索" class="logo_search  lf">

            </div>
            <ul class="logo_right rt f12">
                <li class="lf">
                    <a class="" href="<?= $urls['merchant']; ?>" title="装修公司">
                        <i class="right_icon" style="background-position: -240px 0"></i>
                    </a>
                    <a href="<?= $urls['merchant']; ?>" title="装修公司">装修公司</a>
                </li>
                <li class="lf">
                    <a class="" href="<?= $urls['ask']; ?>" title="装修问答">
                        <i class="right_icon" style="background-position: -290px 0"></i>
                    </a>
                    <a href="<?= $urls['ask']; ?>" title="装修问答">装修问答</a>
                </li>
                <li class="lf">
                    <a class="" href="<?= $urls['quote']; ?>" title="装修报价">
                        <i class="right_icon" style="background-position: -340px 0"></i>
                    </a>
                    <a href="<?= $urls['quote']; ?>" title="装修报价">装修报价</a>
                </li>
            </ul>
        </div>
    </div>
    <!--导航条-->
    <div class="nav">
        <ul class="container clearfloat">
            <li><a href="<?= $urls['index']; ?>" title="首页">首页</a></li>
            <li><a href="<?= $urls['city'] . 'merchant/'; ?>" title="北京装修公司">北京装修公司</a></li>
            <li><a href="<?= $urls['sample']; ?>" title="装修效果图">效果图</a></li>
            <li><a href="<?= $urls['ask']; ?>" title="装修问答">装修问答</a></li>
            <li><a class="active" href="">免费设计</a></li>
            <li><a href="<?= $urls['quote']; ?>" title="装修报价">装修报价</a></li>
        </ul>
    </div>
</header>
<!--banner 背景图-->
<a href="#form_list" class="active_banner"></a>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    //window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<?= $this->render('_designlf-content'); ?>
<!--页脚-->
<footer>

    <div class="footer_row2">
        <p>
            <a hidefocus="" href="<?= $urls['desc']; ?>" rel="nofollow">关于我们</a> | 
            <a hidefocus="" href="<?= $urls['friendlink']; ?>" rel="nofollow">友情链接</a> |
            <a hidefocus="" href="<?= $urls['guestbook']; ?>" rel="nofollow">意见反馈</a> |
            <a hidefocus="" href="<?= $urls['statement']; ?>" rel="nofollow">法律声明</a> |
            <a hidefocus="" href="<?= $urls['contactus']; ?>" rel="nofollow">联系我们</a>
        </p>
        <p>免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系。</p>
        <p><?= $this->context->copyStr; ?></p>
        <p>兔班长装修网(隶属北京维纳亚科技有限公司）<?= $this->context->icpStr; ?></p>
		<p><?= Yii::$app->params['siteAddressInfo']; ?></p>
    </div>
</footer>
<script src="<?= Yii::getAlias('@assetself'); ?>/common/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/web/myjs/mainFunction.js"></script>
<script>
    $(function () {
        main();  //头部选择类型切换
        submitPage();//tab 标签切换
        slide_help(); //返回顶部
        sign_area(); //页面达到一定高度。。。只显示收集信息框
    })
    var company = '';
    $('.active_company li').click(function () {
        if ($(this).find('input').is(':checked')) {
            $(this).find('input').prop('checked', false);
        } else {
            $(this).find('input').prop('checked', true);
            company = $(this).find('input').val();
//            console.log(company);
        }
    })

    $('.active_company li input').click(function () {
        if ($(this).is(':checked')) {
            $(this).prop('checked', false);
        } else {
            $(this).prop('checked', true);
        }
    })

    function activeCheck($obj) {
        var uname = '', uphone = '', umeter = '';
        $form = $obj.closest("form");
        uname = $.trim($("input[name='uname']").val());
        uphone = $.trim($("input[name='uphone']").val());
        umeter = $.trim($("input[name='umeter']").val());
//        console.log(mobile);
        var regPhone = /^1[3578]\d{9}$/;
        if (uname == '') {
            $('.err_tips').text('姓名不能为空');
            return false;
        }
        if (uphone == '') {
            $('.err_tips').text('手机号码不能为空');
            return false;
        }
        if (!regPhone.test(uphone)) {
            $('.err_tips').text('请填写正确的手机号码');
            return false;
        }
        if (umeter == '') {
            $('.err_tips').text('面积不能为空');
            return false;
        }
        else {
            $('.err_tips').text('');
        }

        var companyName=$('input[type=checkbox]:checked').map(function(){
            return $(this).val();
        }).get().join(',');
        var houseStyle=$('.house_style option:selected').val();
        var housePrice=$('.house_price option:selected').val();
        var visitedName=$('input[name=visited_time]:checked').val();
        var note = '装修公司：'+companyName+';'+'户型结构:'+houseStyle+';'+'装修预算:'+housePrice+';'+'回访时间：'+visitedName;
        alert(note);

    var $data = {
        'name': uname,
        'mobile':uphone ,
        'area_input': umeter,
        'note': note,
        'cid': $('#cid').val(),
        'info_id': 1,
        '_csrf': $('#_csrf').val(),
        'position': 'shejiliangfang'
    };
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
				alert('报名成功');
                window.location.href = 'http://www.tu8zhang.com/';
            }else if ( data.status == 400 ) {
                alert(data.message);
            } else {
                alert('报名失败');
            }
        }//end success

    })// end ajax
    }
</script>
<script>
document.getElementById("callBtn").onclick = function () { 
    lxb.call(document.getElementById("telInput"));
};
</script>
