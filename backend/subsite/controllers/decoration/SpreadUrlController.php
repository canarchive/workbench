<?php

namespace backend\spread\controllers\decoration;

use Yii;
use backend\spread\controllers\SpreadUrl;

class SpreadUrlController extends SpreadUrl
{
    protected $modelClass = '';
    protected $visitClass = 'spread\decoration\models\Visit';

    public function getParams()
    {
        return require Yii::getAlias('@spread') . '/config/params-decoration.php';
    }
}
