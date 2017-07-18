<?php
echo $this->render('_base_info', ['model' => $model]);
//echo $this->render('_listinfo_interview', ['merchantModel' => $model, 'interviewInfos' => $interviewInfos, 'contactInfos' => $contactInfos]);
echo $this->render('_listinfo_contact', ['merchantModel' => $model, 'contactInfos' => $contactInfos]);
echo $this->render('_listinfo_callback', ['merchantModel' => $model, 'callbackInfos' => $callbackInfos, 'contactInfos' => $contactInfos]);
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
                        + "<td>" + data.content + "</td>"
                        + "<td>" + response.created_at + "</td>"
                        + "</tr>";
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
