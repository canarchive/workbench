<?php
namespace common\models;

class Quote
{
    public function __construct()
    {   

    }   

    public function getResult($area, $priceRate = 1.5)
    {   
        if ($area < 30 || $area > 400) {
            return ['status' => 400, 'message' => '请输入30-300范围内的值'];
        }   
        $spaceInfo = $this->_getSpaceInfo($area);
        $priceInfo = $this->_getPriceInfo($area, $spaceInfo, $priceRate);

        return $priceInfo;
    }   

    protected function _getPriceInfo($area, $spaceInfo, $priceRate)
    {   
        $spaceNames = [ 
            'bedroom_master' => ['name' => '主卧', 'area' => '0.19', 'price' => '4788' * $priceRate],
            'bedroom_second' => ['name' => '次卧', 'area' => '0.15', 'price' => '3780' * $priceRate],
            'bedroom_guest' => ['name' => '客卧', 'area' => '0.11', 'price' => '2772' * $priceRate],
            'living_room' => ['name' => '客厅', 'area' => '0.32', 'price' => '11406.4' * $priceRate],
            'dining_room' => ['name' => '餐厅', 'area' => '5', 'price' => '1343.75' * $priceRate],
            'kitchen' => ['name' => '厨房', 'area' => '7', 'price' => '2656.6' * $priceRate],
            'toilet' => ['name' => '厕所', 'area' => '5', 'price' => '2435' * $priceRate],
            'balcony' => ['name' => '阳台', 'area' => '4', 'price' => '824' * $priceRate],
            'other' => ['name' => '其他', 'area' => '', 'price' => '2533' * $priceRate],
        ];  

        $data = []; 
        $remainArea = $area;
        foreach (['dining_room', 'kitchen', 'toilet', 'balcony', 'other'] as $space) {
            $num = $spaceInfo[$space];
            if ($num < 1) {
                //continue;
            }
            $elem = $spaceNames[$space];
            $elem['num'] = $num;
            $elem['area_result'] = $num * $elem['area'];
            $elem['price_result'] = $num * $elem['price'];
            $data['elems'][$space] = $elem;
            $data['price'] = isset($data['price']) ? $data['price'] + $elem['price_result'] : $elem['price_result'];
            $remainArea -= $elem['area_result'];
        }

        foreach (['bedroom_master', 'bedroom_second', 'bedroom_guest', 'living_room'] as $space) {
            $roomInfo = $this->_roomInfo($area, $spaceInfo[$space], $spaceNames[$space]);
            $data['elems'][$space] = $roomInfo;
            $data['price'] += $roomInfo['price_result'];
        }

        return $data;

    }

    protected function _roomInfo($area, $num, $info)
    {
        $rate = $area / 100;
        $areaResult = $area * $info['area'] * $num;
        $priceResult = $rate * $info['price'] * $num;

        $info['num'] = $num;
        $info['area_result'] = $areaResult;
        $info['price_result'] = $priceResult;

        return $info;
    }

    protected function _getSpaceInfo($area)
    {
        $spaceInfos = [
            '30-60' => ['bedroom_master' => 1, 'bedroom_second' => 0, 'bedroom_guest' => 0, 'living_room' => 1, 'dining_room' => 0, 'kitchen' => 1, 'toilet' => 1, 'balcony' => 1],
            '60-80' => ['bedroom_master' => 1, 'bedroom_second' => 1, 'bedroom_guest' => 0, 'living_room' => 1, 'dining_room' => 0, 'kitchen' => 1, 'toilet' => 1, 'balcony' => 1],
            '80-100' => ['bedroom_master' => 1, 'bedroom_second' => 1, 'bedroom_guest' => 0, 'living_room' => 1, 'dining_room' => 1, 'kitchen' => 1, 'toilet' => 1, 'balcony' => 1],
            '100-120' => ['bedroom_master' => 1, 'bedroom_second' => 1, 'bedroom_guest' => 1, 'living_room' => 1, 'dining_room' => 1, 'kitchen' => 1, 'toilet' => 1, 'balcony' => 1],
            '120-150' => ['bedroom_master' => 1, 'bedroom_second' => 1, 'bedroom_guest' => 1, 'living_room' => 1, 'dining_room' => 1, 'kitchen' => 1, 'toilet' => 2, 'balcony' => 2],
            '150-200' => ['bedroom_master' => 2, 'bedroom_second' => 1, 'bedroom_guest' => 1, 'living_room' => 1, 'dining_room' => 1, 'kitchen' => 1, 'toilet' => 2, 'balcony' => 2],
            '200-250' => ['bedroom_master' => 2, 'bedroom_second' => 2, 'bedroom_guest' => 1, 'living_room' => 1, 'dining_room' => 1, 'kitchen' => 1, 'toilet' => 3, 'balcony' => 2],
            '250-401' => ['bedroom_master' => 2, 'bedroom_second' => 2, 'bedroom_guest' => 2, 'living_room' => 1, 'dining_room' => 1, 'kitchen' => 1, 'toilet' => 3, 'balcony' => 3],
        ];

        $spaceInfo = [];
        foreach ($spaceInfos as $key => $info) {
            $areaTmp = explode('-', $key);
            $areaMin = $areaTmp[0];
            $areaMax = $areaTmp[1];
            if ($area >= $areaMin && $area < $areaMax) {
                $spaceInfo = $info;
            }
        }
        $spaceInfo['other'] = 1;

        return $spaceInfo;
    }
}
