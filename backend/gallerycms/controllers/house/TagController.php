<?php

namespace backend\gallerycms\controllers\house;

use backend\gallerycms\controllers\Tag;

class TagController extends Tag
{
    protected $modelClass = 'gallerycms\house\models\Tag';
    protected $modelSearchClass = 'gallerycms\house\models\searchs\Tag';

}
