<?php

namespace common\models;

use common\statistic\models\Visit;
use common\statistic\models\Conversion;

trait TraitStatistic
{
    public function conversionSuccessLog($data)
    {
        $model = new Conversion;
        return $model->successLog($data);
    }

    public function statisticRecord($data, $type)
    {
        return ;
        $keywordTypes = ['visit', 'signup'];
        if (in_array($type, $keywordTypes)) {
            $keyword = $this->_newModel('statisticKeyword');
            //print_r($keyword);exit();
            $keyword->recordData($data, $type);
        }

        $reportTypes = ['visit', 'signup'];
        if (in_array($type, $reportTypes)) {
            $report = $this->_newModel('statisticReport');
            $report->recordData($data, $type);
        }

        /*$reportServiceTypes = ['signup'];
        if (in_array($type, $reportServiceTypes)) {
            $reportService = $this->_newModel('statisticReportService');
            $reportService->recordData($data, $type);
		}

        $dispatchTypes = ['dispatch'];
        if (in_array($type, $dispatchTypes)) {
            $dispatch = $this->_newModel('statisticDispatch');
            $dispatch->recordData($data, $type);
		}*/
    }

    public function getClientTypeInfos()
    {
        $datas = [
            '' => '全部',
            'pc' => 'PC端',
            'h5' => '移动端',
        ];
        return $datas;
    }

    public function getChannelInfos()
    {
        $datas = [
            'bd' => '百度',
            'bdxxl' => '百度信息流',
            'sg' => '搜狗',
            '360' => '360',
			'zht' => '智慧推',
            'gdt' => '广点通',
            //'sm' => '神马',
        ];
        $datas = array_merge($datas, $this->getChannelInnerInfos());
        return $datas;
    }    

    public function getChannelInnerInfos()
    {
        $datas = [
            'semspider' => 'SEM抓取',
			'phone400' => '400电话',
			'hotline' => '网络直拨',
        ];
        return $datas;
    }
}
