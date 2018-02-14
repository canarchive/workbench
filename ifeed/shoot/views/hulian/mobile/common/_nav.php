<?php
//$navDatas = $this->context->navDatas;
$siteCode = $this->context->siteCode == 'shoot' ? '' : 'sj' . $this->context->siteCode . '/';
$navDatas = [
    'index' => ['url' => $this->context->getSiteUrl(), 'name' => '首页HOME'],
    'location' => ['url' => $this->context->getSortUrl('all'), 'name' => '作品欣赏'],
    'container' => ['url' => $this->context->currentDomain . "/{$siteCode}aboutus.html", 'nofollow' => true, 'name' => '公司简介'],
    'nav' => ['url' => $this->context->currentDomain . "/{$siteCode}contactus.html", 'nofollow' => true, 'name' => '联系我们'],
];
$caseDatas = $this->context->navDatas;
?>
<div class="navs_wrap">
    <section class="sub_navs_wrap">
        <a class="close pr" href="javascript:;"></a>
        <ul class="common_ul clearfix">
            <?php $i = 1; foreach ($navDatas as $nav => $data) { ?>
            <li class="common_li">
                <a href="<?= $data['url']; ?>" title="<?= $data['name']; ?>" <?php if (isset($data['nofollow'])) { echo 'rel="nofollow"'; } ?> >
                    <i class="m_<?= $nav; ?>"></i><?= $data['name']; ?>
                </a>
            </li>
            <?php } ?>
        </ul>
        <h3 class="more_title">
            <span class="more_text">摄影作品类别</span>
        </h3>
        <ul class="hot_zixun clearfix">
            <?php foreach ($caseDatas as $sort => $sData) { if (!in_array($sort, array_keys($this->context->sortInfos))) { continue; } ?>
            <li class="<?php if ($this->context->currentElem == $sort) { echo 'active'; } ?>">
                <a href="<?= $sData['url']; ?>" title="<?= $sData['name']; ?>"><?= $sData['name']; ?></a>
            </li>
            <?php } ?>
        </ul>
        <h3 class="more_title">
            <span class="more_text">服务和预约</span>
        </h3>
        <ul class="hot_zixun clearfix">
            <li class="">
			    <a href="<?= $this->context->currentDomain; ?>/flow.html" rel="nofollow" title="拍摄流程">拍摄流程</a>
            </li>
            <li class="">
                <a href="<?= $this->context->currentDomain; ?>/guarantee.html" rel="nofollow" title="服务保障">服务保障</a>
            </li>
            <li class="">
				<a rel="nofollow" href="<?= $this->context->serviceUrl; ?>" target="_blank" title="预约拍摄">预约拍摄</a>
            </li>
        </ul>
    </section>
</div>
