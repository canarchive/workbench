<?php
$elems = [
    'channel' => [
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
    'service' => [
        //'merchant_id' => '商家',
        'created_month' => '每月',
        'created_month-created_week' => '每周',
        'created_day' => '每日',
        'service_id' => '客服',
        //'service_id-created_week' => '客服每周',
        'service_id-created_day' => '客服每日',
    ],
    'dispatch' => [
        'merchant_id' => '商家',
        'merchant_id-created_day' => '商家每日',
        'created_day' => '每日',
        'service_id' => '客服',
        'service_id-created_day' => '客服每日',
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
