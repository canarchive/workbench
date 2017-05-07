<?php

namespace backend\subsite\controllers\decoration;

use backend\subsite\controllers\Conversion;

class ConversionController extends Conversion
{
    protected $modelClass = 'subsite\decoration\models\Conversion';
    protected $modelSearchClass = 'subsite\decoration\models\searchs\Conversion';
}
