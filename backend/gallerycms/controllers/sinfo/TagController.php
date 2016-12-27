<?php

namespace backend\gallerycms\controllers\eale;

use backend\gallerycms\controllers\Tag;

class TagController extends Tag
{
    protected $modelClass = 'gallerycms\eale\models\Tag';
    protected $modelSearchClass = 'gallerycms\eale\models\searchs\Tag';

}
