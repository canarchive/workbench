<script type="text/javascript">
    $(function(){
         //页签切换
        $(".gwtg-wrap").TabSwitch({     
            classname: 'current',    
            type: 'click',
            menu: '.gwtg-btn li',
            content: '.gwtg-content .gwtg-c-main'
        });
    })
</script>
<script>$(function() {
        $('#email').mailAutoComplete({
            width: '404px'
        });
        $('.emailist li').live('mouseover',
        function() {
            $(this).addClass('on').siblings().removeClass('on');
        });
        $('#gp').cityselect({
            cityNode: $('#gt'),
            districtNode: $('#gd')
        });

        var isLock = false;
        /*$('#verify_mes').on('click', function() {
    console.log('yes');
});*/
        $('#verify_mes').on('click',
        function() {
            if (isLock) {
                //alert('手机短信已发送');
                return false;
            }
            var mobile = $('#mycall').val();
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
<script>$(function() {
        // 邮箱后缀名自动加载
        $('#email_bottom').mailAutoComplete();
        // 城市选择加载
        $('#gp_bottom').cityselect({
            cityNode: $('#gt_bottom'),
            districtNode: $('#gd_bottom')
        });
    });</script>
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
