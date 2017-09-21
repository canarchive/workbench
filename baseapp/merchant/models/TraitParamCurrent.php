<?php

namespace baseapp\merchant\models;

trait TraitParamCurrent
{
    public function getSortParams()
    {
        return [
            'decoration' => '家装',
            'shoot' => '摄影',
        ];
    }

    public function getMerchantStatusParams()
    {
        $datas = [
			'cooperation' => '合作',
            'sem' => 'SEM托管合作',
            'cpa' => 'CPA合作',
            'cps' => 'CPS合作',
			'pause' => '暂停合作',
        ];
        return $datas;
    }
}
