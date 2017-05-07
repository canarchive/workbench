<?php

namespace backend\subsite\controllers\decoration;

use Yii;
use backend\subsite\controllers\SubsiteUrl;

class SubsiteUrlController extends SubsiteUrl
{
    protected $modelClass = '';
    protected $visitClass = 'subsite\decoration\models\Visit';

    public function getParams()
    {
        return require Yii::getAlias('@subsite') . '/config/params-decoration.php';
    }
}
