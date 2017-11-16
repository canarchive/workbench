<?php

namespace backend\ifeed\controllers\shoot;

use baseapp\common\controllers\CategoryTrait;

class CategoryController extends Controller
{
    use CategoryTrait;
    protected $modelClass = 'ifeed\shoot\models\Category';
    protected $modelSearchClass = 'ifeed\shoot\models\searchs\Category';

    public function actionListSort()
    {
        $class = $this->modelClass;
        $model = new $class();
        return $this->render('list-sort', [
			'siteInfos' => $this->siteInfos,
			'sortInfos' => $this->sortInfos,
        ]);
    }

    public function init()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $datas = $this->_datas();
        print_r($datas);


    }

    protected function _datas()
    {
return [
'ch' => [
array (
  0 => 
  array (
    'source_id' => 1,
    'name' => '精典语录',
    'parent_id' => 0,
  ),
  1 => 
  array (
    'source_id' => 2,
    'name' => '祝福短语',
    'parent_id' => 0,
  ),
  2 => 
  array (
    'source_id' => 3,
    'name' => '心里学识',
    'parent_id' => 0,
  ),
  3 => 
  array (
    'source_id' => 4,
    'name' => '生活常识',
    'parent_id' => 0,
  ),
  4 => 
  array (
    'source_id' => 5,
    'name' => '星座物语',
    'parent_id' => 0,
  ),
  5 => 
  array (
    'source_id' => 6,
    'name' => '孕妇育儿',
    'parent_id' => 0,
  ),
  6 => 
  array (
    'source_id' => 7,
    'name' => '创业故事',
    'parent_id' => 0,
  ),
  7 => 
  array (
    'source_id' => 8,
    'name' => '摄影视觉',
    'parent_id' => 0,
  ),
  8 => 
  array (
    'source_id' => 9,
    'name' => '酒店摄影',
    'parent_id' => 8,
  ),
  9 => 
  array (
    'source_id' => 10,
    'name' => '别墅摄影',
    'parent_id' => 8,
  ),
  10 => 
  array (
    'source_id' => 11,
    'name' => '娱乐明星',
    'parent_id' => 4,
  ),
  11 => 
  array (
    'source_id' => 12,
    'name' => '男体摄影',
    'parent_id' => 8,
  ),
  12 => 
  array (
    'source_id' => 13,
    'name' => 'GAY视觉',
    'parent_id' => 8,
  ),
  13 => 
  array (
    'source_id' => 14,
    'name' => '养生保健',
    'parent_id' => 4,
  ),
  14 => 
  array (
    'source_id' => 15,
    'name' => '生活百科',
    'parent_id' => 4,
  ),
  15 => 
  array (
    'source_id' => 16,
    'name' => '商业摄影',
    'parent_id' => 8,
  ),
  16 => 
  array (
    'source_id' => 17,
    'name' => '服装摄影',
    'parent_id' => 8,
  ),
  17 => 
  array (
    'source_id' => 18,
    'name' => '建筑摄影',
    'parent_id' => 8,
  ),
  18 => 
  array (
    'source_id' => 19,
    'name' => '样板间摄影',
    'parent_id' => 8,
  ),
  19 => 
  array (
    'source_id' => 20,
    'name' => '地产摄影',
    'parent_id' => 8,
  ),
  20 => 
  array (
    'source_id' => 21,
    'name' => '健身减肥',
    'parent_id' => 4,
  ),
  21 => 
  array (
    'source_id' => 22,
    'name' => '两性生活',
    'parent_id' => 4,
  ),
  22 => 
  array (
    'source_id' => 23,
    'name' => '商业修图',
    'parent_id' => 8,
  ),
  23 => 
  array (
    'source_id' => 24,
    'name' => '经典一句话',
    'parent_id' => 1,
  ),
  24 => 
  array (
    'source_id' => 25,
    'name' => '感悟人生',
    'parent_id' => 1,
  ),
  25 => 
  array (
    'source_id' => 26,
    'name' => '爱情语录',
    'parent_id' => 1,
  ),
  26 => 
  array (
    'source_id' => 27,
    'name' => '中英唯美语录',
    'parent_id' => 1,
  ),
  27 => 
  array (
    'source_id' => 28,
    'name' => '人体艺术摄影',
    'parent_id' => 8,
  ),
  28 => 
  array (
    'source_id' => 29,
    'name' => '民间医疗偏方',
    'parent_id' => 4,
  ),
  29 => 
  array (
    'source_id' => 30,
    'name' => '汽车摄影',
    'parent_id' => 8,
  ),
  30 => 
  array (
    'source_id' => 31,
    'name' => '男体图片',
    'parent_id' => 8,
  ),
  31 => 
  array (
    'source_id' => 32,
    'name' => '男色视觉',
    'parent_id' => 8,
  ),
  32 => 
  array (
    'source_id' => 33,
    'name' => '故事哲学',
    'parent_id' => 7,
  ),
  33 => 
  array (
    'source_id' => 34,
    'name' => '心里知识',
    'parent_id' => 3,
  ),
  34 => 
  array (
    'source_id' => 35,
    'name' => '职场人生',
    'parent_id' => 7,
  ),
  35 => 
  array (
    'source_id' => 36,
    'name' => '处世为人',
    'parent_id' => 7,
  ),
  36 => 
  array (
    'source_id' => 37,
    'name' => '摄影知识',
    'parent_id' => 8,
  ),
  37 => 
  array (
    'source_id' => 39,
    'name' => '心情签名',
    'parent_id' => 0,
  ),
),
'sy' => 
array (
  0 => 
  array (
    'source_id' => 1,
    'name' => '写真艺术照',
    'parent_id' => 0,
  ),
),
'0223' => 
array (
  0 => 
  array (
    'source_id' => 1,
    'name' => '写真照片',
    'parent_id' => 0,
  ),
  1 => 
  array (
    'source_id' => 2,
    'name' => '私房写真',
    'parent_id' => 0,
  ),
  2 => 
  array (
    'source_id' => 3,
    'name' => '古装写真',
    'parent_id' => 0,
  ),
  3 => 
  array (
    'source_id' => 4,
    'name' => '艺术照片',
    'parent_id' => 0,
  ),
  4 => 
  array (
    'source_id' => 5,
    'name' => '个性写真',
    'parent_id' => 0,
  ),
  5 => 
  array (
    'source_id' => 6,
    'name' => '艺术摄影',
    'parent_id' => 0,
  ),
  6 => 
  array (
    'source_id' => 7,
    'name' => '摄影',
    'parent_id' => 0,
  ),
  7 => 
  array (
    'source_id' => 8,
    'name' => '个性摄影',
    'parent_id' => 0,
  ),
  8 => 
  array (
    'source_id' => 9,
    'name' => '学生写真',
    'parent_id' => 0,
  ),
  9 => 
  array (
    'source_id' => 10,
    'name' => '男体摄影',
    'parent_id' => 0,
  ),
  10 => 
  array (
    'source_id' => 11,
    'name' => '肖像摄影',
    'parent_id' => 0,
  ),
  11 => 
  array (
    'source_id' => 12,
    'name' => '儿童摄影',
    'parent_id' => 0,
  ),
  12 => 
  array (
    'source_id' => 13,
    'name' => '全家福摄影',
    'parent_id' => 0,
  ),
  13 => 
  array (
    'source_id' => 14,
    'name' => '婚纱摄影',
    'parent_id' => 0,
  ),
  ),
]];
    }
}
