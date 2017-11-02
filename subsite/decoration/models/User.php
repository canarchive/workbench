<?php

namespace subsite\decoration\models;

use baseapp\spread\models\UserTrait;

class User extends ModelBase
{
    use UserTrait;
    public $service_id_point;

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

    public function getFollowStatusInfos()
    {
        return [
            '' => '未知',
            'unjoint' => '未接',
            'refuse' => '拒接',
            'hangup' => '挂断',
            'shutdown' => '关机',
            'halt' => '停机',
            'follow' => '跟进',
            'forward' => '期房',
        ];
    }

    public function getOutStatusInfos()
    {
        $datas = [
            '' => '未知',
			'shop' => '工装',
			'part' => '局改（厨房卫生间）',
			'part_simple' => '部分局装',
			'soft' => '软装',
            'light' => '轻工辅料',
			'small' => '预算不足',
            'out' => '外地',
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
            //'follow-plan' => '期房跟进',
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
        return ;
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
        $mobile = $this->getNoticeMobile($merchantId);
        if (empty($mobile)) {
            return ;
        }

        $houseInfo = $this->_newModel('house', true)->findOne($data->house_id);
        if (empty($houseInfo)) {
            return ;
        }
        $houseType = isset($houseInfo->houseTypeInfos[$houseInfo->house_type]) ? $houseInfo->houseTypeInfos[$houseInfo->house_type] : '';
        $houseSort = isset($houseInfo->houseSortInfos[$houseInfo->house_sort]) ? $houseInfo->houseSortInfos[$houseInfo->house_sort] : '';
		//$content = "业主信息，姓名：{$userInfo['name']};电话：{$userInfo['mobile']};地址：{$houseInfo['region']} {$houseInfo['address']};面积：{$houseInfo->house_area};户型：{$houseType};房屋类别：{$houseSort}。请及时查看数据详情，并做好回访【兔班长装修网】";
		$content = "业主信息，姓名：{$userInfo['name']};地址：{$houseInfo['region']} {$houseInfo['address']};面积：{$houseInfo->house_area};户型：{$houseType};房屋类别：{$houseSort}。请及时查看数据详情，并做好回访。！！(业主联系方式及具体装修需求请在商家系统后台查看)【兔班长装修网】";

        return $this->sendSmsBase($mobile, $content, 'decoration_valid');
    }

    public function getNoticeMobile($merchantId)
    {
        $info = $this->getPointModel('subsite-merchant-decoration')->getInfo(['merchant_id' => $merchantId]);
        if (empty($info)) {
            return false;
        }

        return trim($info['mobile_cps']);
    }

    public function getCallbackStr()
    {
        $model = new Callback();
        $info = $model->getInfo(['where' => ['mobile' => $this->mobile], 'orderBy' => ['id' => SORT_DESC]]);
        if (empty($info)) {
            return '';
        }
        return $info['content'];
    }
}
