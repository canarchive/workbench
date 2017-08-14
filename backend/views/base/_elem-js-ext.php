<script>

function updateElemByAjax(url, table, info_id, field, value)
{
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
        success: function(data,status) {
            if (data.status == 200) {
                ShowSuccessMessage("信息编辑成功", 3000);
            } else {
                ShowErrorMessage(data.message, 3000);
            }
        }
    });
}

function changeDate(url, table, info_id, field, value)
{
    var valueOld = $("#" + field + '_old').val();
    if (value != valueOld) {
        updateElemByAjax(url, table, info_id, field, value);
    }
    $("#" + field + '_old').val(value);
}

function operationForSelected(url)
{
    var elems = $("input[name='selection[]']");
    var selections = '';
    elems.each(function(index,item) {
        if ($(this).prop('checked')) {
            selections += ',' + $(this).val();
        }
    });
    alert(selections);

    $.ajax({
        type: "POST",
        url: url,
        data: {selections: selections},
        success: function(data,status) {
            //alert("Data: " + data + "\nStatus: " + status);
            ShowSuccessMessage("信息编辑成功", 3000);
        }
    });
}

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

var clipboard = new Clipboard('.copy-btn');

clipboard.on('success', function(e) {
    //console.log(e);
});

clipboard.on('error', function(e) {
    //console.log(e);
});
</script>
