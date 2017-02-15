<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609', '235a4-6274', 'cd7cd-5015'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj/m']);
$this->params['jsStr'] = $this->render('@gallerycms/views/layouts-m/platj-merchant/_js-header');//, ['jsFiles' => $jsFiles]);
?>
<!-- 官网活动  start-->
<section class="ziXun"> 
    <h2 class="wrap">晨阳水漆官网活动</h2>
    <div class="hongBao clear"> 
        <a class="hongBao_l fl" onclick="$('#Pline_consult').show();$('.gray_mask').show();$('#n_content').val('我想咨询晨阳水漆加盟项目，并领取开店礼包！');$('#origin').val(7);" style="margin-right:10px;widht:47%">

            <dl class="clear"> 
                <dt class="fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/45ce1-7696.png" alt="" /></dt>
                <dd class="fl">
                    <p>开新店 领礼包</p>
                    <p><span>价值</span>  <span>￥</span>880</p>
                </dd>
            </dl>
            <p class="red_p">中国加盟网赠送</p>
        </a>
        <a class="hongBao_l fr" onclick="$('#Pline_consult').show();$('.gray_mask').show();$('#n_content').val('我想咨询晨阳水漆加盟项目，并领取开店礼包！');$('#origin').val(7);">
            <dl class="clear"> 
                <dt class="fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/45ce1-7696.png" alt="" /></dt>
                <dd class="fl">
                    <p>开新店 领礼包</p>
                    <p><span>价值</span>  <span>￥</span>1880</p>
                </dd>
            </dl>
            <p class="red_p">中国加盟网赠送</p>
        </a>
    </div>
