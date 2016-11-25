<?php

namespace backend\gallerycms\controllers\cmsad;

use backend\gallerycms\controllers\Tag;

class TagController extends Tag
{
    protected $modelClass = 'gallerycms\cmsad\models\Tag';
    protected $modelSearchClass = 'gallerycms\cmsad\models\searchs\Tag';

}
