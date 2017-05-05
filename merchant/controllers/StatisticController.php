<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;
use merchant\components\LoginedController;

class StatisticController extends LoginedController
{
    public function init()
    {
        parent::init();
        $role = $this->userInfo['role'];
        if ($role != 'admin') {
            throw new ForbidenHttpExceoption('您没有执行该操作的权限');
            exit();
        }

    }

	public function actionIndex()
	{
		$merchantId = isset($this->merchantInfo['id']) ? $this->merchantInfo['id'] : 0;
        if (empty($merchantId)) {
            exit('no merchantid');
        }
        $type = Yii::$app->request->get('type');
        $types = [
            'total' => '',
            'day' => 'created_day',
            'channel' => 'channel',
            'channelday' => 'channel-created_day',
        ];
        if (!in_array($type, array_keys($types))) {
            exit('error');
        }
        $_GET['field_hit'] = $typeInfo = $types[$type];

        $datas = [];
        $model = $this->getSpreadModel('statisticReport');
        //$dataProvider = $model->search(Yii::$app->request->getQueryParams());
        $fields = array_filter(explode('-', $typeInfo));

        $where = [];
        if (!empty($model)) {
            $where = ['merchant_id' => $merchantId];
            $fieldStr = implode(',', $fields);
            $groupBy = empty($fields) ? ['merchant_id'] : $fields;
            $selectStr = "{$fieldStr}, SUM(`visit_num`) AS `visit_num`, SUM(`visit_num_success`) AS `visit_num_success`";
		    $datas = $model->getInfosByPage(['where' => $where, 'groupBy' => $groupBy, 'select' => $selectStr]);
        }
        
        $datas['fields'] = $fields;
        $datas['model'] = $model;
        $datas['type'] = $type;
        $datas['where'] = $where;
        return $this->render('index', $datas);
	}

	public function actionMessage()
	{
		$listUrl = Url::to(['/user/index']);
		$data = $this->checkInfo();
		if (Yii::$app->request->isPost) {
			$dataNew['content'] = strip_tags(Yii::$app->request->post('content'));
			$dataNew['user_merchant_id'] = $data['id'];
			$dataNew['created_at'] = Yii::$app->params['currentTime'];
			$model = new MerchantNote($dataNew);
			$r = $model->insert(false);
		    return Yii::$app->response->redirect($listUrl)->send();
        } 		

        return $this->render('message', $data);
	}
}
