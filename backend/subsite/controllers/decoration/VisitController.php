<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Visit;

class VisitController extends Visit
{
    protected $modelClass = 'subsite\decoration\models\Visit';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Visit';

}
