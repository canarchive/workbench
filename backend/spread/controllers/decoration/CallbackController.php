<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\Callback;

class CallbackController extends Callback
{
    protected $modelClass = 'spread\decoration\models\Callback';
    protected $modelSearchClass = 'spread\decoration\models\searchs\Callback';

}
