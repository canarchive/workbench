<?php

namespace backend\spread\controllers\shoot;

use backend\spread\controllers\Service;

class ServiceController extends Service
{
    protected $modelClass = 'spread\shoot\models\Service';
    protected $modelSearchClass = 'spread\shoot\models\searchs\Service';

}