</section>
<!-- 官网活动  end-->
<style type="text/css">
.youLike dl{ background:#f5f5f5; width:48%; border-radius:10px 10px 0 0; margin-top:14px;}
.youLike dl a dt{ position:relative; }
.youLike dl a dd{ height:30px; line-height:30px; padding-left:3px; box-sizing:border-box; }
.youLike .p1{ font-size:0.85rem; width:100%; height:25px; line-height:25px; padding:0 2px; box-sizing:border-box; overflow:hidden; color:#fff; position:absolute; bottom:0; left:0; background:rgba(0,0,0,.7); }
.youLike .p2{ color:#aeaeae; font-size:0.8rem; }
.youLike .p2 em{ font-size:0.9rem; color:#e40000; font-weight:bold; }
.youLike .p2 .span_money{ margin-left:4px; }
.youLike .p2 .img1{ width:14px; height:14px; margin-top:8px;  }
.youLike dl dt img{ width:100%; height:100%;}
@media (min-width:315px) and (max-width:340px){
    .youLike .p2{ font-size:0.75rem; }
    .youLike .p2 .img2{ margin:1px 0px 0 1px; }
    .youLike .p2 .span_money{ margin-left:1px;}
    .youLike dl a dt{ height:96px; overflow:hidden; }
}
@media (min-width:351px) and (max-width:374px){
    .youLike .p2{ font-size:0.75rem; }
    .youLike .p2 .img2{ margin:1px 3px 0 4px; }
    .youLike .p2 .span_money{ margin-left:4px;}
}
@media (min-width:341px) and (max-width:360px){
    .youLike dl a dt{ height:110px; overflow:hidden; }
}
@media (min-width:361px) and (max-width:385px){
    .youLike dl a dt{ height:115px; overflow:hidden; }
}
@media (min-width:386px) and (max-width:440px){
    .youLike dl a dt{ height:125px; overflow:hidden; }
}
@media (min-width:441px) and (max-width:599px){
    .youLike dl a dt{ height:155px; overflow:hidden; }
}
@media screen and (min-width:600px) {
    .youLike dl a dt{ height:245px; overflow:hidden; }
}
 </style>
<!--猜你喜欢的加盟项目 start-->
<section class="ziXun"> 
    <h2 class="wrap">猜你喜欢的加盟项目</h2>
    <div class="wrap youLike clear"> 
                        <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm137829/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b0c59-2746.jpg" alt="" />
                            <p class="p1">晨阳水漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>5~30</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm87619/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/9ae0f-5385.jpg" alt="" />
                            <p class="p1">防水博士加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>5~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm72966/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/1511b-3381.jpg" alt="" />
                            <p class="p1">泰诗尔壁膜加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm144347/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/df0f3-6345.jpg" alt="" />
                            <p class="p1">涂艺宝涂料加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>5~20</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm79341/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/d564b-1823.jpg" alt="" />
                            <p class="p1">樱花涂料加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>3~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm61213/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/e8e61-6500.jpg" alt="" />
                            <p class="p1">多乐士墙面漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm41954/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/82d17-3869.jpg" alt="" />
                            <p class="p1">立邦加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>10~20</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm20631/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0835b-1151.jpg" alt="" />
                            <p class="p1">科天水性漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm149696/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/5f9c9-6781.jpg" alt="" />
                            <p class="p1">杜威漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm74334/">
                        <dt>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/d1d46-4833.jpg" alt="" />
                            <p class="p1">久居香漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                        </div>
    <style>
    .more-icon {
            background: rgba(0, 0, 0, 0) url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/5b596-3112.png") no-repeat scroll 0 0 / 12px auto;
            display: inline-block;
            height: 6px;
            margin-left: 8px;
            width: 12px;
        }
    </style>
    <a href="http://m.jmw.com.cn/so/i89/"  style="font-size:12px;color:#62c77b;text-align: center;width: 100%;display:block; height:40px; line-height:40px; margin:auto;">查看更多加盟项目
        <i class="more-icon" id="more_jiameng"></i>
    </a>
</section>
<!--猜你喜欢的加盟项目 end-->
<!-- 创业问答  start-->
<section class="ziXun"> 
    <div class="wen_p wrap clear">
                        <h2 class="fl" style="border-bottom:none;"><a href="http://m.jmw.com.cn/xm137829/bbs/" style="font-size: 16px;color:#e44b46;" title="晨阳水漆创业问答">晨阳水漆创业问答</a></h2>
                    <a href="http://m.jmw.com.cn/xm137829/bbs/" title="更多创业问答" class="fr">更多创业问答</a>
    </div>
    <ul class="wrap answer" style="padding-bottom:7px;"> 
                        <li class="clearfix li1" style="height:48px;line-height:48px;">
                    <a style="color:#333;" href="http://bbs.jmw.com.cn/thread-46969/1/1.html">
                        现在自己开店好，还是做加盟好...                     </a>
                    <span class="fr">
                        2016-1-26                       </span>
                </li>
                                    <li class="clearfix li1" style="height:48px;line-height:48px;">
                    <a style="color:#333;" href="http://bbs.jmw.com.cn/thread-46970/1/1.html">
                        加盟费多少？后期有什么扶持？                        </a>
                    <span class="fr">
                        2016-1-26                       </span>
                </li>
                                    <li class="clearfix li1" style="height:48px;line-height:48px;">
                    <a style="color:#333;" href="http://bbs.jmw.com.cn/thread-46973/1/1.html">
                        赚钱吗？如何才能经营好？                        </a>
                    <span class="fr">
                        2016-1-26                       </span>
                </li>
                
                </ul>
</section>
<!-- 创业问答  end-->
<!-- 网友点评 start-->
<section class="ziXun"> 
    <div class="wen_p wrap clear">
                    <h2 class="fl" style="border-bottom:none;"><a style="font-size: 16px;color:#e44b46;" href="http://m.jmw.com.cn/xm137829/wangyoudianping/">晨阳水漆网友点评</a></h2>
        <span class="fr">已有<a href="http://m.jmw.com.cn/xm137829/wangyoudianping/">29</a>条点评</span>
                    </div>
    <div class="pingjia wrap"> 
        <div class="img-scroll">
                <span class="prev"></span>
                <span class="next"></span>
                <div class="img-list">
                    <ul class="clear" style="margin-left: 0px;padding-bottom:7px;">
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            晨阳水漆后，觉得这个品牌挺不错的，整体感觉不错，很想加盟这个品牌。                              </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="18780" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_18780"><img alt="" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_18780">2</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            晨阳水漆了解后觉得品牌整体还不错，打算加盟这个品牌                              </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="18705" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_18705"><img alt="" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_18705">0</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            觉得晨阳水漆有一定的品质，加盟政策了解了一下，迟迟力度还行，想加盟。                                </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="17758" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_17758"><img alt="" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_17758">0</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            晨阳水漆，在中国加盟网了解后，通过电话咨询了对方，觉得这个品牌总体感觉还是挺不错...                             </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="17632" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_17632"><img alt="" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_17632">0</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            </ul>
                </div>
        </div>
    </div>
</section>
<script type='text/javascript'> 
function hits(obj){
    var suid = $(obj).attr('sid');
    var set = $(obj).attr('set');
    var target_id = $(obj).attr('target_id');
        $.ajax({
            type: "GET",
            url:'http://rating.jmw.com.cn/adminSetHits.php',
            data:"sid="+suid+"&set="+set+'&target_id='+target_id,
            dataType:'jsonp',
            cache:false,
            jsonp:"jsonpcallback",
            success: function(html){
            if(html==1){
                if(set=='up'){
                    var info = "支持成功！";
                }else{
                    var info = "反对成功！";
                }
            }else if(html==-1){
                if(set=='down'){
                    var info = "您已经支持过了！";
                }else{
                    var info = "您已经反对过了！";
                }
            }
                $.ajax({
                    type: "GET",
                    async:true,
                    url:'http://m.jmw.com.cn/demo.php', 
                    data:"pid="+target_id+"&suid="+suid,
                    dataType:'html',
                    cache:false,
                    success: function(data){
                        $('#count_zan_'+suid).html(data);
                    } 
                });
                
            }
        });
        
    }
</script>
<script type="text/javascript">
     function DY_scroll(wraper,prev,next,img,speed,or)
     { 
      var wraper = $(wraper);
      var prev = $(prev);
      var next = $(next);
      var img = $(img).find('ul');
      var w = img.find('li').outerWidth(true);
      var s = speed;
      next.click(function()
           {
            img.animate({'margin-left':-w},function()
                      {
                       img.find('li').eq(0).appendTo(img);
                       img.css({'margin-left':0});
                       });
            });
      prev.click(function()
           {
            img.find('li:last').prependTo(img);
            img.css({'margin-left':-w});
            img.animate({'margin-left':0});
            });
      if (or == true)
      {
       ad = setInterval(function() { next.click();},s*1000);
       wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});
      }
     }
     DY_scroll('.img-scroll','.prev','.next','.img-list',3,false);// true为自动播放，不加此参数或false就默认不自动
</script>
<!-- 网友点评 end-->

<!-- 加盟资讯 start-->
<section class="ziXun"> 
    <div class="wen_p wrap clear">
                        <h2 class="fl" style="border-bottom:none;"><a style="font-size: 16px;color:#e44b46;" href="http://m.jmw.com.cn/xm137829/zixun/">晨阳水漆加盟资讯</a></h2>
                    <a href="http://m.jmw.com.cn/xm137829/zixun/" title="更多加盟资讯" class="fr">更多加盟资讯</a>
    </div>
    <!--<ul class="wrap ziXun_ul"> -->
    <ul class="wrap ziXun_ul" style="padding-bottom:7px;"> 
                    <li class="clearfix li1" style="height:35px;line-height:35px;">
            <a style="color:#333;" href="http://jmw.com.cn/zhppdt/17532416.html">警惕最新加盟骗局 常见六种加盟...</a>
            <span class="fr">2016-04-07</span>
        </li>               
                    <li class="clearfix li1" style="height:35px;line-height:35px;">
            <a style="color:#333;" href="http://jmw.com.cn/zhkdzn/17532808.html">创业不缺好点子好项目，只缺钱怎...</a>
            <span class="fr">2016-04-14</span>
        </li>               
                    <li class="clearfix li1" style="height:35px;line-height:35px;">
            <a style="color:#333;" href="http://jmw.com.cn/zhkdzn/17532593.html">【干货】开店需知二三事</a>
            <span class="fr">2016-03-23</span>
        </li>               
                </ul>
</section>
<!-- 加盟资讯 end-->
<!-- 中国加盟网创业指导 start-->
<!--
<section class="ziXun"> 
    <h2 class="wrap">中国加盟网创业指导</h2>
    <div class="zhiDao wrap clear"> 
        <dl class="fl">
            <dt class="fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/b995b-1996.png"/></dt>
            <dd class="fl">
                <p class="p1">创业顾问-杨老师</p>
                <p class="p2">4000500555转70001</p>
            </dd>
        </dl>
        <ul class="fr phone">
            <li><a style="display:block;width:90%;margin:0 auto;" onclick="$('#Pline_consult1').show();$('.gray_mask').show();$('#kf_content').val('我想咨询晨阳水漆加盟项目，求创业顾问指点！');$('#spd_kf').html('杨老师');$('#kf_origin').val(8);"><span class="a2 fl"></span><i style="font-size: 0.6875em;line-height:32px;">在线咨询</i></a></li>
        </ul>
    </div>
    <div class="zhiDao wrap clear"> 
        <dl class="fl">
            <dt class="fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/e5ae2-3504.png"/></dt>
            <dd class="fl">
                <p class="p1">创业顾问-苏老师</p>
                <p class="p2">4000500555转70002</p>
            </dd>
        </dl>
        <ul class="fr phone">
            <li><a style="display:block;width:90%;margin:0 auto;" onclick="$('#Pline_consult1').show();$('.gray_mask').show();$('#kf_content').val('我想咨询晨阳水漆加盟项目，求创业顾问指点！');$('#spd_kf').html('苏老师');$('#kf_origin').val(10);"><span class="a2 fl"></span><i style="font-size: 0.6875em;line-height:32px;">在线咨询</i></a></li>
        </ul>
    </div>
    <div class="zhiDao wrap clear" style="border-bottom:none;"> 
        <dl class="fl">
            <dt class="fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/295c8-2055.png"/></dt>
            <dd class="fl">
                <p class="p1">创业顾问-秦老师</p>
                <p class="p2">4000500555转70003</p>
            </dd>
        </dl>
        <ul class="fr phone">
            <li><a style="display:block;width:90%;margin:0 auto;" onclick="$('#Pline_consult1').show();$('.gray_mask').show();$('#kf_content').val('我想咨询晨阳水漆加盟项目，求创业顾问指点！');$('#spd_kf').html('秦老师');$('#kf_origin').val(11);"><span class="a2 fl"></span><i style="font-size: 0.6875em;line-height:32px;">在线咨询</i></a></li>
        </ul>
    </div>
</section>
-->
<!-- 中国加盟网创业指导 end-->
<!-- 官网 start-->
    <section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/guanwang/" class="ziXun_a wrap pr" title="晨阳水漆官网"><h2>晨阳水漆官网</h2><span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">立即查看企业详情</span><i class="icon10"></i></a>
</section>
    <!-- 官网 end-->
<!-- 品牌图库 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/pinpaituku/" class="ziXun_a wrap pr" title="晨阳水漆品牌图库"><h2>晨阳水漆品牌图库</h2><span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">共有48张品牌图片<i class="icon10"></i></a>
</section>
<!-- 品牌图库 end-->
<!-- 成功案例 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/chenggonganli/" class="ziXun_a wrap pr" title="晨阳水漆成功案例"><h2>晨阳水漆成功案例</h2><span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">已有2922人成功加盟</span><i class="icon10"></i></a>
</section>
 <!-- 成功案例 end-->
<!-- 相关信息 start-->
<section class="message_list">
    <style type="text/css"> 
    @media screen and (max-width:359px){ 
        .zi_message li{ margin-left:2%;}
        .zi_message .li_4{ margin-left:4%;}
    }
    </style>
    <div class="ziXun zi_message clear" style="display:block;">
        <ul class="link">
            <li><h2><a style="color: #e44b46;">晨阳水漆相关</a></h2></li>
            <li>|</li>
            <li><h2><a>热门项目</a></h2></li>
            <li>|</li>
            <li><h2><a>加盟动态</a></h2></li>
        </ul>
    </div>
    <div class="con">
    <div class="jiaMeng_ul clear" style="display:block;">
        <ul style="width:29%"> 
            <li><a href="http://m.jmw.com.cn/xm137829/xiangmujieshao/" title="晨阳水漆项目介绍">晨阳...项目介绍</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/youshizhichi/" title="晨阳水漆加盟优势">晨阳...加盟优势</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/jiamengdian/" title="晨阳水漆加盟店铺">晨阳...加盟店铺</a></li>
        </ul>
        <ul style="width:29%"> 
            <li><a href="http://m.jmw.com.cn/xm137829/jiamengfeiyong/" title="晨阳水漆项目费用">晨阳...项目费用</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/wangyoudianping/" title="晨阳水漆网友点评">晨阳...网友点评</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/zixun/" title="晨阳水漆加盟资讯">晨阳...加盟资讯</a></li>
        </ul>
        <ul style="width:29%"> 
            <li><a href="http://m.jmw.com.cn/xm137829/liuyan/" title="晨阳水漆在线咨询">晨阳...在线咨询</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/pinpaituku/" title="晨阳水漆品牌图库">晨阳...品牌图库</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/bbs/" title="晨阳水漆创业问答">晨阳...创业问答</a></li>
        </ul>
    </div>
        <div class="jiaMeng_ul clear" style="display:none;">
                            <ul style="width:100%;">
                                <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm79341/" title="樱花涂料加盟">
                樱花涂料加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6562900/" title="室美伦加盟">
                室美伦加盟                  
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm158545/" title="舒鑫e家加盟">
                舒鑫e家加盟                 
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6589649/" title="空间美贝壳粉生态涂料加盟">
                空间美贝加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm58277/" title="德尔地板加盟">
                德尔地板加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6572154/" title="欧克斯门窗加盟">
                欧克斯门加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm60837/" title="法恩莎瓷砖加盟">
                法恩莎瓷加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm63088/" title="纤之韵-墙衣加盟">
                纤之韵-加盟                 
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm76445/" title="澳普利发门窗加盟">
                澳普利发加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6675488/" title="钛能门业加盟">
                钛能门业加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6581027/" title="荣事达管业加盟">
                荣事达管加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6593563/" title="VOTO沃土加盟">
                VOTO加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6594594/" title="忆江南锦缎泥加盟">
                忆江南锦加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6582517/" title="定荣家加盟">
                定荣家加盟                  
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm81364/" title="佛山照明加盟">
                佛山照明加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6584328/" title="千叶珠宝加盟">
                千叶珠宝加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6674681/" title="展腾投资集团加盟">
                展腾投资加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6597666/" title="能力风暴机器人加盟">
                能力风暴加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm210499/" title="阳光喔作文培训加盟">
                阳光喔作加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6558704/" title="野马汽车加盟">
                野马汽车加盟                    
                </a></li>
                                </ul>
        </div>
        <!-----加盟动态----->
        <style type="text/css">
        #demo{
        overflow:hidden;
        height:200px;
        width:98%;
        position:relative;
        }
        #demo1{
           width: 98%;
           padding: 0 1%;
           margin: 0 auto;
           font-size: 0.9rem;
           line-height: 1.2rem;
           color: #333;
        }
        #demo1 .league-dynamic{
           border-bottom: 1px dashed #cccccc;
           padding:6px 0;
        }
        #demo1 .league-dynamic font{
           color: #CC0000;
        }
        #demo2{
           width: 98%;
           padding: 0 1%;
           margin: 0 auto;
           font-size: 0.9rem;
           line-height: 1.2rem;
           color: #333;
        }
        #demo2 .league-dynamic{
           border-bottom: 1px dashed #cccccc;
           padding:6px 0;
        }
        #demo2 .league-dynamic font{
           color: #CC0000;
        }
        </style>
        <div  style="display: none;" class="jiaMeng_ul clear scroll_DT ">
            <div id="demo">
                <ul id="demo1">
                <script type="text/javascript" src="http://port.jmw.com.cn/html/zh/zhxm.html"></script>
                <script type="text/javascript">
                  var num=userSort.length;
                  for(var i=0;i<num;i++){
                   document.getElementById("demo1").innerHTML+='<div class="league-dynamic">·来自'+userSort[i]['province']+'的<font onclick='+'dongtai_message(28,16,"我想入驻中国加盟网，成为企业会员，展示产品，推广项目")'+'>'+userSort[i]['sname']+'</font>正在寻找<span ></span>行业的创业项目，欢迎相关品牌自荐</div>';
                  }
                </script>
                </ul>
                <div id="demo2"></div>
            </div>
        </div>
        <script>
        function dongtai_message(target_id,origin,message){
            var target_id = target_id;
            var origin = origin;
            var message = message;

            $('#z_title').html('我要查看');
            $('#z_target_id').val(target_id);
            $('#z_origin').val(origin);
            $('#z_content').val(message);
            
            $('.black-all6').show();
            
        }
        </script>
        <script type="text/javascript"> 
        var speed=40 
        window.onload=function(){
        var demo=document.getElementById("demo"); 
        //var gundong=document.getElementById("gundong"); 
        var demo2=document.getElementById("demo2"); 
        var demo1=document.getElementById("demo1"); 
        demo2.innerHTML=demo1.innerHTML 
        function Marquee(){ 
        if(demo.scrollTop>=demo1.offsetHeight){
        demo.scrollTop=0; 
        }
        else{ 
        demo.scrollTop=demo.scrollTop+1;
        } 
        } 
        var MyMar=setInterval(Marquee,speed) 
        //gundong.onmouseover=function(){clearInterval(MyMar)} 
        //gundong.onmouseout=function(){MyMar=setInterval(Marquee,speed)} 
        }
        </script>
        <div class="black-all6" style="display: none;">
        <form action="http://liuyan.jmw.com.cn/message/FirstMessage.php" method="post" id="form_zhao">
            <input type="hidden" name="message_num" id="message_num" value="1"/>
            <ul class="all6">
                <li class="all6-title">
                    <span id="z_title"></span>
                </li>
                <li class="all6-name">
                    <label><span style="color:red;margin-right:3px;">*</span>项目名:</label>
                    <input type="text" name="name" id="z_name" value="如 驾校网" onfocus="if(this.value=='如 驾校网'){this.value=''}" onblur="if(this.value==''){this.value='如 驾校网'}"/>
                </li>
                <li class="all6-name">
                    <label><span style="color:red;margin-right:3px;">*</span>手&nbsp;&nbsp;&nbsp;机:</label>
                    <input type="text" name="phone" id="z_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11"/>
                </li>
                 <li class="all6-liuyan">
                    <label><span style="color:red;margin-right:3px;">*</span>留&nbsp;&nbsp;&nbsp;言:</label>
                    <textarea class="fr" name="contant" id="z_content"></textarea>
                </li>
                <li class="all6-button">
                    <a onclick="$('.black-all6').hide();" style="color:#ccc;border-right:1px solid #e8e8e8;box-sizing: border-box;" >取消</a>
                    <a onclick="return zhao_checkMessage();">确定</a>
                </li>
            </ul>
            <input type="hidden" name="target_id" id="z_target_id" value="" >
            <input type="hidden" value="" name="origin" id="z_origin">
            <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
            <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
            <input type="hidden" name="message_num" id="message_num_m" value="1"/>
        
        </form>
        </div>
        <style>
        /*弹框开始*/
        .black-all6{
           display: none;
           width: 100%;
           height: 100%;
           background: rgba(0,0,0,.5);
           position: fixed;
           z-index: 9998;
           top:0;
           left:0;
        }
        .all6{
            background: #ffffff none repeat scroll 0 0;
            border-radius: 20px;
            height: 235px;
            left: 50%;
            margin-left: -135px;
            margin-top: -117px;
            position: absolute;
            top: 50%;
            width: 270px;
        }
        .all6-title {
            border-bottom: 1px solid #e8e8e8;
            color: #333333;
            font-size: 17px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            width: 100%;
        }
        .all6-name {
            border-bottom: 1px solid #e8e8e8;
            height: 42px;
            line-height: 42px;
            width: 100%;
            overflow:hidden; 
        }
        .all6-liuyan, .all6-name label {
            margin-left: 21px;
        }
        .all6-name input {
            border: medium none;
            height: 23px;
            width: 168px;
            color:#999;
        }
        .all6-liuyan {
            height: 51px;
            margin-top: 15px;
        }
        .all6-liuyan textarea {
            border: medium none;
            color: #999;
            font-family: "Microsoft YaHei";
            font-size: 12px;
            height: 48px;
            line-height: 20px;
            margin-top: -2px;
            vertical-align: middle;
            width: 168px;
            margin-right:12px;
        }
        .all6-button {
            border-top: 1px solid #e8e8e8;
        }
        .all6-button a {
            color: #347ae2;
            display: block;
            float: left;
            line-height: 40px;
            text-align: center;
            width: 134px;
        }
        </style>
        <!-----加盟动态----->
    </div>
