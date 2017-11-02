<?php
echo $this->render('_base_info', ['model' => $model]);
echo $this->render('_listinfo_house', ['modelUser' => $model, 'houseInfos' => $houseInfos, 'userMerchantInfos' => $userMerchantInfos]);
echo $this->render('@baseapp/spread/views/user/_listinfo_callback', ['modelUser' => $model, 'callbackInfos' => $callbackInfos]);
?>
<script type="text/javascript">

function addElemForUser(data)
{
    var url = '';
    var table = data.table;
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(response) {
            var status = response.status;
            if (status == 200) {
                if (table == 'callback') {
                    var newContent = "<tr>"
                        + "<td>" + response.data.service_id + "</td>"
                        + "<td>" + response.data.status + "</td>"
                        + "<td>" + response.data.invalid_status + "</td>"
                        + "<td>" + response.data.out_status + "</td>"
                        + "<td>" + response.data.follow_status + "</td>"
                        + "<td>" + data.signed_merchant + "</td>"
                        + "<td>" + data.content + "</td>"
                        + "<td>" + response.data.created_at + "</td>"
                        + "</tr>";
                    $("#userinfo_status").text(response.data.status);
                    $("#userinfo_invalid_status").text(response.data.invalid_status);
                    $("#userinfo_out_status").text(response.data.out_status);
                } else if (table == 'house' || table == 'user_merchant') {
                    var newContent = response.content;
                }
                ShowSuccessMessage("信息添加成功", 3000);
                $("#" + table + "_infos").prepend(newContent);
            } else {
                ShowErrorMessage(response.message, 3000);
            }
        }
    });
}

function updateElemForUser(table, info_id, field, value)
{
    var url = '';
    var data = {
        'table': table,
        'info_id': info_id,
        'field': field,
        'value': value
    };
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        dataType: "json",
        success: function(data) {
            if (data.status == 200) {
                ShowSuccessMessage("信息编辑成功", 3000);
            } else {
                ShowErrorMessage(data.message, 3000);
            }
        }
    });
}
</script>
