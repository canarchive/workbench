<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/house/favicon.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $content; ?>
<input type="hidden" id="currentCityCode" value="<?= $this->context->currentCityCode; ?>" />
<script>

	function searchOpt()
    {
		var url = '/api/search.html';
		var data = {
		    'keyword': jq('.keyword').val(),
		    'search_sort': jq('.search_sort').val()
		}
        jq.ajax({
            type: "POST",
            url: "/search.html",
            data: data,
            success:function(result){
                if (result.status != 200) {
                    alert(result.message);
                } else {
                }
            }
        });
    }
</script>
<?php $this->endContent(); ?>
