<?php
namespace spider\components;

use Yii;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
    protected $code;
    protected $codes;

    protected function _checkCode()
    {
        $this->code = Yii::$app->request->get('code');
        $this->codes = require(Yii::getAlias('@spider') . '/config/params-code.php');
        if (!in_array($this->code, array_keys($this->codes))) {
            exit('code error');
        }
    }
}
