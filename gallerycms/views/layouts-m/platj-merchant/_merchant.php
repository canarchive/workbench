<?php
$mInfos = $this->context->mDatas['merchantInfos'];
?>
<style type="text/css">.youLike dl{ background:#f5f5f5; width:48%; border-radius:10px 10px 0 0; margin-top:14px;} .youLike dl a dt{ position:relative; } .youLike dl a dd{ height:30px; line-height:30px; padding-left:3px; box-sizing:border-box; } .youLike .p1{ font-size:0.85rem; width:100%; height:25px; line-height:25px; padding:0 2px; box-sizing:border-box; overflow:hidden; color:#fff; position:absolute; bottom:0; left:0; background:rgba(0,0,0,.7); } .youLike .p2{ color:#aeaeae; font-size:0.8rem; } .youLike .p2 em{ font-size:0.9rem; color:#e40000; font-weight:bold; } .youLike .p2 .span_money{ margin-left:4px; } .youLike .p2 .img1{ width:14px; height:14px; margin-top:8px; } .youLike dl dt img{ width:100%; height:100%;} @media (min-width:315px) and (max-width:340px){ .youLike .p2{ font-size:0.75rem; } .youLike .p2 .img2{ margin:1px 0px 0 1px; } .youLike .p2 .span_money{ margin-left:1px;} .youLike dl a dt{ height:96px; overflow:hidden; } } @media (min-width:351px) and (max-width:374px){ .youLike .p2{ font-size:0.75rem; } .youLike .p2 .img2{ margin:1px 3px 0 4px; } .youLike .p2 .span_money{ margin-left:4px;} } @media (min-width:341px) and (max-width:360px){ .youLike dl a dt{ height:110px; overflow:hidden; } } @media (min-width:361px) and (max-width:385px){ .youLike dl a dt{ height:115px; overflow:hidden; } } @media (min-width:386px) and (max-width:440px){ .youLike dl a dt{ height:125px; overflow:hidden; } } @media (min-width:441px) and (max-width:599px){ .youLike dl a dt{ height:155px; overflow:hidden; } } @media screen and (min-width:600px) { .youLike dl a dt{ height:245px; overflow:hidden; } }</style>
<!--猜你喜欢的加盟项目 start-->
<section class="ziXun">
    <h2 class="wrap">同类别装饰公司</h2>
    <div class="wrap youLike clear">
        <?php $i = 0; foreach ($mInfos as $info) { $classElem = $i % 2 == 0 ? 'fl' : 'fr'; ?>
        <dl class="<?= $classElem; ?>">
            <a href="<?= $info['infoUrl']; ?>">
                <dt>
                    <img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" />
                    <p class="p1"><?= $info['name']; ?></p></dt>
                <!--<dd>
                    <p class="p2 clear">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                        <span class="fl span_money">投资金额:</span>
                        <span>
                            <em>5~30</em>万</span></p>
                </dd>-->
            </a>
        </dl>
        <?php $i++; } ?>
    </div>
    <style>.more-icon { background: rgba(0, 0, 0, 0) url("http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5b596-3112.png") no-repeat scroll 0 0 / 12px auto; display: inline-block; height: 6px; margin-left: 8px; width: 12px; }</style>
    <a href="<?= "/{$info['city_code']}/merchant/"; ?>" title="查看更多装饰公司" style="font-size:12px;color:#62c77b;text-align: center;width: 100%;display:block; height:40px; line-height:40px; margin:auto;">查看更多装饰公司
        <i class="more-icon" id="more_jiameng"></i></a>
</section>
