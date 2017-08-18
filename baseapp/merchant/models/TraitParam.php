<?php

namespace baseapp\merchant\models;

trait TraitParam
{
    use TraitParamCurrent;

    public function getContractParams()
    {
        $datas = [
			'elec' => '发电子版合同',
            'selfsign' => '单方签章快递',
            'sign' => '已签署',
            'abort-nopaid' => '未付费终止',
            'paid' => '已付费',
            'abort' => '付费终止',
            'finish' => '已完成',
        ];
        return $datas;
    }
}
