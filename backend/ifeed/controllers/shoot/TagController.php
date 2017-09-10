<?php

namespace backend\ifeed\controllers\shoot;

use backend\ifeed\controllers\Tag;

class TagController extends Tag
{
    protected $modelClass = 'ifeed\shoot\models\Tag';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Tag';

}
