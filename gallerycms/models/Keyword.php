<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class Keyword extends GallerycmsModel
{
    public $add_mul;

    public static function tableName()
    {
        return '{{%keyword}}';
    }

    public function rules()
    {
        return [
            [['keyword'], 'required'],
            ['keyword', 'unique', 'targetClass' => '\gallerycms\models\Keyword', 'message' => 'This keyword has already been taken.'],
            [['num_used', 'created_at'], 'default', 'value' => 0],
            [['add_mul'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'keyword' => '名称',
            'num_used' => '使用次数',
            'created_at' => '创建时间',
            'add_mul' => '批量添加(格式：标签 排序\n)',
        ];
    }

    public function addMul()
    {
        $datas = array_filter(explode("\n", $this->add_mul));
        foreach ($datas as $data) {
            $data = str_replace([' ', "\t"], ' ', $data);
            $info = explode(' ', $data);
            $keyword = isset($info[0]) ? trim($info[0]) : '';
            $orderlist = isset($info[1]) ? intval($info[1]) : '';
            if (empty($keyword)) {
                continue;
            }
            $model = self::findOne(['keyword' => $keyword]);
            if ($model) {
                $model->orderlist = $orderlist;
            } else {
                $model = new self(['keyword' => $keyword]);
            }
            $model->save();
        }
        return true;
    }
}
