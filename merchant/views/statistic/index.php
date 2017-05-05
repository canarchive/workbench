<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->params['cssFiles'] = ['sms'];
$this->params['jsFiles'] = ['jquery-2.1.0'];
$this->params['jsFooterFiles'] = [
	'foundation.min',
	'main', 'footable', 'tooltips', 'mustache', 'sms'
];
$this->params['currentNav'] = 'owner';
Yii::$app->params['seoTitle'] = '业主信息列表-' . Yii::$app->params['seoTitle'];
?>
<div class="container">
    <?= $this->render('_nav', ['type' => $type]); ?>
    <section class="main-wrap sms-container">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">统计信息</div>
            </div>
            <script>var url_key = '';</script>
            <ul class="breadcrumbs">
                <li>统计信息</li>
                <li>日报</li></ul>
        </div>
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="block">
                    <div class="block-hd"><h2>报表</h2></div>
                    <div class="block-bd">
                        <table class="table table-bordered sms-template-list footable">
                            <thead>
                                <tr>
                                    <?php foreach ($fields as $field) { ?>
                                    <th data-hide="phone,tablet" class="time"><?= $model->getAttributeLabel($field); ?></th>
                                    <?php } ?>
                                    <th data-hide="phone,tablet" class="time">访问数</th>
                                    <th data-hide="phone,tablet" class="time">报名数</th>
                                    <th class="phone">访问转化率态</th>
                                    <!--<th class="status">SEM点击</th>
                                    <th class="status">点击转化率</th>
                                    <th class="status">消费</th>
                                    <th class="status">报名成本</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($infos)) { foreach ($infos as $info) { ?>
                                <tr>
                                    <?php foreach ($fields as $field) { ?>
								    <td><?= $info[$field]; ?></td>
                                    <?php } ?>
								    <td><?= $info['visit_num']; ?></td>
								    <td><?= $info['visit_num_success']; ?></td>
								    <td><?= $info->successRate; ?></td>
								    <!--<td><?php //echo $info->getHitInfo($fields, $info, $where); ?></td>
								    <td><?php //echo  $info->getHitRate($fields, $info, $where); ?></td>
								    <td><?php //echo $info->getFeeInfo($fields, $info, $where); ?></td>
								    <td><?php //echo $info->getFeeAverage($fields, $info, $where); ?></td>-->
                                </tr>
                                <?php } } ?>
                            </tbody>
                        </table>
                        <?php if (isset($pages)) { ?>
						<div class="pagination-centered"><?= LinkPager::widget(['pagination' => $pages]); ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<script>
function viewInfo(ids)
{
	if (ids == 'all') {
		ids = 0;
	}
		
	var url = '<?= Url::to(['/user/view-ajax']); ?>';
	var data = {
		'_csrf': $('#_csrf').val(),
		'ids': ids
	};

    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
        success: function(data,status) {
			if (data.status != 200) {
				alert(data.message);
			} else {
				var datas = data.datas;
                //datas.each(function(index,item) {
				$.each(datas, function(index, item) {
					$('#info-' + index).text(item.mobile);
					$('#info_at-' + index).text(item.viewAt);
                });
			console.log(datas);
			}
		}
	});
}
</script>

