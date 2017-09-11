<?php

namespace backend\ifeed\controllers\shoot;

use baseapp\ifeed\controllers\FriendlinkTrait;

class FriendlinkController extends Controller
{
    use FriendlinkTrait;
    protected $modelClass = 'ifeed\shoot\models\Friendlink';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Friendlink';
}
