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
<!--footer-->
<script>project_id = 60614;
    addPageView("pv", project_id);

    $(function() {
        var attention_lasturl = window.location.href;
        var attention_fromurl = document.referrer;
        $('#attention_lasturl').val(attention_lasturl);
        $('#attention_fromurl').val(attention_fromurl);
        $('#basicfromurl').val(attention_fromurl);
        $('#basiclasturl').val(attention_lasturl);
        $('#editfromurl').val(attention_fromurl);
        $('#editlasturl').val(attention_lasturl);
    });
    function attentionMessage() {
        var messContent = $("#messContent").val();
        messContent = messContent.replace(/(^\s*)|(\s*$)/g, "");
        if (messContent == '') {
            alert('留言内容不能为空！');
            return false;
        }
        var mpnum = $("#messMobile").val();
        var yanz = /^(86)?0?1\d{10}$/;
        if (mpnum == '') {
            alert('联系方式不能为空');
            return false;
        } else {
            if (yanz.test(mpnum) == false) {
                alert('请输入正确的联系方式');
                return false;
            }
        }
        $('#att_submitBtn').hide();
    }
    function editMessageFrom() {
        jQuery('#c_infoBox1').hide();
        jQuery('#c_infoBox2').show();
        var add_blag_origin = $("#add_blag_origin").val();
        edit_blag_origin = parseInt(add_blag_origin) + 2;
        $("#edit_blag_origin").val(edit_blag_origin);
    }</script>
<iframe style="display:none;" id="createiframeq" src="about:blank" name="createiframeq"></iframe>
<iframe style="display:none;" id="frmForTel" src="about:blank" name="frmForTel"></iframe>
<script type="text/javascript">if (document.getElementById("chakanzbdh")) {
        document.getElementById("chakanzbdh").onclick = function() {
            document.getElementById("zongbudianhua").style.display = "block";
            document.getElementById("chakanzbdh").style.display = "none";
            document.getElementById("frmForTel").src = "http://search1.jmw.com.cn/index.php/Operat/index?&type=TEL&id=60614";
            document.getElementById("frmForTel").src = "http://liuyan.jmw.com.cn/?param=32-60614-3";
            var vid = document.getElementById("CompanyType").value;
            if (vid == 5 || vid == 6 || vid == 0) {
                document.getElementById("zongbudianhua").innerHTML = "<strong class=\"redTxt\">该项目信息暂未通过核实</strong>";
            } else {
                document.getElementById("zongbudianhua").innerHTML = "<strong class=\"redTxt\">021-57736768转588<img src=\"http://image1.jmw.com.cn/search/images/left_ico5.jpg\" width=\"17\"  height=\"14\" style=\"_margin-top:5px;\" /></strong>";
            }
        }
    }</script>