</section>
<!-- 相关信息 end-->
<script>
    //JQuary 方法做选项卡

    $(function(){
        $(".link a").click(function(){
            $(".con .jiaMeng_ul").css("display","none");
            $($(".con .jiaMeng_ul")[$(this).index(".link a")]).css("display","block");
        })
    })
</script>
    <!-- 标项页创业指导 在线咨询 -->
<div class="Pline_consult" id="Pline_consult1" style="display:none;"> 
<form action="" method="post" id="form2">
    <p class="P_title1">晨阳水漆免费咨询</p>
    <p class="ZJ_title2">你好，我是中国加盟网创业顾问<span id="spd_kf">cindy</span>，请问有 什么可以帮到您的？</p>
    <ul class="clear"> 
        <li>
            <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
            <input type="text" class="text" name="name" id="kf_name" placeholder="请输入姓名" value=""  maxlength="6"/>
            <p class="li_sex fr">&nbsp;&nbsp;性别:
            <label id="label3" style="display:inline-block;"><i class="icon_sex3 fl icon_sex4"></i>男 &nbsp;</label>
            <label id="label4" style="display:inline-block;"><i class="icon_sex3 fl "></i>女</label>
            </p>
        </li>
        <li>
            <span><em class="em1">*</em>手机<em class="em2">:</em></span>
            <input type="text" class="text" name="phone" id="kf_phone" placeholder="请输入手机号" value="" maxlength="11" style="width:40%"/>
        </li>
        <li>
            <span class="fl"><em class="em1">*</em>留言<em class="em2">:</em></span>
            <textarea name="content" id="kf_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea>
        </li>
        <li class="li5 clear"> 
            <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult1').hide();$('.gray_mask').hide();">取消</a>
            <a href="javaScript:;" class="fr a2" onclick="return checkMessageInfo_new_kf($(this));">确定</a>
        </li>
    </ul>
    <input type="hidden" name="gender" class="fl" id="kf_sex" value="0">
    <input type="hidden" name="target_id" id="target_id" value="137829" >
    <input type="hidden" value="" name="origin" id="kf_origin">
    <input type="hidden" value="" name="m_dirname">
    <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
    <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
    <input type="hidden" name="message_num" id="message_num_m" value="1"/>
