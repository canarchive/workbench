<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\Visit;

class VisitController extends Visit
{
    protected $modelClass = 'spread\decoration\models\Visit';
    protected $modelSearchClass = 'spread\decoration\models\searchs\Visit';

}
