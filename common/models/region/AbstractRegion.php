<?php

namespace common\models\region;

use Yii;
use common\models\PassportModel;
use Overtrue\Pinyin\Pinyin;

class RegionTown extends PassportModel
{
    public $provinceInfo;
    public $cityInfo;
    public $countyInfo;
    public $townInfo;
    public $villageInfo;

    public static function getDb()
    {
        return Yii::$app->dbCommon;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id' => '地区ID',
            'name' => '名称',
            'parent_code' => '父级地区ID',
            'level' => '级别',
            'listorder' => '排序',
            'status' => '状态',
        ];
    }

    /**
     * Get region parent
     * @return \yii\db\ActiveQuery
     */
    public function getRegionParent()
    {
        return $this->hasOne(self::className(), ['code' => 'parent_code']);
    }

    public function getInfo($where)
    {
        $info = $this->findOne($where);
        return $info;
    }
}
