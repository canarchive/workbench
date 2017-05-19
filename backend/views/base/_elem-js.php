<?php
use yii\helpers\Json;
?>
<?php if (isset($this->params['haveTreeList'])) { ?>
<script src="http://static.acanstudio.com/backend/js/jquery.treetable.js"></script>
<script src="http://static.acanstudio.com/backend/js/jquery.treeview.js"></script>
<?php } ?>
<script language="javascript">
$(document).ready(function(){
  var current_theme = $.cookie('current_theme')==null ? 'cerulean' :$.cookie('current_theme');
  switch_theme(current_theme);

  $('#themes a[data-value="'+current_theme+'"]').find('i').addClass('icon-ok');

  $('#themes a').click(function(e){
    e.preventDefault();
    current_theme=$(this).attr('data-value');
    $.cookie('current_theme',current_theme,{expires:365});
    switch_theme(current_theme);
    $('#themes i').removeClass('icon-ok');
    $(this).find('i').addClass('icon-ok');
  });

  function switch_theme(theme_name)
  {
    $('#bs-css').attr('href','<?= Yii::getAlias('@asseturl'); ?>/backend/css/bootstrap-'+theme_name+'.min.css');
  }
});
var menuJsons = <?= Json::encode($this->params['menus']); ?>;

function setLeftNav(parentCode)
{
  $("#baseMenu>li").attr("class", "");
  var currentBaseMenu = "baseMenu_" + parentCode;
  $("#" + currentBaseMenu).attr("class", "active");

  var subMenuStr = '';
  var isActive = '';
  var haveActive = false;
  var currentController = '';
  var currentMethod = '';
  $.each(menuJsons, function(i,n) {
    if (n.parent_code == parentCode) {
      subMenuStr += '<li class="nav-header hidden-tablet">' + n.name + '</li>';
      $.each(menuJsons, function(i1, n1) {
        if (n1.parent_code == n.code && n1.display == 2) {
          if (n1.id == '<?= $this->params['currentMenu']['id']; ?>') {
            isActive = 'class="active"';
            haveActive = true;
          }
          subMenuStr += '<li class="abc" ' + isActive + ' id="left_menu_' + n1.code + '"><a class="ajax-link" href="<?= Yii::getAlias('@backendurl'); ?>' + n1.url + '"><i class="icon-align-justify"></i><span class="hidden-tablet">' + n1.name + '</span></a></li>';
          isActive = '';
        }
      });
    }
  });

  $("#leftMenu").html(subMenuStr);
  $("#leftMenu").show();
  $("#leftMenuContent").hide();

  if (!haveActive) {
      var appMenusJson = <?= Json::encode($this->params['appMenus']);?>;
      $.each(appMenusJson, function(i2, n2) {
          if (!haveActive && n2.display == 2 && $n2.extparam == '') {
              $("#left_menu_" + n2.code).addClass("active");
              haveActive = true;
          }
      });
  }
}
setLeftNav('<?php $baseMenu = isset($this->params['parentMenu']['code']) ? $this->params['parentMenu']['code'] : 'backend_panel'; echo $baseMenu; ?>');
var showCatType = typeof(showCat);
if (showCatType == 'function') {
    showCat();
}

function updateElemByAjax(url, info_id, field, value)
{
    var data = {
        'info_id': info_id,
        'field': field,
        'value': value
    };
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(data,status) {
            if (status == 'success') {
                alert('编辑成功');
            } else {
                alert('编辑失败');
            }
        }
    });
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
            alert("Data: " + data + "\nStatus: " + status);
        }
    });
}
</script>
<script>
function changeDate(table, modelId, field, value)
{
    var valueOld = $("#" + field + '_old').val();
    if (value != valueOld) {
        updateElemForUser(table, modelId, field, value);
    }
    $("#" + field + '_old').val(value);
}
</script>
