<?php
namespace spider\models;

use Yii;
use common\models\SpiderModel;
use yii\helpers\FileHelper;

class AbstractModel extends SpiderModel
{
	use SpiderTrait;
    public $code;

    public static function tableName()
    {
        return '{{%page}}';
    }

    public function fileExist($file)
    {
        $file = Yii::$app->params['spiderPath'] . 'source/' . $file;
        return file_exists($file);
    }

    public function getFile($file)
    {
        $file = Yii::$app->params['spiderPath'] . 'source/' . $file;
        return $file;
    }

    public function getContent($file)
    {
        $file = $this->getFile($file);
        $content = file_get_contents($file);
        return $content;
    }

    public function writeFile($file, $content)
    {
        $logFile = Yii::$app->params['spiderPath'] . 'source/' . $file;
        $path = dirname($logFile);
        if (!is_dir($path)) {
            FileHelper::createDirectory($path, 0777);
        }
        return file_put_contents($logFile, $content);
    }

    protected function _getListInfos($where, $limit = 50)
    {
        $class = "\spider\models\\{$this->code}\ListModel";
        $model = new $class();
        $infos = $model->find()->where($where)->limit($limit)->all();

        return $infos;
    }
}
