<?php

namespace merchant\models;

use baseapp\merchant\models\Merchant;

class MerchantPond extends Merchant
{
    public static function tableName()
    {
        return '{{%merchant_pond}}';
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '新录入',
			'empty' => '空号',
			'follow' => '跟进',
			'mismatch' => '不匹配',
            'no-purpose' => '无意向',
            'latent' => '潜在',
            'purpose' => '有意向',
			'cooperation' => '合作',
        ];
        return $datas;
    }

    protected function getSortInfos()
    {
		return $this->getSortParams();
    }

    public function import()
    {   
        $datas = $this->_importDatas();
        if ($datas === false) {
            return ;
        }
        //print_r($datas);exit();

        $i = 0;
        foreach ($datas as $key => $data) {
            if ($key == 1) { continue; }
            $mData = [
                'sort' => 'decoration',
                'name' => trim($data['A']),
                'address' => trim($data['D']),
            ];

            $info = $this->find()->where($mData)->one();
            if (empty($info) && !empty($mData['name'])) {
                $info = new self($mData);
                $r = @ $info->save(false);
                $i++;
            }

            $cData = [
                'merchant_id' => $info['id'],
                'mobile' => trim($data['C']),
            ];
            $cModel = new NewContact();
            $cInfo = $cModel->find()->where($cData)->one();
            if (empty($cInfo)) {
                $cData['name'] = trim($data['B']);
                $cModel = new NewContact($cData);
                $cr = @ $cModel->save(false);
            }
        }
        echo $i;
        exit();
        return $i;
    }

    protected function _getTemplateFields()
    {
        $datas = parent::_getTemplateFields();
        $datas['operation']['menuCodes'][] = [
            'code' => 'merchant_merchant_conew', 
            'name' => '转为合作',
            'condition' => ['status' => 'cooperation'],
        ];
        return $datas;
    }
}