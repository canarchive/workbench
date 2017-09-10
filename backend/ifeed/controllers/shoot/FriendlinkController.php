<?php

namespace backend\ifeed\controllers\shoot;

use backend\ifeed\controllers\Friendlink;

class FriendlinkController extends Friendlink
{
    protected $modelClass = 'ifeed\shoot\models\Friendlink';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Friendlink';

}
