<?php

namespace backend\subsite\controllers\kl;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class BookController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'subsite\models\kl\KlBook';
    protected $modelSearchClass = 'subsite\models\kl\searchs\KlBook';

    public function _addData()
    {
        return ['scenario' => 'create'];
    }

    protected function _getScenario()
    {
        return 'update';
    }
}
