<?php

namespace backend\gallerycms\controllers\shoot;

use backend\gallerycms\controllers\Tag;

class TagController extends Tag
{
    protected $modelClass = 'gallerycms\shoot\models\Tag';
    protected $modelSearchClass = 'gallerycms\shoot\models\searchs\Tag';

}
