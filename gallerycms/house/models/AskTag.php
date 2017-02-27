<?php

namespace gallerycms\house\models;

use Yii;
use common\helpers\Tree;
use common\models\GallerycmsModel;

class AskTag extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ask_tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['orderlist','status'], 'default', 'value' => 0],
            [['meta_title', 'meta_keyword', 'meta_description'], 'safe'],
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
