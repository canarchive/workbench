<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Service;

class ServiceController extends Service
{
    protected $modelClass = 'subsite\decoration\models\Service';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Service';

}
