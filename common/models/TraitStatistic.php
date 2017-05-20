<?php

namespace common\models;

use common\models\statistic\Visit;
use common\models\statistic\Conversion;

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
}
