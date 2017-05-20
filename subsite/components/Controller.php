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

    protected function initClientType()
    {
        foreach ($this->domainDatas as $code => $data) {
            $this->currentDomain = $data;
            if ($this->host == $data->pcDomain) {
                $this->clientType = 'pc';
                break;
            }
            if ($this->host == $data->mobileDomain) {
                $this->clientType = 'mobile';
                break;
            }
        }
    }

    public function getDomainDatas()
    {
        return Domain::find()->indexBy('code')->all();
    }
}
