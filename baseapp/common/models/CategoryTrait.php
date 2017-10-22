<?php

namespace baseapp\common\models;

use common\helpers\Tree;

trait CategoryTrait
{
    public static function tableName()
    {
        return '{{%category}}';
    }

    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            ['code', 'unique', 'message' => '代码已经被使用。'],
            [['parent_code'], 'filterParent'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['type_code', 'parent_code', 'brief', 'description', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
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
			'type_code' => '类型代码',
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
		$infos = $this->find()->indexBy('code')->asArray()->all();
		//var_dump($infos);exit();
		$formatedInfos = $this->getTreeInfos($infos, 'code', 'parent_code', 'name', '');
		return $formatedInfos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		return true;
	}

	public function getSelectInfos()
	{
    	$infos = $this->find()->select(['code', 'name', 'parent_code'])->indexBy('code')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'code', 'parent_code', 'name', '');
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

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'type_code' => ['type' => 'key'],
            'name' => ['type' => 'common'],
            'parent_code' => ['type' => 'common'],
            'brief' => ['type' => 'common'],
            'orderlist' => ['type' => 'common'],
            'description' => ['type' => 'common'],
            'meta_title' => ['type' => 'common'],
            'meta_keyword' => ['type' => 'common'],
            'meta_description' => ['type' => 'common'],
        ];
    }

	protected function getTypeCodeInfos()
	{
		return [];
	}
}
