<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Dispatch;

class DispatchController extends Dispatch
{
    protected $modelClass = 'subsite\decoration\models\Dispatch';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Dispatch';

}
