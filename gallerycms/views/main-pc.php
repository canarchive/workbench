<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/house/favicon.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<?= $content; ?>
<input type="hidden" id="currentCityCode" value="<?= $this->context->currentCityCode; ?>" />
<script>
function searchOpt()
{
    var data = {
        'search_sort': jq('#search_sort').val(),
        'keyword': jq('#keyword').val(),
        '_csrf': jq('#_csrf').val()
    };
    console.log(data);
    if (!data.keyword || !data.search_sort) {
        alert('搜索词不能为空');
        return ;
    }
    jq.ajax({
        type: "POST",
        url: "/search.html",
        data: data,
        success:function(result){
            if(result.status == 200) {
                window.location.href = result.url;
            } else {
                alert(result.message);
                return false;
            }
        }
    });
}

function searchOptj()
{
    var data = {
        'search_sort': $('#search_sort').val(),
        'keyword': $('#keyword_fenci').val(),
        '_csrf': $('#_csrf').val()
    };
    if (!data.keyword || !data.search_sort) {
        alert('搜索词不能为空');
        return ;
    }
    $.ajax({
        type: "POST",
        url: "/search.html",
        data: data,
        success:function(result){
            if(result.status == 200) {
                window.location.href = result.url;
            } else {
                alert(result.message);
                return false;
            }
        }
    });
}
function searchOptjm()
{
    var data = {
        'search_sort': $('#search_sort').val(),
        'keyword': $('#keywordInput').val(),
        '_csrf': $('#_csrf').val()
    };
    if (!data.keyword || !data.search_sort || data.keyword == '搜装修公司') {
        alert('搜索词不能为空');
        return ;
    }
    $.ajax({
        type: "POST",
        url: "/search.html",
        data: data,
        success:function(result){
            if(result.status == 200) {
                window.location.href = result.url;
            } else {
                alert(result.message);
                return false;
            }
        }
    });
}
</script>
<?php $this->endContent(); ?>
