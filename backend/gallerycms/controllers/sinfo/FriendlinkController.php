<?php

namespace backend\gallerycms\controllers\sinfo;

use backend\gallerycms\controllers\Friendlink;

class FriendlinkController extends Friendlink
{
    protected $modelClass = 'gallerycms\sinfo\models\Friendlink';
    protected $modelSearchClass = 'gallerycms\sinfo\models\searchs\Friendlink';

}
