<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Callback;

class CallbackController extends Callback
{
    protected $modelClass = 'subsite\decoration\models\Callback';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Callback';

}
