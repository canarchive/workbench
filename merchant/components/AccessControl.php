<?php

namespace merchant\components;

use Yii;
use yii\web\ForbiddenHttpException;
use yii\helpers\Url;
use common\components\AccessControl as AccessControlBase;
use merchant\models\Menu;
use merchant\models\Role;

class AccessControl extends AccessControlBase
{
    protected $permissions;

    protected function _checkStatus()
    {
        $status = $this->identity->status;
        if ($status == 99) {
            return '账户被锁定，请联系管理员';
        }
        if (empty($status)) {
            return '您的账号还未启用！';
        }

        $role = $this->identity->role;
        $roleInfo = Role::find()->where(['code' => $role])->one();
        $permissions = isset($roleInfo['permission']) ? $roleInfo['permission'] : '';
        if (empty($permissions)) {
            return '尚未为您分配后台操作权限！';
        }

        $this->permissions = array_filter(explode(',', $permissions));
        return true;
    }

    protected function _checkCurrentMenu($action)
    {
        $actionId = $action->getUniqueId();

        // Get the current route infos, get the current menu
        $routeData = explode('/', $actionId);
        $currentMethod = array_pop($routeData);
        $currentController = array_pop($routeData);
        $currentModule = implode('/', $routeData);
        $where = [
            'module' => $currentModule,
            'controller' => $currentController,
            'method' => $currentMethod,
        ];

        //var_dump($where);exit();
        $currentMenu = Menu::findOne($where);
        if (empty($currentMenu) || !in_array($currentMenu['code'], $this->permissions)) {
            throw new ForbiddenHttpException("您没有执行 {$currentMenu['name']} 的权限");
        }

        return $currentMenu;
    }

    /**
     * Get the menus of current manager
     */
    protected function _initMenus($currentMenu)
    {
        $menus = Menu::find()->asArray()->where(['code' => $this->permissions])->indexBy('code')->orderBy(['orderlist' => SORT_DESC])->all();
        //$menus = Menu::find()->asArray()->indexBy('code')->all();
        $appMenus = [];
        foreach ($menus as $key => $menu) {
            $menu['url'] = "/{$menu['module']}/{$menu['controller']}/{$menu['method']}.html";
            //$menu['url'] = Url::toRoute($route);
            if (!empty($menu['extparam'])) {
                $menu['url'] = $menu['url'] . '?' . $menu['extparam'];
            }
            if ($key == $currentMenu['code']) {
                $currentMenu['url'] = $menu['url'];
            }
            $menus[$key] = $menu;
            if ($menu['parent_code'] == $currentMenu['parent_code'] && $menu['module'] == $currentMenu['module'] && $currentMenu['controller'] == $menu['controller']) {
                $appMenus[$menu['method']] = $menu;
            }
        }

        $parentMenu = isset($menus['parent_code']) ? $currentMenu['parent_code'] : $currentMenu;
        $menuTitle = $currentMenu['name'];
        $menuBreadCrumb = $currentMenu['name'];
        while (isset($menus[$parentMenu['parent_code']])) {
            $parentMenu = $menus[$parentMenu['parent_code']];
            $menuTitle .= '--' . $parentMenu['name'];
            $menuBreadCrumb = $parentMenu['name'] . '-->' . $menuBreadCrumb;
        }

        $menuInfos = [
            'menuTitle' => $menuTitle,
            'menuBreadCrumb' => $menuBreadCrumb,
            'currentMenu' => $currentMenu,
            'parentMenu' => $parentMenu,
            'appMenus' => $appMenus,
            'menus' => $menus,
        ];
        return $menuInfos;
    }
}
