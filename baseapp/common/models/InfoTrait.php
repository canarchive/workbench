<?php

namespace baseapp\common\models;

Trait InfoTrait
{
    public static function tableName()
    {
        return '{{%info}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'code' => '代码',
            'description' => '描述',
            'sort' => '类别',
            'orderlist' => '排序',
			'content' => '内容',
            'status' => '状态',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
			['code', 'unique', 'targetClass' => $this->classStr, 'message' => '代码已经被使用。'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['description', 'sort', 'content'], 'safe'],
        ];
    }

	public function getSortInfos()
	{
		$datas = [
			'aboutus' => '关于我们',
			'server' => '服务',
			'member' => '用户',
			'cooperation' => '合作',
			'helper' => '帮助',
			'news' => '新闻',
		];	
		return $datas;
	}

	public function getTemplateInfos()
	{
		$datas = [
			'' => '默认',
			'simple' => '简洁',
		];	
		return $datas;
	}	
}
