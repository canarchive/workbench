<?php

namespace backend\gallerycms\controllers\cmsad;

use backend\gallerycms\controllers\Position;

class PositionController extends Position
{
    protected $modelClass = 'gallerycms\cmsad\models\Position';
    protected $modelSearchClass = 'gallerycms\cmsad\models\searchs\Position';

}
