<?php

namespace common\components;

use Yii;
use yii\web\ForbiddenHttpException;
use yii\web\User;
use yii\di\Instance;
use yii\helpers\Url;

class AccessControl extends \yii\base\ActionFilter
{
    /**
     * @var User User for check access.
     */
    protected $_user = 'user';

    /**
     * @var array List of action that not need to check access.
     */
    public $allowActions = [];
    protected $identity;

    /**
     * Get user
     * @return User
     */
    public function getUser()
    {
        if (!$this->_user instanceof User) {
            $this->_user = Instance::ensure($this->_user, User::className());
        }
        return $this->_user;
    }

    /**
     * Set user
     * @param User|string $user
     */
    public function setUser($user)
    {
        $this->_user = $user;
    }

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $actionId = $action->getUniqueId();

        // Allowed actions return true
        foreach ($this->allowActions as $allowAction) {
            if ($allowAction == $actionId) {
                return true;
            }
            $allowAction = rtrim($allowAction, "*");
            if (strpos($actionId, $allowAction) === 0) {
                return true;
            }
        }

        // Whether logined
        if ($this->user->getIsGuest()) {
            $this->user->loginRequired();
            return false;
        }

        $controller = $action->controller;
        $this->identity = $this->user->getIdentity();
        if ($this->_checkStatus('lock')) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are locked.'));
        }

        $currentMenu = $this->_checkCurrentMenu($action);
        if ($currentMenu['extparam'] == 'modal') {
            Yii::$app->layout = null;
        }

        $menuInfos = $this->_initMenus($currentMenu);
        $controller->menuInfos = $menuInfos;

        Yii::$app->params['currentMenu'] = $currentMenu->toArray();
        Yii::$app->params['managerInfo'] = $this->identity;

        return true;
    }

    protected function _checkStatus($elem = 'lock')
    {
        return false;
    }

    protected function _checkCurrentMenu($action)
    {
        throw new ForbiddenHttpException(Yii::t('yii', 'error'));
    }
}
