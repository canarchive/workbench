<?php

namespace backend\spread\controllers\shoot;

use Yii;
use backend\spread\controllers\SpreadUrl;

class SpreadUrlController extends SpreadUrl
{
    protected $modelClass = '';
    protected $visitClass = 'spread\shoot\models\Visit';

    public function getParams()
    {
        return require Yii::getAlias('@spread') . '/config/params-shoot.php';
    }
}
