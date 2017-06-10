<?php

namespace subsite\decoration\models;

use common\models\SubsiteModel;
use common\statistic\models\UserTrait;

class User extends SubsiteModel
{
    use ModelTrait;
    use UserTrait;

    public function getOutStatusInfos()
    {
        $datas = [
            '' => '未知',
            'out' => '外地',
			'part' => '局部装修',
			'small' => '50平米以下整装',
			'shop' => '商铺',
			'we_part' => '水电改造',
			'soft' => '软装',
        ];

        return $datas;
    }

    public function getInvalidStatusInfos()
    {
        $datas = [
            '' => '未知',
            'no_call' => '空号',
            'noneed' => '无需求',
            'booked' => '已定好',
            'no_test' => '测试',
        ];

        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '未回访',
            'follow' => '跟进',
            'follow-plan' => '期房跟进',
			'valid' => '有效',
			'valid-part' => '有效-局装',
			'valid-out' => '承接范围外-无效',
            //'valid-dispatch' => '已派单',
            'bad' => '废单',
        ];
        return $datas;
    }
}
