<?php

namespace backend\spread\controllers\third;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class ProductController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'spread\models\third\KlProduct';
    protected $modelSearchClass = 'spread\models\third\searchs\KlProduct';

}
