<?php
namespace subsite\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;
use spread\models\Domain;

class Controller extends CommonController
{
    public $currentDomain;

    public function init()
    {
        parent::init();

    }

    public function getSiteInfos()
    {
        return require(Yii::getAlias('@app') . "/config/params-site.php");
    }

    public function getDomainDatas()
    {
        return Domain::find()->indexBy('code')->all();
    }
}
