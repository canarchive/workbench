<?php

namespace gallerycms\shoot\models;

use common\models\GallerycmsModel;
use baseapp\spread\models\UserTrait;

class User extends GallerycmsModel
{
    use ModelTrait;
    use UserTrait;

    public function _getDatasForFormat()
    {
        $datas = [];
        return array_merge($this->_baseDatasForFormat(), $datas);
    }

    public function getInvalidStatusInfos()
    {
        $datas = [
            '' => '未知',
            'no_call' => '空号',
            'noneed' => '无需求',
            'no_test' => '测试',
        ];

        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '未回访',
            'follow' => '跟进',
            'follow-plan' => '意向跟进',
			'valid' => '有效',
			'valid-out' => '承接范围外-无效',
            'bad' => '无效',
        ];
        return $datas;
    }
}
