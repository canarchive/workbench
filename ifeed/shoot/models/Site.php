<?php

namespace ifeed\shoot\models;

use yii\helpers\ArrayHelper;
use common\models\IfeedModel;

class Site extends IfeedModel
{
    use ModelTrait;
    
    public static function tableName()
    {
        return '{{%site}}';
    }

    public function rules()
    {
        return [
            [['name', 'code', 'domain', 'domain_mobile'], 'required'],
			[['status', 'logo', 'logo_mobile'], 'default', 'value' => '0'],
			[['description', 'brief', 'logo', 'logo_mobile', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'code' => '代码',
            'domain' => '域名',
            'domain_mobile' => '移动端域名',
            'brief' => '摘要',
            'logo' => 'LOGO',
            'logo_mobile' => '移动端LOGO',
            'meta_title' => 'SEO标题',
            'meta_keyword' => 'SEO关键字',
            'meta_description' => 'SEO描述',
            'description' => '描述',
            'status' => '是否显示',
        ];
    }

    public function getDomain()
    {
    }
}
