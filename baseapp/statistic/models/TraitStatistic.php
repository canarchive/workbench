<?php

namespace baseapp\statistic\models;

use baseapp\statistic\models\Visit;
use baseapp\statistic\models\Conversion;
use baseapp\statistic\models\Report;
use baseapp\statistic\models\ReportService;
use baseapp\statistic\models\Keyword;

trait TraitStatistic
{
    public function conversionSuccessLog($data)
    {
        $model = new Conversion;
        return $model->successLog($data);
    }

    public function statisticRecord($data, $type)
    {
        $keywordTypes = ['visit', 'signup'];
        if (in_array($type, $keywordTypes)) {
            $keyword = new Keyword();
            //print_r($keyword);exit();
            $keyword->recordData($data, $type);
        }

        $reportTypes = ['visit', 'signup'];
        if (in_array($type, $reportTypes)) {
            $report = new Report();
            $report->recordData($data, $type);
        }

        /*$reportServiceTypes = ['signup'];
        if (in_array($type, $reportServiceTypes)) {
            $reportService = new ReportService();
            $reportService->recordData($data, $type);
        }*/
    }

    public function getClientTypeInfos()
    {
        $datas = [
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
			'zht' => '智慧推',
            'gdt' => '广点通',
            'sm' => '神马',
        ];
        $datas = array_merge($datas, $this->getChannelInnerInfos());
        $datas['360'] = '360';
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
