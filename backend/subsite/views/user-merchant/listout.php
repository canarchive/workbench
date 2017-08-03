<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
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
        ],
        [
			'format' => 'raw',
            'attribute' => 'view_at',
            'value'=> function($model){
				return '<span id="info_at-' . $model->id . '">' . $model->formatTimestamp($model->view_at) . '</span>';
            },
        ],
		[
			'attribute' => 'userName',
			'value' => function($model) {
				return $model->userModel->name;
			}
        ],
		[
			'attribute' => 'houseAddress',
			'value' => function($model) {
				return $model->houseModel->region . '-' . $model->houseModel->address;
			}
        ],
		[
			'attribute' => 'houseArea',
			'value' => function($model) {
				return $model->houseModel->house_area;
			}
        ],
		[
			'attribute' => 'houseType',
			'value' => function($model) {
				return $model->houseModel->getKeyName('house_type', $model->houseModel->house_type);
			}
        ],
		[
			'attribute' => 'houseSort',
			'value' => function($model) {
				return $model->houseModel->getKeyName('house_sort', $model->houseModel->house_sort);
			}
        ],
        [
            'attribute' => 'note',
            'value' => function($model) {
                return $model->guestbookModel->reply;
            }
        ],
        [
            'attribute' => 'status',
            'value' => function($model) {
                return $model->statusInfos[$model->status];
            }
        ],
        [
			'format' => 'raw',
            'attribute' => 'operation',
			'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
				$menu = isset($menus['subsite_decoration_user-merchant_updateout']) ? $menus['subsite_decoration_user-merchant_updateout'] : [];
				$opeStr = "<a href='{$menu['url']}?id={$model->id}'>编辑订单</a><br />";
				$menuGuestbook = isset($menus['subsite_decoration_guestbook_listinfo']) ? $menus['subsite_decoration_guestbook_listinfo'] : [];
				$opeStr .= empty($menuGuestbook) ? '' : "<a href='{$menuGuestbook['url']}?mobile={$model->mobile}'>查看留言</a>";
                return $opeStr;
			},
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
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
