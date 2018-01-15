<?php

namespace backend\spread\controllers\decoration;

use backend\spread\controllers\Conversion;

class ConversionController extends Conversion
{
    protected $modelClass = 'spread\decoration\models\Conversion';
    protected $modelSearchClass = 'spread\decoration\models\searchs\Conversion';
}
