<?php

namespace backend\subsite\controllers\kl;

use backend\components\AdminController;
use backend\components\ControllerFullTrait;

class ProductController extends AdminController
{
    use ControllerFullTrait;
    protected $modelClass = 'subsite\models\kl\KlProduct';
    protected $modelSearchClass = 'subsite\models\kl\searchs\KlProduct';

}