</form>
</div>
<script type="text/javascript"> 
    $('#label3').click(function(){
        $('#label3 i').toggleClass('icon_sex4');
        $('#label4 i').removeClass('icon_sex4');
        $('#kf_sex').val('0');
    })
    $('#label4').click(function(){
        $('#label4 i').toggleClass('icon_sex4');
        $('#label3 i').removeClass('icon_sex4');
        $('#kf_sex').val('1');
    })
</script>
<script>
function checkMessageInfo_new_kf(obj){
    if(obj.attr('checkMessageInfo_new_kf') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#kf_name").val();
    var message = $("#kf_content").val();
    var phone = $("#kf_phone").val();
    var sex = $("#kf_sex").val();
    var target_id = $("#target_id").val();
    var origin = $("#kf_origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(content == '' ){
        alert('留言内容不能为空！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        obj.attr('checkMessageInfo_new_kf',1);
        $.ajax({
            async:false,
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('checkMessageInfo_new_kf',0);
                if(html.status == 'login'){
                    $('#Pline_consult1').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                }
            }
        });
        
        if(is_login == 'unlogin'){
            $('#Pline_consult1').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }

    }   
}
</script>
<style>
.icon_sex3{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }
.icon_sex4{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }

.kf-all{
display: none;
width: 100%;
height: 100%;
background: rgba(0,0,0,.5);
position: fixed;
z-index: 1000;
top:0;
left:0;
}
.kf{
width: 270px;
height: 334px;
border-radius: 20px;
background: #ffffff;
position: absolute;
top:50%;
left:50%;
margin-top: -167px;
margin-left: -135px;
}
.kf-title{
width: 100%;
text-align: center;
height: 37px;
line-height: 37px;
border-bottom: 1px solid #E8E8E8;
font-size: 17px;
color: #333333;
}
.kf-name{
height: 33px;
width: 100%;
line-height: 33px;
border-bottom: 1px solid #E8E8E8;
}
.kf-liuyan,.kf-name label{
margin-left: 21px;
margin-right: 6px;
}
.kf-name input{
height: 23px;
width: 180px;
border: none;
color:#999;
}
.kf-liuyan{
height: 51px;
margin-top: 15px;

}
.kf-liuyan textarea {
margin-top: -4px;
vertical-align: middle;
width: 170px;
height: 50px;
line-height: 20px;
color: #999;
border: none;
font-size: 0.6875rem;
font-family: "Microsoft YaHei";
}
.kf-button{
border-top: 1px solid #E8E8E8;
}
.kf-button a{
display: block;
float: left;
width: 134px;
color: #347AE2;
line-height: 40px;
text-align: center;
}
</style>
<script>
    $('#tel_label3').click(function(){
        $('#tel_label3 i').toggleClass('icon_tel_sex4');
        $('#teo_label4 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('0');
    })
    $('#teo_label4').click(function(){
        $('#teo_label4 i').toggleClass('icon_tel_sex4');
        $('#tel_label3 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('1');
    })
    
function check_is_login2(pid,ispay,paystate,origin,brand_name){
if(ispay==1 && paystate==2){
    $('.toggle_shu1').hide();
    $('.chaKan').hide();
    $('.toggle_shu2').show();
}else{
    if(is_login == 'login'){
        $('.toggle_shu1').hide();
        $('.chaKan').hide();
        $('.toggle_shu2').show();
    }else if(is_login == 'unlogin'){
        $('.inquire_tele').show();
        $('.gray_mask').show(); 
        $('#tel_content').val('我想查看'+brand_name+'项目的加盟电话，了解项目情况，请尽快联系我！');
        $('#tel_origin').val(origin);
    }
}   
}

function see_tel(obj){
    if(obj.attr('see_tel') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#tel_name").val();
    var message = $("#tel_content").val();
    var phone = $("#tel_phone").val();
    var sex = $("#tel_sex").val();
    var target_id = $("#tel_target_id").val();
    var origin = $("#tel_origin").val();
    if(origin == 27){
        var tel='tel';
    }
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(content == '' ){
        alert('留言内容不能为空！');
        return false ;
    }else{
        obj.attr('see_tel',1);
        $.ajax({
            async:false,
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('see_tel',0);
                if(html.status == 'login'){
                    $('.inquire_tele').hide();
                    $('.gray_mask').hide();
                }else if(html.status == 'unlogin'){
                    
                    $('#first_message_id').val(html.id);
                }
            }
        });
        if(is_login == 'unlogin'){
            $('.inquire_tele').hide();
            $('#Pline_Message').show();
            if(tel == 'tel'){
                $('#tel').val('tel');   
            }
            $('#first_telephone').val(phone);
            Auto_trigger();
        }

    }   
}
</script>

<a class="returntop" href="#top" style="display: none;"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/41560-7162.png"></a>
<script>
    $(document).scroll(function() {
        var top = $(document).scrollTop();
        if(top==0){
            $(".returntop").hide();
        }else{
            $(".returntop").show();
        }
    })
    $(".returntop").click(function(){
        $({aa:$(window).scrollTop()}).animate({aa:0},{duration:1200,step:function(){
            $(window).scrollTop(this.aa);
        }})
    })
</script>

<a  onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 14px; padding-left: 13px; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);">在线<br />咨询</a>
<!-- 项目页底部定位 start -->
            <!-- 公共底部 start -->
<footer class="copyRight"> 
    <p class="copy-1">
        <a href='http://m.jmw.com.cn/'>回到首页</a><i></i>
        <!--<a href="http://pc.jmw.com.cn">电脑版</a><i></i>-->
        <a href='javaScript:;'  class="wy_download" id="downLoad"  onClick="func()">APP下载</a><i></i>
        <a href='http://m.jmw.com.cn/usercenter/register.php'>注册</a><i></i>
        <a href='http://m.jmw.com.cn/usercenter/login.php'>登录</a>
    </p>
    <p class="copy-2"><span>Copyright©2004-2016 JMW.COM.CN  京ICP证：040787号</span></p>
</footer>
<!-- 公共底部 end -->
<script type="text/javascript">
function func(){
var u = navigator.userAgent, app = navigator.appVersion;
var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    if  (isAndroid == true){
        document.getElementById("downLoad").href="http://m.jmw.com.cn/app/android/中国加盟网.apk";
    }else if (isiOS == true){
        document.getElementById("downLoad").href="https://appsto.re/cn/ukd68.i";
    }else{
        alert("请在手机端下载app");
    }
}
</script>  
<style>
.safeCheckW{
display: none;
width: 100%;
height: 100%;
background: rgba(0,0,0,.5);
position: fixed;
z-index: 9998;
top:0;
left:0;
}
.message{
width: 90%;
height: 294px;
border-radius: 20px;
background: #ffffff;
position: absolute;
top:50%;
left:5%;
margin-top: -147px;
}
.message-title{
width: 100%;
text-align: center;
height: 40px;
line-height: 40px;
border-bottom: 1px solid #E8E8E8;
font-size: 17px;
color: #333333;
}
.message-name{
height: 36px;
line-height: 36px;
margin: 14px 0;
}
.message-liuyan,.message-name label{
margin-left:5%;
display: inline-block;
width: 20%;
}
.message-name input{
height: 34px;
width : 32%;
}
.message-button{
border-top: 1px solid #E8E8E8;
}
.message-button a{
display: block;
float: left;
width: 50%;
color: #3478E3;
line-height: 51px;
text-align: center;
}
#loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); }
.code_color{width: 32%;height: 34px;text-align:center;line-height: 34px;background: #FF9D18;color: #ffffff;display: inline-block;float:right;margin:2px 3% 0 2%;}
</style>
<!--弹框-->
<div class="safeCheckW">
    <ul class="message">
        <li class="message-title">
            安全验证
        </li>
        <li  style="padding: 10px 21px;border-bottom: 1px solid #E8E8E8;color: #666;line-height: 1.4rem;">你今天已经连续留言2条，为了保障你的账户安全，请输入手机验证码或修改手机号码</li>
        <li class="message-name">
            <label>手机号:</label>
            <input type="text" name="telephone" id="telephone" value="" readonly="readonly">
        </li>
        <li class="message-name">
            <label>验证码:</label>
            <input type="text" name="code" id="code" value="">
            <a id="checkBtn" class="code_color">发送短信验证码</a>
        </li>
        <li class="message-button">
            <a onclick="$('.safeCheckW').hide();$('#loading-mask').hide();" style="color: #666;box-sizing: border-box;border-right: 1px solid #E8E8E8;">取消</a>
            <a class="button2">确定</a>
        </li>
    </ul>
</div>
<script type="text/javascript"> 
//验证码变化
/*function t1(){
    $("#vailcode").attr("src","http://m.jmw.com.cn/code.php?rand"+Math.random());
    var session_code = context.Session["Checkcode"].ToString();
    alert(session_code);
    return false;
}*/
var fal = true;
$('#checkBtn').click(function(){
    if(fal == true){
        var telephone = $("#telephone").val();
        $.ajax({
            type:'get',
            async:false,
            url:'http://person.jmw.com.cn/sendMessagecode.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{'telephone':telephone},
            success:function(html){
                if(html == 1){
                    fal = false;
                    var curCount = 90;
                    $(".code_color").css('background','#c3c3c3');
                     //$("#checkBtn").attr("disabled", "true");
                     $("#checkBtn").html("" + curCount + "秒倒计时");
                     //timer处理函数
                    function SetRemainTime() {
                        
                        if (curCount == 0) {                
                            window.clearInterval(InterValObj);//停止计时器
                            //$("#checkBtn").removeAttr("disabled");//启用按钮
                            $(".code_color").css('background','#FF9D18');
                            $("#checkBtn").html("重新发送");
                            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效   
                            fal = true;
                        }
                        else {
                            curCount--;
                            //$("#checkBtn").attr("disabled", "false");
                            $("#checkBtn").html("" + curCount + "秒倒计时");
                        }
                    }
                    InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                }       
            }
        })
    }
})

$('.button2').click(function(){
    var code = $('#code').val();
    if(code != ''){
        $.ajax({
            type:'get',
            async:false,
            url:'http://person.jmw.com.cn/m_code_check.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{'code':code},
            success:function(html){
                if(html == 1){
                    $("input[name=message_num]").val(1);
                    $('.safeCheckW').hide();
                    $('#loading-mask').hide();
                }else{
                    alert('验证码失效或不正确！');
                    $('.safeCheckW').hide();
                    $('#loading-mask').hide();
                }       
            }
        })
    }else{
        alert('验证码不能为空！');
        return false;
    }
    
})
</script>
<style type="text/css"> 
.clear{ zoom:1;clear:both;}
.clear:after{content:""; clear:both; height:0; line-height:0; display:block; visibility:hidden;}
.fl{float:left;display:inline;}
.fr{float:right;display:inline;}
#loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); }
.safeTishiW{ width:94.4%; background:rgba(0,0,0,.3); position:fixed; top:25%; left:0; right:0; margin:0 auto; border-radius:5px; padding:0.9% 0; z-index:1100;}
.safeTishiL{ width:98%; margin-left:1%; }
.safeTishiL .p1{ background:#e44b46; height:28px; color:#fff; }
.safeTishiL .p1 .span_safe{ font-size:0.875rem; padding-left:7.4%; box-sizing:border-box; line-height:28px; }
.safeTishiL .p1 .span_close{ font-size:1.375rem; padding-right:1.8%; box-sizing:border-box; }
.safeTishiL_bottom{ background:#f3f4f7; padding:7.4%; box-sizing:border-box; font-size:1.0rem; }
.safeTishiL_bottom .ul1{ padding-bottom:15px; line-height:30px; font-weight:bold; padding-left:7.4%; }
.safeTishiL_bottom .button_sure{ width:30%; text-align:center; height:35px; line-height:35px; font-size:0.85rem; margin:auto; display:block; background:#e44b46; border:none; color:#fff; }
</style>
<div id="loading-mask" style="display:none;"></div>
<div class="safeTishiW" style="display:none;"> 
    <div class="safeTishiL"> 
        <p class="p1 clear">
            <span class="fl span_safe">安全提示</span>
            <span class="fr span_close">×</span>
        </p>
        <div class="safeTishiL_bottom"> 
            <ul class="ul1"> 
                <li>您今天留言次数已满<font class="font1">20</font>条,</li>
                <li>为了您的账号安全,</li>
                <li>请您明天继续.</li>
            </ul>
            <a class="button_sure" />确定</a>
        </div>
    </div>
</div>
<script>
    $('.span_close').click(function(){
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    })
    $('.button_sure').click(function(){
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    })
</script>
        <!---留言限制条件 end-->
        <!-- 标项页立即咨询 -->
        <div class="gray_mask" style="display:none;"></div>
        <div class="Pline_consult" style="display:none;"id="online_consult"> 
            <div class="ZJ_title1">
                <p class="span1">专家咨询</p>
                <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p>
            </div>
                            <form action="" method="post">
                <input type="hidden" name="message_num" id="message_num_m" value="1"/>
                <ul class="clear"> 
                    <li>
                        <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
                        <input type="text" class="text" style="width:75%;" name="name" id="zx_name" placeholder="请输入姓名" value="" maxlength="6"/>
                    </li>
                    <li>
                        <span><em class="em1">*</em>手机<em class="em2">:</em></span>
                        <input type="text" class="text" style="width:75%;" name="phone" id="zx_phone" placeholder="请输入手机号" value="" maxlength="11" />
                    </li>
                    <li>
                        <span class="fl" style="position:relative;top:16px;"><em class="em1">*</em>留言<em class="em2">:</em></span>
                        <textarea name="content" id="zx_contents" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些？</textarea>
                    </li>
                    <li class="li5 clear"> 
                        <a href="javaScript:;" class="fl a1" onclick="$('#online_consult').hide();$('.gray_mask').hide();">取消</a>
                        <a href="javaScript:;" class="fr a2" onclick="return message_check_zx($(this));">确定</a>
                    </li>
                </ul>
                <input type="hidden" name="sex" value=""/>
                <input type="hidden" name="target_id" id="target_id" value="137829"/>
                <input type="hidden" name="origin" value="" id="zj_origin"/>
                <input type="hidden" value="" name="m_dirname">
                <input type="hidden" name="MCeng_lasturl" id="MCeng_lasturl"/>
                <input type="hidden" name="MCeng_fromurl" id="MCeng_fromurl"/>
            </form>
        </div>   
        <script>
function message_check_zx(obj){
    if(obj.attr('doing') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#zx_name").val();
    var message = $("#zx_contents").val();
    var phone = $("#zx_phone").val();
    var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    var target_id = $("#target_id").val();
    var origin = $("#zj_origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(!regexp.test(message)){
        alert('留言格式不正确！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        //obj.html('提交中。。');
        obj.attr('doing',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                //obj.show();
                obj.attr('doing',0);
                if(html.status == 'login'){
                    $('#online_consult').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                }
            }
        });
        if(is_login == 'unlogin'){
            $('#online_consult').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }
    }   
}
</script>
   <!--<ul class="xm_footer">
            <li class="xm_ico1 fl"><a href="javascript:;" onclick="addTelForWap(137829,1,'4000500555,95542');"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/dddd7-9769.png">免费通话</a></li>
            <li class="xm_ico2 fl"><a onclick="$('.black-all').show();$('#n_content').val('请问晨阳水漆企业电话是多少？');$('#origin').val(9);"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/dcf8d-7090.png"><span>索要企业电话</span></a></li>
    <li class="xm_ico3 fl"><a onclick="$('.tm_bg').show()&amp;&amp;$('.J-extent').show();$('#zj_origin').val('1');$('#contents').val('请问投资晨阳水漆所需要的费用有哪些?');"><span>在线咨询</span></a></li>
</ul>-->
<!-- 项目页底部定位 stop -->
<style>
.xm_footer {
position: fixed;
bottom: 0;
left: 0;
z-index: 200;
width: 100%;
height: 48px;
background: #f9f9f9;
}
.xm_footer .xm_ico1,.xm_footer .xm_ico2{border-right: 1px solid #E0E1E5;box-sizing: border-box;border-top: 1px solid #e0e1e5;}
.xm_ico1,.xm_ico2{width: 30%;height:100%;position: relative;}
.xm_footer .xm_ico3{width: 40%;background: #E44B46;color: #ffffff;}
.xm_footer li a {
display: block;
color: #666666;
text-align: center;
font-size: 0.725em;
line-height: 66px;
}
.xm_footer .xm_ico3 a{color: #ffffff;font-size: 0.8em;line-height: 48px;}
.xm_footer .xm_ico1 img,.xm_footer .xm_ico2 img{width: 15px;height: 15px;display: block;position: absolute;top:6px;left:50%;margin-left: -7.5px;}
.icon_sex1{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; margin-top: 20px!important;}
.icon_sex2{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; margin-top: 20px!important;}
.icon_liu_sex2{ background:url('<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; }

</style>
<!-- 标项页讯加盟低价 -->
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/235a4-6274.css" />
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" style="display:none;"id="Pline_consult"> 
<form action="" method="post" id="form1">
    <p class="P_title1" id="P_title1">加盟咨询</p>
    <ul class="clear"> 
        <li>
            <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
            <input type="text" class="text" name="name" id="n_name" placeholder="请输入姓名" value=""  maxlength="6"/>
            <p class="li_sex fr">&nbsp;&nbsp;性别:
            <label id="label1" style="display:inline-block;"><i class="icon_sex1 fl icon_sex2"></i>男 &nbsp;</label>
            <label id="label2" style="display:inline-block;"><i class="icon_sex1 fl "></i>女</label>
            </p>
        </li>
        <li>
            <span><em class="em1">*</em>手机<em class="em2">:</em></span>
            <input type="text" class="text" style="width:75%;" name="phone" id="n_phone" placeholder="请输入手机号" value="" maxlength="11" />
        </li>
        <li>
            <span class="fl" style="position: relative; top: 16px;"><em class="em1">*</em>留言<em class="em2">:</em></span>
            <textarea name="content" id="n_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea>
        </li>
        <li class="li5 clear"> 
            <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult').hide();$('.gray_mask').hide();$('#P_title1').html('加盟咨询')">取消</a>
            <a href="javaScript:;" class="fr a2" onclick="return check_Standard($(this));">确定</a>
        </li>
    </ul>
    <input type="hidden" name="gender" class="fl" id="sex" value="0">
    <input type="hidden" name="target_id" id="target_id" value="137829" >
    <input type="hidden" value="" name="origin" id="origin">
    <input type="hidden" value="" name="m_dirname">
    <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
    <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
    <input type="hidden" name="message_num" id="message_num_f" value="1"/>
</form>
</div>

<script type="text/javascript"> 
    $('#label1').click(function(){
        $('#label1 i').toggleClass('icon_sex2');
        $('#label2 i').removeClass('icon_sex2');
        $('#sex').val('0');
    })
    $('#label2').click(function(){
        $('#label2 i').toggleClass('icon_sex2');
        $('#label1 i').removeClass('icon_sex2');
        $('#sex').val('1');
    })
</script>
<script>
function check_Standard(obj){
    if(obj.attr('check_Standard') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#n_name").val();
    var message = $("#n_content").val();
    var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    var phone = $("#n_phone").val();
    var sex = $("#sex").val();
    
    var target_id = $("#target_id").val();
    var origin = $("#origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(!regexp.test(message)){
        alert('留言格式不正确！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        obj.attr('check_Standard',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('check_Standard',0);
                if(html.status == 'login'){
                    $('#Pline_consult').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                }
            }
        });
        if(is_login == 'unlogin'){
            $('#Pline_consult').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }
    }   
}
</script>
<!--新增弹框  end-->

<!-- 我要留言 -->
<style type="text/css"> 
    .gray_mask{ background:rgba(0,0,0,.4); position:fixed; top:0; left:0; width:100%; height:100%; z-index:990; display:none; }
    .I_speak{ width:100%; height:41px; background:#404042; margin-top:4px; position:fixed; bottom:0; z-index:990;}
    .I_speak .li_left{ width:17.5%; background:#252724; color:#fff; height:41px; text-align:center; font-size:0.75rem; position:relative; }
    .I_speak .li_left i{ position:absolute; display:block; width:17px; height:17px; top:1px; right:14%; }
    .I_speak .li_left p{ margin-top:6px; line-height:16px; }
    .I_speak .li_center{ width:62%; }
    .I_speak .li_center input{ width:91.5%; height:31px; margin:4px auto; background:#e4e1e1; color:#a5a5a5; border:none; border-radius:6px; padding-left:13px; box-sizing:border-box; display:block; }
    .I_speak .li_right{ width:16%; background:#169e16; height:31px; border-radius:5px; margin-top:4px; }
    .I_speak .li_right dl{ margin:auto; width:81%; }
    .I_speak .li_right dt{ width:15px; height:15px; margin-top:8px ; }
    .I_speak .li_right dd{ font-size:0.75rem; color:#fff; line-height:14px; margin-left:6px;margin-top:2px;}
    @media (min-width:320px) and (max-width:365px){
        .I_speak .li_right dd{ margin-left:2px;margin-top:2px;}
    }
    @media screen and (min-width:384px){
        .I_speak .li_right dl{ margin:auto; width:74%; }
    }  
    
    .Pline_consultL{ background:#fff; width:83%; position:fixed; left:8.5%; top:20%; border-radius:10px; z-index:1305; display:none; }
    .Pline_consultL .P_title1{ height:45px; line-height:45px; text-align:center; border-bottom:1px solid #e8e8e8; font-size:0.95rem; }
    .Pline_consultL ul li{ line-height:42px; padding:0 3%; border-bottom:1px solid #e8e8e8; font-size:0.8rem;}
    .Pline_consultL ul li .text{ width:33%; height:28px;font-size:0.85rem; color:#999; box-sizing:border-box; padding-left:3px; margin-left:3px; border:medium none; }
    .Pline_consultL ul li .button{ width:32%; height:28px; border:1px solid #e10000; color:#e10000; line-height:28px; text-align:center; background:#fff; margin-top:8px; padding:0; border-radius:2px; }
    .Pline_consultL .li_sex{ font-size:0.8rem; margin-right:8px; }
    .Pline_consultL ul li span .em1{ float:left; color:#e10000; margin-right:2px;}
    .Pline_consultL ul li textarea{ height:40px;  font-family: "微软雅黑";width:81%;font-size:0.85rem; margin-left:3px; margin-top:10px; line-height:20px; color:#999; border:medium none; }
    @media screen and (max-width:330px){
        .Pline_consultL ul li textarea{ width:79%; }
    }
    .Pline_consultL ul .li5{ height:46px; line-height:46px; border-bottom:none;}
    .Pline_consultL ul li a{ text-align:center; width:50%; display:inline-block; font-size:0.95rem; }
    .Pline_consultL ul .a1{ border-right:1px solid #e8e8e8; box-sizing:border-box; color:#cdcdcd; }
    .Pline_consultL ul .a2{ color:#4283e4; }
</style>
<script language="javascript" type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/webcall.js"></script>
<script language="javascript" type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/js/iscroll.js"></script>
    <ul class="I_speak clear"> 
    <li class="fl li_left" onclick="$('.Pline_consultL').show();$('.gray_mask').show();"><p>我要<br />留言</p><i><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/2de72-9761.png" alt="" /></i></li>
    <li class="fl li_center"><input type="text" name="phone" id="si_mobel" value="输入您的电话:138******10" onfocus="if(this.value=='输入您的电话:138******10'){this.value=''}" onblur="if(this.value==''){this.value='输入您的电话:138******10'}" maxlength="11"/></li>
    <li class="fl li_right"  onclick="si_Webcall();return false;">
        <dl class="clear">
            <dt class="fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/00698-5306.png" alt="" /></dt>
            <dd class="fl">在线<br />咨询</dd>
            <input type="hidden" name="tid" id="si_tid" value="137829">
            <input type="hidden" name="cname" id="si_cname" value="晨阳水漆">
        </dl>
    </li>
</ul>

<div class="gray_mask" ></div>
<div class="Pline_consultL" style="display:none; z-index:1400;"> 
    <form action="" method="post" id="form_liu">
    <p class="P_title1" style="color:#333;">留言咨询</p>
    <ul class="clear"> 
        <li><span><em class="em1">*</em>姓名&nbsp;:</span><input type="text" class="text" name="name" id="liu_name"  value="如 万先生" onfocus="if(this.value=='如 万先生'){this.value=''}" onblur="if(this.value==''){this.value='如 万先生'}"/>
            <p class="li_sex fr" style="position:absolute;top:39px;height:35px;">性别&nbsp;:
            <label id="man" for="man" style="margin-right:10px; "><i class="icon_sex1 icon_liu_sex2" style="display:inline-block;"></i>男</label>
            <label id="woman" for="woman"><i class="icon_sex1 " style="display:inline-block;"></i>女</label>
            </p>    
        </li>
        <li style="clear:both;"><span><em class="em1">*</em>手机&nbsp;:</span><input type="text" class="text" style="width:80%;" name="phone" id="liu_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11"/></li>
        <li><span class="fl"><em class="em1">*</em>留言&nbsp;:</span><textarea name="contant" id="liu_content" cols="30" rows="10">我想咨询晨阳水漆加盟费用最低多少钱?</textarea></li>
        <li class="li5 clear"> 
            <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consultL').hide();$('.gray_mask').hide();">取消</a>
            <a href="javaScript:;" class="fr a2" onclick="return message_liuyan($(this));">确定</a>
        </li>
    </ul>
    <input type="hidden" name="gender" class="fl" id="liu_sex" value="0">
    <input type="hidden" name="target_id" id="target_id" value="137829" >
    <input type="hidden" value="22" name="origin" id="liu_origin">
    <input type="hidden" value="" name="m_dirname">
    <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
    <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
    <input type="hidden" name="message_num" id="message_num_f" value="1"/>
    </form>
</div>
<script type="text/javascript"> 
    $('#man').click(function(){
        $('#man i').toggleClass('icon_liu_sex2');
        $('#woman i').removeClass('icon_liu_sex2');
        $('#liu_sex').val('0');
    })
    $('#woman').click(function(){
        $('#woman i').toggleClass('icon_liu_sex2');
        $('#man i').removeClass('icon_liu_sex2');
        $('#liu_sex').val('1');
    })
</script>
<script>
function message_liuyan(obj){
    if(obj.attr('message_liuyan') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#liu_name").val();
    var content = $("#liu_content").val();
    var phone = $("#liu_phone").val();
    var sex = $("#liu_sex").val();
    var target_id = $("#target_id").val();
    var origin = $("#liu_origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    
    if(name == '' || name =='如 万先生'){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == '' || phone == '如 13111111111'){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(!regexp.test(content)){
        alert('留言格式不正确！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        obj.attr('message_liuyan',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:content,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('message_liuyan',0);
                if(html.status == 'login'){
                    $('.Pline_consultL').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                    
                }
            }
        });
        if(is_login == 'unlogin'){
            $('.Pline_consultL').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }
    }   
}
</script>
<!-------m站标页底部浮层类似400回拨------->
<script>
function  si_Webcall(){
var lasturl = window.location.href;
var fromurl = document.referrer;
var com_id = jQuery('#si_tid').val();
var tel_name;var tel_sex;

cname = jQuery("#si_cname").val();
cn_num = jQuery('#si_mobel').val();
if(cn_num == '输入您的电话:138******10' || cn_num == '')
{
    alert('请填写您的联系方式！');return false;
}else{
    if(!cn_num.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)){
        alert('请填写您正确的联系方式！');return false;
    }
}   
if(com_id != '' && cn_num != 0)
{
    $.ajax({
        type:'get',
        url:'http://liuyan.jmw.com.cn/message/messageMFor400Index_temporary.php',
        dataType:'jsonp',
        jsonp:'fouroorecord',
        data:'is_login='+is_login+'&phone='+cn_num+'&target_id='+com_id+'&sex=2&name=创业者&cname='+cname+'&origin=13-23&content='+'通过400电话为'+cname+'项目留言，想了解加盟流程。请尽快联系！'+'&400index_lasturl='+lasturl+'&400index_fromurl='+fromurl,
        success:function(html){
            if(html.status == 'login'){
                alert('留言成功！');
                /*var call=new WebCall400(com_id);
                call.fourTelUserName='创业者';
                call.fourTelUserGender=2;
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
            }else if(html.status == 'unlogin'){
                $('#first_message_id').val(html.id);
                
            }
        }
    });
    if(is_login == 'unlogin'){
        $('.gray_mask').show();
        $('#Pline_Message').show();
        $('#first_telephone').val(cn_num);
        $('#tel_400').val('tel_400');
        Auto_trigger();
    }
}
}
function sleepReload(){
    window.location.reload();
}
</script>
<!-- 公共短信验证 -->
<div class="Pline_consult" id="Pline_Message" style="display:none;"> 
<script>
function  Auto_trigger(){
    var curCount = 60;
     $("#chBtn").attr("disabled", "true");
     $("#chBtn").val("" + curCount + "秒");
     //timer处理函数
    function SetRemainTime() {
        
        if (curCount == 0) {                
            window.clearInterval(InterValObj);//停止计时器
            $("#chBtn").removeAttr("disabled");//启用按钮
            $("#chBtn").val("重新发送");
            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
        }
        else {
            curCount--;
            $("#chBtn").attr("disabled", "false");
            $("#chBtn").val("" + curCount + "秒");
        }
    }
    InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
}
</script>
<div class="ZJ_title1">
    <p class="span1">短信验证</p>
    <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p>
</div>
<form>
<ul class="clear">
    <li>
        <span><em class="em1">*</em><em class="w4">手机号码</em><em class="em2">:</em></span>
        <input type="text" class="text" name="telephone" id="first_telephone" value="" maxlength="11" readonly="readonly">
    </li>
    <li>
        <span><em class="em1">*</em><em>短信验证码</em><em class="em2">:</em></span>
        <input type="text" name="code" class="text" id="che_code" placeholder="请输入验证码" value="" maxlength="4"/>
        <input type="button" value="60秒" class="button fr" id="chBtn" onclick="checkCodeClick();"/>
    </li>
    <li class="li5 clear"> 
        <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();window.clearInterval(InterValObj);">取消</a>
        <a href="javaScript:;" class="fr a2" onclick="return message_check_code($(this));">确定</a>
    </li>
    <input type="hidden" name="first_message_id" value="" id="first_message_id">
    <input type="hidden" name="tel" value="" id="tel">
    <input type="hidden" name="gem_collection" value="" id="gem_collection">
    <input type="hidden" name="tel_400" value="" id="tel_400">
    <input type="hidden" name="message_num" id="message_num_m" value="1"/>
</ul>
</form>
</div>
<script>
function checkCodeClick()
{
var curCount = 60;
 $("#chBtn").attr("disabled", "true");
 $("#chBtn").val("" + curCount + "秒");
 //timer处理函数
function SetRemainTime() {
    
    if (curCount == 0) {                
        window.clearInterval(InterValObj);//停止计时器
        $("#chBtn").removeAttr("disabled");//启用按钮
        $("#chBtn").val("重新发送");
        code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
    }
    else {
        curCount--;
        $("#chBtn").attr("disabled", "false");
        $("#chBtn").val("" + curCount + "秒");
    }
}
InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
var telephone = $("#first_telephone").val();
$.ajax({
    type:'get',
    url:'http://person.jmw.com.cn/telephone_check_again.php',
    dataType:'jsonp',
    jsonp:'callback',
     data:{telephone:telephone},
    success:function(html){
    }
});

}
function message_check_code(obj){
    if(obj.attr('m_biaoye') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var phone = $("#first_telephone").val();
    var code = $("#che_code").val();
    var gem_collection = $("#gem_collection").val();
    var tel_400 = $("#tel_400").val();
    var tel = $("#tel").val();
    var first_message_id = $("#first_message_id").val();
    if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(code == '' ){
        alert('请输入验证码！');
        return false ;
    }else{
        //$('#check_two_message').submit();
        obj.attr('m_biaoye',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message_check.php',
            data:{phone:phone,code:code,gem:gem_collection,id:first_message_id},
            dataType:'jsonp',
            jsonp:'callback',
            success:function(html){
            obj.attr('m_biaoye',1);
                if(html == 1){
                    $('.Pline_consult').hide();
                    $('.gray_mask').hide();
                    if(tel == 'tel'){
                        function modify_state(){
                            is_login='login';
                        }
                        modify_state();
                    /*}else if(tel_400 == 'tel_400'){
                        var com_id = jQuery('#si_tid').val();
                        if(com_id != ''){
                            var call=new WebCall400(com_id);
                            call.fourTelUserName='创业者';
                            call.fourTelUserGender=2;
                            call.webcall(phone);
                            jQuery.ajax({
                                url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                                type:'get',
                                data:'com_id='+com_id+'&cb_num='+phone,
                                cache:false,
                                dataType:'jsonp',
                                async:false,
                                jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                                success:function(data,text)
                                {
                                    alert(data.msg);
                                    setTimeout(sleepReload(),'2000');  
                                }
                            });
                        }*/
                    }else{
                        alert('留言成功！');
                        window.location.reload();
                    }

                }else{
                    alert('验证码不正确！请输入正确的验证码');
                }
            }
        });
    }
}
(function(m, ei, q, i, a, j, s) {
    m[a] = m[a] || function() {
        (m[a].a = m[a].a || []).push(arguments)
    };
    j = ei.createElement(q),
        s = ei.getElementsByTagName(q)[0];
    j.async = true;
    j.charset = 'UTF-8';
    j.src = i + '?v=' + new Date().getUTCDate();
    s.parentNode.insertBefore(j, s);
})(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
_MEIQIA('entId', 18836);
_MEIQIA('withoutBtn', true);
</script>
<div id="div" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 15px; text-align:center; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);"><a id="widget" onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="color:#fff;">在线<br />咨询</a></div>
<!-- 项目页底部定位 endd -->
