<?php

namespace merchant\admin\controllers\decoration;

use Yii;
use yii\web\ForbiddenHttpException;
use backend\subsite\controllers\decoration\UserController as UserControllerBase;

class UserController extends UserControllerBase
{
    use BaseTrait;

    public function beforeAction($action)
    {
        if ($action->id == 'change-service') {
            $this->forceSkipPriv = true;
        }
        $return = parent::beforeAction($action);
        if ($return !== true) {
            return $return;
        }
        
		if ($action->id == 'update' || $action->id == 'listinfo') {
            $role = Yii::$app->params['managerInfo']->role;
            if (in_array($role, ['admin-inner', 'service-inner', 'service-admin-inner', 'saleman-chief'])) {
                if (isset(Yii::$app->params['privInfo'])) {
                if (isset(Yii::$app->params['privInfo']['merchant_id'])) {
    			    unset(Yii::$app->params['privInfo']['merchant_id']);
                }
                }
			}
		}
        return true;
    }

    public function actionListpond()
    {
        $_GET['ext_param'] = 'pond';
        return $this->_listinfoInfo($this->viewPrefix . 'listpond');
    }

    public function actionChangeService($id)
    {
        $serviceIdPoint = Yii::$app->request->get('service_id_point');
        $model = $this->findModel($id);
        $privInfo = Yii::$app->params['privInfo'];
        $serviceIds = isset($privInfo['service_id']) ? (array) $privInfo['service_id'] : [];
        //var_dump($serviceIds);exit();

        $infos = $model->getInfos(['where' => ['mobile' => $model->mobile]]);
        $serviceIdsOld = [];
        foreach ($infos as $info) {
            $serviceIdsOld[] = $info['service_id'];
        }
        foreach ($serviceIds as $key => $value) {
            if ($value == 'no' || in_array($value, $serviceIdsOld)) {
                unset($serviceIds[$key]);
            }
        }

        if (empty($serviceIds)) {
            throw new ForbiddenHttpException('没有要分配的客服');
        }
        if (!empty($serviceIdPoint) && !in_array($serviceIdPoint, $serviceIds)) {
            throw new ForbiddenHttpException('指定的客服有误');
        }
        $serviceIdNew = !empty($serviceIdPoint) ? $serviceIdPoint : (count($serviceIds) == 1 ? array_pop($serviceIds) : false);
        if ($serviceIdNew) {
            $model->service_id = $serviceIdNew;
            $model->dispatch_at = Yii::$app->params['currentTime'];
            $model->service_num = $model->service_num + 1;
            $model->update(false, ['service_id', 'dispatch_at', 'service_num']);
            $menus = $this->menuInfos['menus'];
            $menu = isset($menus['subsite_decoration_user_update']) ? $menus['subsite_decoration_user_update'] : '';
            $url = empty($menu) ? '' : $menu['url'] . '?id=' . $model->id;
            if (empty($url)) {
                throw new ForbiddenHttpException('分派客服成功，您目前尚没有回访业主的权限');
            }
            //echo $serviceIdNew . '-' . $model->id . '-' . $url;exit();
            header("Location: {$url}");
        }
        $data = [
            'model' => $model,
            'serviceIds' => $serviceIds,
        ];
        return $this->render($this->viewPrefix . 'change-service', $data);
    }
}
