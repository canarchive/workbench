<?php

namespace baseapp\common\models;

trait SortTrait
{
    public static function tableName()
    {
        return '{{%sort}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['status'], 'default', 'value' => '0'],
			[['code', 'brief', 'meta_title', 'meta_keyword', 'meta_description', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'code' => '代码',
            'brief' => '摘要',
            'meta_title' => 'SEO标题',
            'meta_keyword' => 'SEO关键字',
            'meta_description' => 'SEO描述',
            'description' => '描述',
            'status' => '是否显示',
        ];
    }
}
