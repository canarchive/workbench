<?php

namespace merchant\decoration\models;

use baseapp\auth\models\SigninTrait;
use merchant\models\User;

class Signin extends ModelBase
{
    use ModelTrait;
    use SigninTrait;
}
