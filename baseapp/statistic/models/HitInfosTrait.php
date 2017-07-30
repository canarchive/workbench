<?php

namespace baseapp\statistic\models;

trait HitInfosTrait
{
    public function getChannelHitInfos()
    {
        return [
    		'created_day' => '每日',
            'channel-created_day' => '渠道每日',
            'channel-sem_account-created_day' => '渠道账户每日',
            'merchant_id' => '商家',
            'merchant_id-created_day' => '商家每日',
            'merchant_id-channel' => '商家渠道',
            'merchant_id-created_hour' => '商家每时',
            'merchant_id-created_day-created_hour' => '商家每日每时',
            'channel' => '渠道',
            'channel-created_hour' => '渠道每时',
            'channel-created_day-created_hour' => '渠道每日每时',
        ];
    }

    public function getKeywordHitInfos()
    {
        return [
            'created_day' => '日报',
            'keyword' => '关键字',
            'keyword-keyword_search' => '关键字-搜索关键字',
            'keyword-created_day' => '关键字每日',
            'keyword-created_hour' => '关键字每时',
            'keyword-created_day-created_hour' => '关键字每日每时',
        ];
    }

    public function getKeywordSearchHitInfos()
    {
        return [
            'keyword_search' => '搜索关键字',
            'keyword_search-keyword' => '搜索关键字-关键字',
            'keyword_search-created_day' => '关键字每日',
            'keyword_search-created_hour' => '关键字每时',
            'keyword_search-created_day-created_hour' => '关键字每日每时',
        ];
    }

    public function getServiceHitInfos()
    {
        return [
            //'merchant_id' => '商家',
            'service_id' => '客服',
            'created_day' => '每日',
            //'service_id-created_week' => '客服每周',
            'service_id-created_day' => '客服每日',
        ];
    }

    public function getDispatchHitInfos()
    {
        return [
            'merchant_id' => '商家',
            'merchant_id-created_day' => '商家每日',
            'created_day' => '每日',
            'service_id' => '客服',
            'service_id-created_day' => '客服每日',
        ];
    }
}
