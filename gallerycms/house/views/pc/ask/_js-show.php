<script type="text/javascript">var ask_info_uid = jq('#ask_info_uid').val();
    var ask_info_status = jq('#ask_info_status').val();
    var isanswer = jq('#isanswer').val();
    var ask_userid = jq('#ask_userid').val();
    var ask_userid = JSON.parse(ask_userid);
    var answeraccept = jq('#answeraccept').val();
    var to8to_uid = getCookie('to8to_uid');
    userid = '';
    if (to8to_uid != '') {
        jq.ajax({
            dataType: "text",
            type: "POST",
            async: false,
            url: "/ask/ask_post.php",
            data: {
                current_userid: to8to_uid
            },
            success: function(res) {
                jq('body').data('userid', res);
            }
        });
        var userid = jq('body').data('userid');
    }
    if (ask_info_uid != to8to_uid && ask_info_status == 0 && isanswer != 1) {
        jq('#wyhd').css('display', 'block');
        jq('#btjd').css('display', 'block');
    }
    if (ask_info_uid == to8to_uid && ask_info_status == 0) {
        jq('#bcwt').css('display', 'block');
    }
    if (ask_info_uid == to8to_uid && ask_info_status == 0 && answeraccept == 0) {
        jq('.zjda').css('display', 'inline');
    }
    bj_uid = '#bj_' + to8to_uid;
    bjda = '.bjda_' + to8to_uid;
    editquestion_uid = '.editquestion_' + to8to_uid;
    jq(ask_userid).each(function() {
        if (this == to8to_uid && ask_info_status == 0 && userid == -1) {
            jq(bjda).append("<span class='col_r'><a href='javascript:;' onclick='jq(\"" + editquestion_uid + "\").toggle();jq(\".ask_commit\").hide();' class='ask_btn_green ml10'>编辑</a></span>");
        }
        if (this == to8to_uid && ask_info_status == 0) {
            jq(bj_uid).css('display', 'inline');
        }
    });

    jq('#tijiao').click(function() {
        jq('#tijiao').attr('disabled', true);
    });
    askSolved.init();
    var askpost = 0;
    var postTag = 0;
    jq('#denglu').click(function() {
        var username = getCookie('username', true);
        if (!username) {
            alert('请登录！');
        }
    }); function answerTijiao() {
        var username = getCookie('username', true);
        if (!username) {
            askpost = 1;
            form_id = 'jiedawt';
            showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
            return false;
        }
        setCookie('answer_sign', 'as', 3600 * 1000);
        if (postTag === 0) {
            postTag++;
            jq("#jiedawt").submit();
        }
    }
    function answerTijiao2() {
        var username = getCookie('username', true);
        if (!username) {
            askpost = 1;
            form_id = 'bucong';
            showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
            return false;
        }
        setCookie('bochong_sign', 'bs', 3600 * 1000);
        jq("#bucong").submit();
    }
    jq('#showthis').click(function() {
        jq('.bg_f8f8f82').show();
        jq(this).hide();
    }); function editanswerTijiao(anid) {
        var username = getCookie('username', true);
        form_id = '#bianjida_' + anid;
        if (!username) {
            askpost = 1;
            showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
            return false;
        }
        setCookie('editanswer_sign', 'es', 3600 * 1000);
        jq(form_id).submit();
    }

    //成功赚取金币弹窗
    function jinBiNum(num) {
        var successStr = '<div class="box_mobileverify_suc zxgxbg_coin_tips">\
<div class="mod_pagetip">\
    <span class="mod_pagetip_ico"><em class="ico_tip_ok"></em></span>\
    <div class="mod_pagetip_bd">\
        <div class="mod_pagetip_title">恭喜您成功赚取<span>' + num + '</span>金币！</div>\
        <div class="mod_pagetip_btn">\
            <a href="javascript:askSolvedCloseFn();" class="btn_cancel">关闭</a>\
        </div>\
    </div>\
</div>\
</div>';

        jq('.window_box').windowBox({
            width: 454,
            title: "",
            closeFn: 'askSolvedCloseFn',
            wbcStr: successStr
        });
    }
    function askSolvedCloseFn() {
        window_box_close();
        window.location.reload();
    }

    function pop_parent_submit() {
        form_id = '#' + form_id;
        if (askpost == 1) jq(form_id).submit();
        if (getCookie('ask_help') == 1) {
            var name = get_cookie('ask_name');
            var id = getCookie('ask_id');
            askSolved.askHelpBox(name, id);
        }
        jq("#filename").show();
    }
    function get_cookie(objName) {
        var arrStr = document.cookie.split("; ");
        for (var i = 0; i < arrStr.length; i++) {
            var temp = arrStr[i].split("=");
            if (temp[0] == objName) {
                return decodeURIComponent(decodeURIComponent(temp[1]));
            }
        }
    }
    function zan(anid, askid) {
        jq.ajax({
            type: 'post',
            url: 'ask_post.php',
            data: {
                action: 'zan',
                anid: anid,
                askid: askid
            },
            dataType: "json",
            success: function(data) {
                if (data.status == 'ok') {
                    jq('#class' + anid).attr("class", "ico_praise_new");
                    var zannum = Number(jq('#show' + anid).text());
                    jq('#show' + anid).html(zannum + 1);
                    jq('#show' + anid).parents('a').css('color', "#f25618");
                } else if (data.status == 'done') {
                    alert('您已点赞。24 小时后可再赞他一次。');
                } else {
                    alert('请稍后再试');
                }
            }
        })
    }
    function showcommit(id) {
        jq('.edit_da').hide();
        var commit = jq("#showCommit_" + id);
        if (commit.css('display') == 'none') {
            commit.show();
        } else {
            commit.hide();
        }
    }
    jq('.clickstream_tag').click(function() {
        var _tag = jq(this).attr('data-ptag');
        if (_tag) {
            try {
                clickStream.getCvParams(_tag);
            } catch(e) {

}
        }
    });
    //获取补充问题
    jq(document).ready(function() {
        var ajaxbs = getCookie('bochong_sign');
        ask_id = jq('input[name="ask_id"]').val();
        if (ajaxbs == 'bs') {
            jq.ajax({
                dataType: "json",
                type: "POST",
                url: "/ask/ask_post.php",
                data: {
                    ask_id: ask_id,
                    ans_sign: 'bs'
                },
                success: function(res) {
                    jq('#bc_direction').html(res.direction);
                }
            });
        }
    });

    //获取编辑问题
    jq(document).ready(function() {
        var ajaxes = getCookie('editanswer_sign');
        editanswer_askid = jq('#editanswer_askid').val();
        if (ajaxes == 'es') {
            jq.ajax({
                dataType: "json",
                type: "POST",
                url: "/ask/ask_post.php",
                data: {
                    editanswer_askid: editanswer_askid,
                    ans_sign: 'es'
                },
                success: function(res) {
                    jq.each(res,
                    function(key, value) {
                        anid = '.edit_' + value.anid;
                        jq(anid).html(value.content);
                        jq(anid + ' .editans').html(value.content);
                    })
                }
            });
        }
    });</script>
