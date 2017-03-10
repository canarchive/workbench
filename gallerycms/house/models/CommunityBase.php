<?php

namespace gallerycms\house\models;

use Yii;
use common\helpers\Tree;
use common\models\GallerycmsModel;

class CommunityBase extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%community_base}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_quote', 'num_ask'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'listorder' => '排序',
            'meta_title' => 'SEO名称',
            'meta_keyword' => 'SEO关键字',
            'meta_description' => 'SEO描述',
            'status' => '状态',
        ];
    }

    /**
     * Get the islog
     *
     * @return array
     */
    public function getStatusInfos()
    {
        $datas = [
            '0' => '不显示',
            '1' => '显示',
        ];
        return $datas;
    }
}
