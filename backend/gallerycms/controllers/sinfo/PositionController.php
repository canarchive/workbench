<?php

namespace backend\gallerycms\controllers\eale;

use backend\gallerycms\controllers\Position;

class PositionController extends Position
{
    protected $modelClass = 'gallerycms\eale\models\Position';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Position';

}
