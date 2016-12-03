<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'common', 'public', 'style_z_email',
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<style>#notice{margin-left:13px; } #notice:hover{color: #ec6500;}</style>
<div class="topimg-360" style="background:url(http://s.300.cn/current/home/images/zmaile--banner.jpg) no-repeat top center">
    <div class="topimg-con zmail-img pop_zixun">
        <a href="javascript:void(0);" value="1">立即咨询</a></div>
</div>
<!-- Z云邮部分二 -->
<div class="zyy_item2">
    <div class="zyy_warp">
        <div class="zyy_title">
            <h2>选Z云邮 . 全球云游</h2>
            <p>全球云游 畅通无忧的企业邮局</p>
        </div>
        <div class="zyy_it2_left">
            <div class="zyy_text">
                <span class="zyy_text_title">五大洲34个地区部署服务器</span>
                <h3>确保企业邮箱海外畅通</h3>
                <div class="txt">
                    <p>多点海外双向转发，安全送达全球各地，外贸跟单一触即发</p>
                    <p>亚洲、欧洲、美洲、大洋州等五大洲，34个地区部署收发节点</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">国内28个地区部署服务器</span>
                <h3>确保国内邮件畅通无阻</h3>
                <div class="txt">
                    <p>与中国电信、新联通、教育网三线互通，确保国内邮件畅通无阻</p>
                    <p>北京、广州、深圳、上海等28个地区部署收发节点</p>
                </div>
            </div>
        </div>
        <div class="zyy_it2_right">
            <img src="http://s.300.cn/current/home/images/zmail-pic1.png" alt="全球云游 畅通无忧的企业邮局" /></div>
    </div>
</div>
<!-- Z云邮部分二 end-->
<!-- Z云邮部分三 -->
<div class="zyy_item3">
    <div class="zyy_warp">
        <p class="bg">
            <img src="http://s.300.cn/current/home/images/zmail-pic2_bg.png" alt="云邮 . 多终端使用" /></p>
        <div class="zyy_title">
            <h2>选Z云邮 . 多终端使用</h2>
            <p>使用自由 多终端同步的企业邮局</p>
        </div>
        <div class="zyy_it3_left">
            <img src="http://s.300.cn/current/home/images/zmail-pic2.png" alt="Z云邮 . 多终端使用" /></div>
        <div class="zyy_it3_right">
            <div class="zyy_text">
                <span class="zyy_text_title">收发邮件同步</span>
                <div class="txt">
                    <p>支持IMAP协议，PC客户端、移动客户端中的邮件、文件夹和web端的收发邮件完全同步</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">通讯录同步</span>
                <div class="txt">
                    <p>PC安装登陆客户端助手；手机安装Z云邮客户端即可实现通讯录的同步</p>
                    <p>无需登录Webmail，在Foxmail客户端、APP手机客户端可直接使用企业通讯录，并上传超大附件</p>
                </div>
            </div>
            <div class="zyy_text">
                <span class="zyy_text_title">网盘数据同步</span>
                <div class="txt">
                    <p>个人云盘空间数据自动上传下载，时刻保持同步，移动客户端随时获取</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Z云邮部分三 end-->
<!-- Z云邮部分四 -->
<div class="zyy_item4">
    <div class="zyy_warp zyy_warp1">
        <div class="zyy_title">
            <h2>选Z云邮 . 高效省心</h2>
            <p>应用丰富 高效省心的企业邮局</p>
        </div>
        <div class="zyy_it4_left zyy_text_box2">
            <div class="zyy_text">
                <span class="zyy_text_title">优势一</span>
                <h3>监控企业邮件，维护企业业务安全</h3>
                <div class="txt">
                    <p>域内监控规则随便设置，你想监控谁都可以</p>
                    <p>监控邮件全部集中存放在邮件监控文件夹中，方便查看</p>
                    <p>可以通过被监控者、邮件主题、类型和时间范围快速定位目标邮件</p>
                </div>
            </div>
        </div>
        <div class="zyy_it4_right">
            <img src="http://s.300.cn/current/home/images/zmail-pic3.png" alt="Z云邮 . 高效省心 " /></div>
    </div>
    <div class="zyy_warp zyy_warp2">
        <div class="zyy_it4_left">
            <img src="http://s.300.cn/current/home/images/zmail-pic4.png" alt="Z云邮 . 高效省心 " /></div>
        <div class="zyy_it4_right zyy_text_box2">
            <div class="zyy_text">
                <span class="zyy_text_title">优势二</span>
                <h3>企业云盘 企业内部的信息仓库 方便企业快速分发共享内部资料</h3>
                <div class="txt">
                    <p>云盘空间，自由分配，支持无限扩容</p>
                    <p>分权管理，不同用户设置不同的权限</p>
                    <p>云盘监控，实时监控用户云盘使用情况</p>
                    <p>支持多个文件同时上传，支持断点续传</p>
                    <p>企业内部文件共享，无需发送，对方即可查看</p>
                    <p>云盘回收站，误删文件随时找回</p>
                </div>
            </div>
        </div>
    </div>
    <div class="zyy_warp zyy_warp3">
        <div class="zyy_it4_left zyy_text_box2">
            <div class="zyy_text">
                <span class="zyy_text_title">优势三</span>
                <h3>邮件归档往来邮件 历史信息有据可查</h3>
                <div class="txt">
                    <p>作为企业邮件数据备份：不受账号删除、个人操作的影响</p>
                    <p>作为法律依据：归档邮件单独存放，原始信息记录完整保存，具备法律效力</p>
                </div>
            </div>
        </div>
        <div class="zyy_it4_right ">
            <img src="http://s.300.cn/current/home/images/zmail-pic5.png" alt="归档邮件" /></div>
    </div>
    <div class="zyy_warp zyy_warp2 zyy_warp4">
        <div class="zyy_it4_left">
            <img src="http://s.300.cn/current/home/images/zmail-pic6.png" alt="集成即时通讯" /></div>
        <div class="zyy_it4_right zyy_text_box2">
            <div class="zyy_text">
                <span class="zyy_text_title">优势四</span>
                <h3>集成即时通讯，企业专属的即时通讯工具</h3>
                <div class="txt">
                    <p>企业专属的即时通讯平台</p>
                    <p>统一的企业部门组织架构、实时同步更新</p>
                    <p>文本会话、音视频交流、文件传送使沟通更方便</p>
                    <p>群组、讨论组让协作更顺畅</p>
                    <p>新邮件到达、文档更新、通知公告即时通知提醒</p>
                    <p>空间企业资料文件“随身携带”，资料分享一触即达</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Z云邮部分四 end-->
<?= $this->render('../common/_ask'); ?>
