<?php

namespace shop\models;

use common\models\ShopModel;

class Info extends ShopModel
{
    public static function tableName()
    {
        return '{{%info}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => '名称',
            'code' => '代码',
            'description' => '描述',
            'sort' => '父级分类ID',
            'orderlist' => '排序',
			'template' => '模板',
			'content' => '内容',
            'status' => '状态',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'code', 'sort'], 'required'],
			['code', 'unique', 'targetClass' => '\shop\models\Info', 'message' => '代码已经被使用。'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['description', 'template', 'content'], 'safe'],
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

	public function getStatusInfos()
	{
		$datas = [
			'0' => '隐藏',
			'1' => '显示',
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

	public function getInfos()
	{
		$infos = self::find()->indexBy('code')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		$datas = [];
		foreach ($infos as $key => $info) {
			$sort = $info['sort'];
			if (!isset($datas[$sort])) {
				$datas[$sort]['name'] = $this->sortInfos[$sort];
			}

			$datas[$sort]['infos'][$key] = $info;
		}
		return $datas;
	}
}
