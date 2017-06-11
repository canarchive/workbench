<?php

namespace subsite\decoration\models;

use common\models\SubsiteModel;
use baseapp\merchant\models\CallbackTrait;

class Callback extends SubsiteModel
{
    use ModelTrait;
    use CallbackTrait;
}
