<?php

namespace merchant\components;

use Yii;
use yii\web\ForbiddenHttpException;
use yii\helpers\Url;
use common\components\AccessControl as AccessControlBase;
use merchant\models\Menu;

class AccessControl extends AccessControlBase
{
    protected function _checkStatus($elem = 'lock')
    {
        return empty($this->identity['status']);
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

        $currentMenu = Menu::findOne($where);
        //if (empty($currentMenu) || !$this->user->can($currentMenu['code'])) {
        if (empty($currentMenu)) {// || !$this->user->can($currentMenu['code'])) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are not allowed to perform this action.'));
        }

        return $currentMenu;
    }

    /**
     * Get the menus of current manager
     */
    protected function _initMenus($currentMenu)
    {
        //$menus = Menu::find()->asArray()->where(['code' => $codes])->indexBy('code')->orderBy(['orderlist' => SORT_DESC])->all();
        $menus = Menu::find()->asArray()->indexBy('code')->all();
        $appMenus = [];
        foreach ($menus as $key => $menu) {
            $route = '/' . trim($menu['module'] . '/' . $menu['controller'] . '/' . $menu['method'], '/');
            $menu['url'] = Url::toRoute($route);
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