<?php

namespace subsite\decoration\models;

use baseapp\spread\models\UserTrait;

class User extends ModelBase
{
    use UserTrait;

    public function handleFieldExts()
    {
        return [
            'area_input' => intval($this->area_input),
            'city_input' => $this->city_input,
        ];
    }

    public function _getDatasForFormat()
    {
        $datas = [
            'area_input' => ['default' => 0],
            'city_input' => ['default' => '']
        ];
        $return = array_merge($this->_baseDatasForFormat(), $datas);
        return $return;
    }

    public function getOutStatusInfos()
    {
        $datas = [
            '' => '未知',
            'out' => '外地',
			'part' => '局部装修',
			'small' => '50平米以下整装',
			'shop' => '商铺',
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
            'valid-back' => '已退单',
			'valid-out' => '承接范围外-无效',
            'bad' => '废单',
        ];
        return $datas;
    }

    public function _getQuoteInfo($area, $priceRate = 2)
    {
        $quote = new QuoteHouse(); 
        $info = $quote->getResult($area, $priceRate);
        return $info;
    }

    public function _getPushData($data)
    {

        $fields = ['signup_at', 'name', 'mobile', 'city_input', 'channel', 'area_input', 'keyword', 'signup_city', 'note', 'signup_ip'];
        $datas = [];
        foreach ($fields as $field) {
            $datas[$field] = $data[$field];
        }
        $url = 'http://www.jzjz.com/cms/api/user/jz?';
        $url .= http_build_query($datas);
        $r = file_get_contents($url);
        
        return true;
    }

    public function sendSmsValid($data, $userInfo)
    {
        $merchantId = $data->merchant_id;
        if (empty($merchantId)) {
            return ;
        }
        $noticeMobiles = [
            '667' => '17316278360',
            '672' => '15116958221',
            //'671' => '15110125766',
			'671' => '15010202641',
			'682' => '18600063835',
			'669' => '13717716106',//'13581522034',
			'684' => '18614242810',
			'686' => '15801558634',
			'692' => '13001943039',
            '694' => '13810901261',
            '695' => '13611081935',
            '696' => '18953723010',
        ];
        $mobile = isset($noticeMobiles[$merchantId]) ? $noticeMobiles[$merchantId] : false;
        if (empty($mobile)) {
            return ;
        }

        $houseInfo = $this->_newModel('house', true)->findOne($data->house_id);
        if (empty($houseInfo)) {
            return ;
        }
        $houseType = isset($houseInfo->houseTypeInfos[$houseInfo->house_type]) ? $houseInfo->houseTypeInfos[$houseInfo->house_type] : '';
        $houseSort = isset($houseInfo->houseSortInfos[$houseInfo->house_sort]) ? $houseInfo->houseSortInfos[$houseInfo->house_sort] : '';
		$content = "业主信息，姓名：{$userInfo['name']};电话：{$userInfo['mobile']};地址：{$houseInfo['region']} {$houseInfo['address']};面积：{$houseInfo->house_area};户型：{$houseType};房屋类别：{$houseSort}。请及时查看数据详情，并做好回访【兔班长装修网】";

        return $this->sendSmsBase($mobile, $content, 'decoration_valid');
    }
}
