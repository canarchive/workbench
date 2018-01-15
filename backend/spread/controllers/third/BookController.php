<?php

namespace backend\spread\controllers\third;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class BookController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'spread\models\third\KlBook';
    protected $modelSearchClass = 'spread\models\third\searchs\KlBook';

    public function _addData()
    {
        return ['scenario' => 'create'];
    }

    protected function _getScenario()
    {
        return 'update';
    }
}
