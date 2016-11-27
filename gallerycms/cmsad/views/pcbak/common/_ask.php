<!-- 免费咨询 begin-->
<div class="free-ask">
    <div class="title">
        <span>免费咨询</span></div>
    <div class="con">
        <div class="form">
            <form action="/customer/feedback?is_ajax=1">
                <input type="hidden" name="ischeckMobile" value="0" />
                <div class="textfile">
                    <span class="t">公司名称</span>
                    <input type="text" name="company" id="company_bottom"></div>
                <div class="textfile">
                    <span class="t">手机号码</span>
                    <input type="text" name="mobile" id="mycall_bottom"></div>
                <div class="textfile wherecity wrap">
                    <span class="t">所在城市</span>
                    <div class="nice-select marginr gpp" name="nice-select">
                        <input type="text" class="gp" value="请选择省份" readonly="" id="gp_bottom2" name="province"></div>
                    <div class="nice-select marginr gtt" name="nice-select">
                        <input type="text" class="gt" value="请选择城市" readonly="" id="gt_bottom2" name="city">
                        <ul class="city" style="display: none;"></ul>
                    </div>
                    <div class="nice-select gbb" name="nice-select">
                        <input type="text" class="gd" value="请选择区/县" readonly="" id="gd_bottom2" name="district">
                        <ul class="district" style="display: none;"></ul>
                    </div>
                </div>
                <div class="textfile lxman">
                    <span class="t">联系人</span>
                    <input type="text" name="truename" id="name_bottom">
                    <div class="appellation">
                        <input type="radio" name="sex" checked="checked" value="先生">
                        <span>先生</span>
                        <input type="radio" name="sex" value="女士">
                        <span>女士</span></div>
                </div>
                <div class="textfile z2">
                    <span class="t">邮箱地址</span>
                    <input type="text" name="email" id="email_bottom2"></div>
                <div class="textfile">
                    <a href="javascript:void(0);" class="submit zixunsubmit" value="99">提交</a></div>
            </form>
        </div>
        <div class="free-tips">我们会尽快联系您，等待期间需要获取更多信息，请
            <a href="http://www.300.cn">继续访问</a>或
            <a id="TQzx3" clickCount="true" clickAdd="zaixianzixun">联系我们</a>。感谢您对中企产品及服务的支持。</div></div>
</div>
<script>$(function() {
        $('#email_bottom2').mailAutoComplete({
            width: '404px'
        });
        $('#gp_bottom2').cityselect({
            cityNode: $('#gt_bottom2'),
            districtNode: $('#gd_bottom2')
        });

        var isLock = false;
        $('#verify_message').on('click',
        function() {
            if (isLock) {
                //alert('手机短信已发送');
                return false;
            }
            var mobile = $('#mycall_bottom').val();
            if (!validate.checkMobile(mobile)) {
                alert('手机号码格式有误');
                return false;
            }
            isLock = true;
            // $(this).attr('href')
            $.post('/verify/message', {
                mobile: mobile
            },
            function(json) {
                if (json.status == 0) {
                    alert(json.info);
                    isLock = false;
                    return false;
                }
                alert(json.info);
            },
            'json');
            return false;
        })
    });</script>
<!-- 免费咨询 end-->
