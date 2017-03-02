<?php
$info = $this->context->mDatas['info'];
?>
<div class="xiangmujieshao" name="xiangmujieshao" id="xiangmujieshao">
    <!--<div class="xiangmujieshao-title">
        <h2 class="fl">
            <a href="http://m.jmw.com.cn/xm137829/xiangmujieshao/">晨阳水漆项目介绍</a></h2>
        <a class="fr jiameng-more show_content1" href="javascript:;" style="display: block;color: #b0b0b0;font-size: 10px;line-height: 39px;">展开更多加盟信息
            <img src="http://m.jmw.com.cn/images/sanjiao.png"></a>
        <a class="fr jiameng-more hide_content1" href="javascript:;" style="display: none;color: #b0b0b0;font-size: 10px;line-height: 39px;">收起
            <img src="http://m.jmw.com.cn/images/daosanjiao.png"></a>
    </div>-->
    <div class="xiangmujieshao-article basic1" id="directory" style="display: block;padding-bottom:20px;color: #333333;font-size: 13px;overflow: hidden;max-height: 730px;width:100%;">
        <p><?= $info['description']; ?></p>
    </div>
</div>
<div class="blank"></div>
