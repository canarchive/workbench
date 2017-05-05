<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\Dispatch;

class DispatchController extends Dispatch
{
    protected $modelClass = 'spread\decoration\models\Dispatch';
    protected $modelSearchClass = 'spread\decoration\models\searchs\Dispatch';

}
