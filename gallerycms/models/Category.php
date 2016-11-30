<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
use common\helpers\Tree;

class Category extends GallerycmsModel
{
    public function rules()
    {
        return [
            [['name', 'catdir'], 'required'],
            [['parent_id'], 'filterParent'],
            [['orderlist', 'thumb', 'parent_id'], 'default', 'value' => 0],
            [['parent_id'], 'default', 'value' => ''],
            [['description', 'template', 'meta_title', 'meta_keyword', 'meta_description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '栏目ID',
            'name' => '名称',
            'catdir' => '目录',
            'thumb' => '缩略图',
            'parent_id' => '父栏目ID',
            'orderlist' => '排序',
            'description' => '描述',
            'template' => '模板',
            'meta_title' => 'SEO名称',
            'meta_keywords' => 'SEO关键字',
            'meta_description' => 'SEO描述',
        ];
    }

    public function filterParent()
    {
        $parent = self::findOne(['id' => $this->parent_id]);
        if (empty($parent)) {
            $this->addError('parent_id', '父分类不存在');
        }
    }

    public function getFormatedInfos()
    {
        $infos = $this->find()->indexBy('id')->asArray()->all();
        $formatedInfos = $this->getTreeInfos($infos, 'id', 'parent_id', 'name');
        return $formatedInfos;
    }

    public function getSelectInfos()
    {
        $infos = $this->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
        $datas = $this->getLevelInfos($infos, 'id', 'parent_id', 'name', 0);
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

    public function getInfo($id)
    {
        return $this->findOne($id);
    }

    public function getDatas($orderBy = 'id')
    {
        static $infos = null;
        if ($infos === null) {
            $infos = $this->find()->where(['status' => 1])->indexBy($orderBy)->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
        }

        return $infos;
    }

    public function getLevelDatas($parentField = 'parent_id')
    {
        static $datas = null;
        if ($datas === null) {
            $datas = [];
            $infos = $this->getDatas('catdir');
            foreach ($infos as $key => $info) {
                if ($info['parent_id'] == 0) {
                    $datas[$info['id']] = $info;
                }
            }
            foreach ($infos as $key => $info) {
                $parentId = $info['parent_id'];
                if ($parentId == 0) {
                    continue;
                }
                $datas[$parentId]['subInfos'][$info['id']] = $info;
            }
        }

        return $datas;
    }
}
