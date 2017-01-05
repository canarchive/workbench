<?php

namespace backend\gallerycms\controllers\house;

use backend\gallerycms\controllers\Position;

class PositionController extends Position
{
    protected $modelClass = 'gallerycms\house\models\Position';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Position';

}
