<?php

namespace baseapp\common\models;

Trait TagTrait
{
	public $add_mul;

    public static function tableName()
    {
        return '{{%tag}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'unique', 'targetClass' => $this->classStr, 'message' => '该标签已存在'],
			[['orderlist', 'status'], 'default', 'value' => 0],
			[['sort_code', 'add_mul', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'parent_id' => '父栏目ID',
            'orderlist' => '排序',
			'sort_code' => '分类',
            'meta_title' => 'SEO名称',
            'meta_keywords' => 'SEO关键字',
            'meta_description' => 'SEO描述',
			'add_mul' => '批量添加(格式：标签 排序\n)',
        ];
    }

	public function addMul()
	{
		$datas = array_filter(explode("\n", $this->add_mul));
		foreach ($datas as $data) {
			$data = str_replace([' ', "\t"], ' ', $data);
			$info = explode(' ', $data);
			$name = isset($info[0]) ? trim($info[0]) : '';
			$orderlist = isset($info[1]) ? intval($info[1]) : '';
			if (empty($name)) {
				continue;
			}
			$model = self::findOne(['name' => $name]);
			if ($model) {
				$model->orderlist = $orderlist;
			} else {
			    $model = new self(['name' => $name]);
			}
			$model->save();
		}
		return true;
	}	
}
