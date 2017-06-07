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
    <?= $this->render('_nav', ['curAction' => 'index']); ?>
    <section class="main-wrap sms-container">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">业主信息</div>
				<!--<div class="sub-title">使用接口进行发送时会将进行模板匹配,符合模板的内容将不再进行审核，您可以在这里查看、提交模板。</div>-->
            </div>
            <script>var url_key = '';</script>
            <ul class="breadcrumbs">
                <li>业主</li>
                <li>业主列表</li>信息总数:<?= $pages->totalCount; ?></ul>
        </div>
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="block">
                    <div class="block-hd">
                        <h2>业主列表</h2></div>
                    <div class="block-bd">
                        <table class="table table-bordered sms-template-list footable">
                            <thead>
                                <tr>
                                    <th data-hide="phone,tablet" class="time">报名时间</th>
                                    <th data-hide="phone,tablet" class="time">姓名</th>
                                    <th class="time">手机号</th>
                                    <th data-hide="phone,tablet" class="time">查看时间</th>
                                    <th data-hide="phone,tablet" class="time">输入城市</th>
                                    <th data-hide="phone,tablet" class="time">面积</th>
                                    <!--<th data-hide="phone,tablet" class="time">关键字</th>-->
                                    <!--<th data-hide="phone,tablet" class="time">渠道(bd:百度；sg:搜狗；）</th>-->
                                    <th class="status">状态</th>
                                    <th class="">IP</th>
                                    <th class="">备注信息</th>
                                    <!--<th data-hide="phone" class="ctr">操作</th></tr>-->
                            </thead>
                            <tbody>
                                <?php if (isset($infos)) { foreach ($infos as $info) { ?>
                                <tr>
								    <td><?= date('Y-m-d H:i:s', $info['signup_at']); ?></td>
								    <td><?= $info['name']; ?></td>
									<td id="info-<?= $info->id; ?>"><?= $info['mobile']; ?> <?php if (!$info['view_at']) { echo '<a onclick="viewInfo(' . $info['id'] . ');">查看</a>'; } ?></td>
									<td id="info_at-<?= $info->id; ?>"><?php if($info['view_at']) { echo date('Y-m-d H:i:s', $info['view_at']); } ?></td>
								    <td><?= $info['city_input']; ?></td>
								    <td><?= $info['area_input']; ?></td>
								    <td><?php //echo $info['keyword']; ?></td>
								    <td><?php //echo $info['channel']; ?></td>
								    <td><?= $info->statusInfos[$info['status']]; ?></td>
								    <td><?= $info['signup_city']; ?></td>
                                    <td><?= $info['note']; ?></td>
                                    <td class="footable-visible footable-last-column">
                                        <!--<a href="" class="button radius secondary tiny"><i class="fa fa-eye"></i></a>-->
                                        <!--<a href="<?= Url::to(['/user/message', 'id' => $info['id']]); ?>" title="留言" class="button success radius tiny"><i>我要留言</i></a>
                                        <a href="<?= Url::to(['/user/notelist', 'id' => $info['id']]); ?>" title="备注列表" class="button success radius tiny"><i>备注列表</i></a>-->
                                    </td>
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

