<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Menu as MenuModel;
use backend\components\AdminController;
use backend\components\ControllerTraitFull;

class RoleController extends AdminController
{
    protected $modelClass = 'merchant\models\Role';
    protected $modelSearchClass = 'merchant\models\searchs\Role';
    use ControllerTraitFull;

    public function actionView($id)
    {
        return $this->roleAuthority($id);
    }

    public function actionAuthority($id)
    {
        return $this->roleAuthority($id, true);
    }

    protected function roleAuthority($id, $canWrite = false)
    {
        $model = $this->findModel($id);

        $menuModel = new MenuModel();
        $menuInfos = $menuModel->getFormatedInfos();

        $permissionKeys = (array) explode(',', $model->permission);
        $permissionKeys = array_filter($permissionKeys);

        if (!Yii::$app->getRequest()->isPost || !$canWrite) {
            return $this->render('authority', ['menuModel' => $menuModel, 'infos' => $menuInfos, 'permissionKeys' => $permissionKeys]);
        }

        $menuIds = Yii::$app->getRequest()->post('menu_ids');

        $permission = '';
        $permissions = array_keys($menuInfos);
        foreach ((array) $menuIds as $code) {
            if (!in_array($code, $permissions)) {
                exit('error');
            }
            $permission .= "{$code},";
        }
        $model->permission = $permission;
        $model->update(false);

        return $this->redirect(['authority', 'id' => $model->id]);
    }
}
