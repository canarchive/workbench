<?php

namespace gallerycms\controllers\data;

use Yii;
use Overtrue\Pinyin\Pinyin; 
use gallerycms\components\Controller as GallerycmsController;
use gallerycms\merchant\models\Merchant;
use gallerycms\house\models\QuoteBak;
use gallerycms\house\models\CommunityBase;
use common\models\Quote as QuoteTool;

class TmpController extends GallerycmsController
{
    use QuoteTrait;
    use AskTrait;
    use MerchantTrait;
    use NewsTrait;

    public function actionTest()
    {   
        $action = Yii::$app->request->get('action');
        $this->$action();
    }
}
