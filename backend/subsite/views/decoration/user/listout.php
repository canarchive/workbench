<?php
use yii\helpers\Html;

$ignores = [];
switch ($searchModel->status) {
case 'follow-plan':
    $ignores = ['status', 'invalid_status'];
    break;
case 'bad':
    $ignores = ['status', 'callback_again'];
    break;
default:
    $ignores = ['invalid_status', 'callback_again'];
}
$ignores = array_merge(['channel', 'city_input', 'city'], $ignores);
$columns = $searchModel->getColumnsUser($ignores);
$columns['mobile'] = [
    'format' => 'raw',
    'attribute' => 'mobile',
    'value' => function($model) {
        if ($model->view_at > 0) {
            return $model->mobile;
        }
        $mobile = '<span id="info-' . $model->id . '">' . $model->maskMobile($model->mobile);
        $str = $mobile . '  ' . '<a onclick="viewInfo(' . $model->id . ');">查看</a></span>';
        return $str;
    }
];
/*$columns['view_at'] = [
	'attribute' => 'view_at',
	'value' => function($model) {
		return '<span id="info_at-' . $model->id . '">' . $model->formatTimestamp($model->view_at) . '</span>';
	}
];*/
$columns['mobile'] = 'mobile';

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $columns,
];

echo $this->render('@baseapp/spread/views/user/_nav-status', ['model' => $searchModel]);
$searchContent = $this->render('@baseapp/spread/views/user/_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
?>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<script>
function viewInfo(ids)
{
    if (ids == 'all') {
        ids = 0;
    }

    var url = '?action=view&id=' + ids;
    var data = {
        '_csrf': $('#_csrf').val(),
        'ids': ids
    };
console.log(data);

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
