<?php

namespace baseapp\ifeed\controllers;

use backend\components\ControllerTraitFull;

trait FriendlinkTrait
{
    use ControllerTraitFull;

    public function getViewPrefix()
    {
        return "@baseapp/ifeed/views/friendlink/";
    }
}
