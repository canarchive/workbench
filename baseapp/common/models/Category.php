<?php

namespace shop\models;

use common\helpers\Tree;
use yii\helpers\ArrayHelper;

class Category extends BaseModel
{
	public $brand_code;

    public static function tableName()
    {
        return '{{%category}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent_code'], 'filterParent'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['code', 'parent_code', 'brief', 'description', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
        ];
    }

    public function filterParent()
    {
        $parent = self::findOne(['code' => $this->parent_code]);
        if (empty($parent)) {
            $this->addError('parent_code', '父分类不存在');
        }
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
			'code' => '代码',
			'parent_code' => '父级代码',
            'name' => '名称',
			'brief' => '简介',
            'description' => '描述',
            'orderlist' => '排序',
			'meta_title' => 'SEO标题',
			'meta_keyword' => 'SEO关键字',
			'meta_description' => 'SEO描述',
            'status' => '状态',
        ];
    }

    /**
     * Get category parent
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

	/**
	 * Get the infos, format the name to a tree
	 *
	 */
	public function getFormatedInfos()
	{
    	$infos = $this->find()->indexBy('id')->asArray()->all();
		foreach ($infos as $id => $info) {
			$parentId = $info['parent_id'];
			$parentNode = $parentId ? 'child-of-node-' . $parentId : '';
			$info['parentNode'] = $parentNode;
			$infos[$id] = $info;
		}

        $categoryTree = new Tree($infos, 'id', 'parent_id', 'name');
        $formatedInfos = $categoryTree->getTree(0);

        return $formatedInfos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$id = $this->attributes['id'];
		$categoryBrand = new CategoryBrand();
		$categoryBrand->deleteAll("category_id = {$id}");
		$this->brand_code;
		foreach ((array) $this->brand_code as $code) {
			$data = ['category_id' => $id, 'brand_code' => $code];
			$categoryBrand->category_id = $id;
			$categoryBrand->brand_code = $code;
			$categoryBrand->insert($data);
		}

		return true;
	}

	public function getSelectInfos()
	{
    	$infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'id', 'parent_id', 'name');
		return $datas;
	}

	public function getInfoAll($id)
	{
		$info = self::findOne($id);
		if (empty($info)) {
			return [];
		}

    	$infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$tree = new Tree($infos, 'id', 'parent_id', 'name');
        $infosSub = $tree->getChildren($id);
		$infosParent = $tree->getParent($id, true);

		$datas = [
			'info' => $info->toArray(),
			'infosSub' => $infosSub,
			'infosParent' => $infosParent,
		];

		return $datas;
	}
}
