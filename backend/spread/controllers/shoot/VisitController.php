<?php

namespace backend\spread\controllers\shoot;

use backend\spread\controllers\Visit;

class VisitController extends Visit
{
    protected $modelClass = 'spread\shoot\models\Visit';
    protected $modelSearchClass = 'spread\shoot\models\searchs\Visit';

}
