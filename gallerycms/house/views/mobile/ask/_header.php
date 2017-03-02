<!--body onselectstart="return false" -->
<style>.bodymargintop{ margin-top:44px; } #dt-hd.navstyle2{ padding: 0; position: fixed; z-index: 39; width: 100%; top: 0; } .icon-tbt { background: url('<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/10d63-8906.png') no-repeat; background-size: 187.5px 1087px; background-position: -128px -1068px; display: inline-block; height: 21px; width: 62px; margin-top: 11px; margin-left: 27px; } .back-home-page a b { vertical-align: 5px; display: inline-block; padding-left: 4px; font-size:14px; } #back { width: 10px; height: 10px; border-top: 2px solid #7c7c7c; border-left: 2px solid #7c7c7c; -webkit-transform: rotate(-45deg); transform: rotate(-45deg); display: block; position: absolute; left: 15px; top: 16px; z-index: 10; } .navigation{ height:34px!important; background-position: -60px -296px!important; top: 7px!important; } .dn{ display: none; } #dt-hd-nav .dn{ display:none; } .loadapp-dt-hd{ position:relative; top:3px; z-index:10; width: 60px; height: 36px; } .loadapp-dt-hd .loadapp-text{ position:absolute; left:6px; z-index:2; width: 60px; height: 36px; } .loadapp-dt-hd .loadapp-icon{ position:relative; float:right; background-color: #fff; z-index:3; width: 62px; height: 25px; } .loadapp-dt-hd .loadapp-text p{ font-size:12px; line-height:12px; color:#5ACC9A; text-align:center; } .loadapp-dt-hd .loadapp-icon em{ display: block; width: 21px; height: 25px; background:url(<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/3503c-7033.png) no-repeat -92.5px -300px; background-size:187.5px 1087px; }</style>
<!-- 0级 -->
<!--二级-->
<header id="dt-hd" class="navstyle2">
    <a class="zxzs-set" dataptag="2_3_10_487" href="<?= "/{$this->context->currentCityCode}/"; ?>" title="<?= Yii::$app->params['siteNameBase']; ?>">
        <i id="back"></i>
    </a>
    <h1 class="back-home-page">
        <a class="zxzs-set" dataptag="2_3_10_487" href="<?= "/{$this->context->currentCityCode}/"; ?>" title="<?= Yii::$app->params['siteNameBase']; ?>">
            <span class="icon-tbt"></span>
            <b>首页</b>
        </a>
    </h1>
    <script type="text/javascript">$(document).ready(function() {
            /*动态确定返回链接*/
            $.ajax({
                'url': '//m.to8to.com/xiaoguotu/reUrl?' + Math.random(),
                'cache': false,
                'async': false,
                'type': 'get',
                'dataType': "json",
                'success': function(data) {
                    if (data) {
                        if (document.getElementById("rebackUrl")) {
                            var rebackUrl = "//m.to8to.com/bj";
                            if (rebackUrl == '') {
                                var rebackUrl = (data.rebackUrl != undefined) ? data.rebackUrl: '/xiaoguotu';
                            }
                            document.getElementById("rebackUrl").href = rebackUrl;
                        }
                        if (document.getElementById("pre_Url")) {
                            var pre_Url = (data.pre_Url != undefined) ? data.pre_Url: '/xiaoguotu';
                            document.getElementById("pre_Url").href = pre_Url;
                        }
                    }
                }
            });
        });</script>
    <!--右边导航按钮-->
    <!--<nav id="dt-hd-nav">
        <i class="icon-dt-hd navigation dn" id="add_nav_hovers"></i>
        <a href="/apps?headiptag=2_7_18_1177&headaptag=2_7_18_1178" data-ptag="2_7_18_1176" class="dn">
            <div class="loadapp-dt-hd">
                <div class="loadapp-text">
                    <p>一站式</p>
                    <p>装修神器</p>
                </div>
                <div class="loadapp-icon">
                    <em></em>
                </div>
            </div>
        </a>
    </nav>-->
    <?php //echo $this->render('_nav'); ?>
    <!--页码-->
    <span class="img-count"></span>
</header>
