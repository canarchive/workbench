<?php
$elems = [
    'channel' => [
		'created_day' => '每日',
		'created_hour' => '每时',
        'channel' => '渠道',
        'channel-sem_account' => '渠道账户',
        'channel-sem_account-plan_id' => '渠道账户计划',
        'channel-created_day' => '渠道每日',
        'channel-sem_account-created_day' => '渠道账户每日',
        'channel-sem_account-plan_id-created_day' => '渠道账户计划每日',
        'merchant_id' => '商家',
        'merchant_id-created_day' => '商家每日',
        'merchant_id-channel' => '商家渠道',
        'merchant_id-created_hour' => '商家每时',
        'merchant_id-created_day-created_hour' => '商家每日每时',
        'channel-created_hour' => '渠道每时',
        'channel-created_day-created_hour' => '渠道每日每时',
    ],
    'channel-fee' => [
        'channel' => '渠道',
        'channel-account_id' => '渠道账户',
        'channel-account_id-plan_id' => '渠道账户计划',
		'created_month' => '每月',
		'created_day' => '每日',
        'channel-created_day' => '渠道每日',
        'channel-account_id-created_day' => '渠道账户每日',
        'channel-account_id-plan_id-created_month' => '渠道账户计划每月',
        'channel-account_id-plan_id-created_day' => '渠道账户计划每日',
        'merchant_id' => '商家',
        'merchant_id-created_month' => '商家每月',
        'merchant_id-created_day' => '商家每日',
    ],
    'channel-merchant' => [
        /*'merchant_id' => '商家',
        'merchant_id-created_day' => '商家每日',
        'merchant_id-channel' => '商家渠道',
        'merchant_id-created_hour' => '商家每时',
        'merchant_id-created_day-created_hour' => '商家每日每时',
        'channel-created_hour' => '渠道每时',
        'channel-created_day-created_hour' => '渠道每日每时',*/
    ],
    'channel-info' => [
    ],
    'keyword' => [
        'created_day' => '日报',
        'keyword' => '关键字',
        'keyword-keyword_search' => '关键字-搜索关键字',
        'keyword-created_day' => '关键字每日',
        'keyword-created_hour' => '关键字每时',
        'keyword-created_day-created_hour' => '关键字每日每时',
    ],
    'keyword-search' => [
        'keyword_search' => '搜索关键字',
        'keyword_search-keyword' => '搜索关键字-关键字',
        'keyword_search-created_day' => '关键字每日',
        'keyword_search-created_hour' => '关键字每时',
        'keyword_search-created_day-created_hour' => '关键字每日每时',
    ],
    'service-invalid' => [
        'created_month' => '每月',
        'created_month-created_week' => '每周',
        'created_day' => '每日',
    ],
    'saleman' => [
        'created_month' => '每月',
        'created_month-created_week' => '每周',
        'created_day' => '每日',
        'saleman_id' => '客服',
        'saleman_id-created_month' => '客服每月',
        'saleman_id-created_week' => '客服每周',
        'saleman_id-created_day' => '客服每日',
    ],
    'service' => [
        'created_month' => '每月',
        'created_month-created_week' => '每周',
        'created_day' => '每日',
        'service_id' => '客服',
        'service_id-created_month' => '客服每月',
        'service_id-created_week' => '客服每周',
        'service_id-created_day' => '客服每日',
    ],
    'dispatch' => [
        'created_month' => '每月',
        'created_week' => '每周',
        'created_day' => '每日',
        'merchant_id' => '商家',
        'merchant_id-created_month' => '商家每月',
        'merchant_id-created_week' => '商家每月',
        'merchant_id-created_day' => '商家每日',
    ],
];
$keyController = basename($this->context->id);
$currentElem = implode($fields, '-');
$elems = $elems[$keyController];
?>

<div>
    <ul class="breadcrumb">
<?php
$subnavString = '';
foreach ($elems as $fieldHit => $fieldName) {
    $styleStr =  $currentElem == $fieldHit ? 'style="color:#009900;"' : '';
    //$urlStr =  $currentElem == $fieldHit ? 'javascript:void(0);' : '?field_hit=' . $fieldHit;
    $urlStr =  '?field_hit=' . $fieldHit;
    $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$fieldName}</a></li>";
}
echo $subnavString;
?>
    </ul>
</div>
