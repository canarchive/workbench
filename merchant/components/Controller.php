<?php
namespace merchant\components;

use common\components\Controller as CommonController;

class Controller extends CommonController
{
    public $isMobile;
    public function init()
    {
        parent::init();
        $this->isMobile = $this->clientIsMobile();
    }
}
