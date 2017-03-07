<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/house/favicon.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $content; ?>

<script>
function searchOptjm()
{
    var data = {
        'search_sort': $('#search_sort').val(),
        'keyword': $('#keywordInput').val(),
        '_csrf': $('#_csrf').val()
    };
    console.log(data);
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
</script>
<?php $this->endContent(); ?>
