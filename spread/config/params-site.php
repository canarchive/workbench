<?php
$commonCopy = 'Copyright 北京维纳亚科技有限公司 2010-2017, All Rights Reserved';
$commonIcp = '京ICP备17003882号-2';
$sites = [
    'default' => [
        'name' => '默认',
        'copy' => $commonCopy,
        'icp' => $commonIcp,
        'pc' => 'http://hd.1-2580.com',
        'm' => 'http://m.hd.1-2580.com',
    ],
    'tbz-sh' => [
        'name' => '兔班长上海',
        'copy' => $commonCopy,
        'icp' => $commonIcp,
        'pc' => 'http://hdsh.tu8zhang.com',
        'm' => 'http://m.hdsh.tu8zhang.com',
    ],
    'tbz-bj' => [
        'name' => '兔班长北京',
        'copy' => $commonCopy,
        'icp' => $commonIcp,
        'pc' => 'http://hdb.tu8zhang.com',
        'm' => 'http://m.hdb.tu8zhang.com',
    ],
    'toteme' => [
        'name' => '途睿百度',
        'copy' => 'Copyright 北京途睿文化传播有限公司 2010-2017, All Rights Reserved',
        'icp' => '备案号：京ICP备13019024号',
        'pc' => 'http://hd.toteme.cn',
        'm' => 'http://m.hd.toteme.cn',
    ],
    'wny-sg' => [
        'name' => '维纳亚-搜狗',
        'copy' => $commonCopy,
        'icp' => $commonIcp,
        'pc' => 'http://hds.weinaya.com',
        'm' => 'http://m.hds.weinaya.com',
    ],
    'wny-360' => [
        'name' => '维纳亚-360',
        'copy' => $commonCopy,
        'icp' => $commonIcp,
        'pc' => 'http://hd3.weinaya.com',
        'm' => 'http://m.hd3.weinaya.com',
    ],
    'tj-hl' => [
        'name' => '搜狗诚聚互联',
        'copy' => 'Copyright 北京诚聚互联科技有限公司 2010-2017, All Rights Reserved',
        'icp' => '京ICP备16042960号',
        'pc' => 'http://bj.tj-hl.com',
        'm' => 'http://m.bj.tj-hl.com',
    ],
    'jzwet' => [
        'name' => '诗香教育',
        'copy' => 'Copyright 上海诗香教育科技有限公司版权 2010-2017, All Rights Reserved',
        'icp' => '沪ICP备17005685号-1',
        'pc' => 'http://www.dediga.cn',
        'm' => 'http://dediga.cn',
    ],
    'dediga' => [
        'name' => '360拼框',
        'copy' => $commonCopy,
        'icp' => $commonIcp,
        'pc' => 'http://hd.jzwets.com',
        'm' => 'http://m.hd.jzwets.com',
    ],
    'jzjz' => [
        'name' => '极装吉住',
        'copy' => 'Copyright 极装吉住科技（北京）有限公司 2010-2017, All Rights Reserved',
        'icp' => '京ICP备16004568号',
        'pc' => 'http://hd.jzjz.com',
        'm' => 'http://m.hd.jzjz.com',
    ],
    'mzk' => [
        'name' => '美宅客',
        'copy' => 'Copyright 北京美宅客网络科技有限公司 2010-2017, All Rights Reserved',
        'icp' => 'ICP备16008343号',
        'pc' => 'http://hd.imeizhaike.com',
        'm' => 'http://m.hd.imeizhaike.com',
    ],
    '55jia' => [
        'name' => '55家',
        'copy' => 'Copyright 北京诚创互联科技有限公司 2010-2017, All Rights Reserved',
        'icp' => '京ICP备16042989号',
        'pc' => 'http://huod.55jia.com',
        'm' => 'http://m.huod.55jia.com',
    ],
];
$domainTest = $domainStr = '';
foreach ($sites as $key => & $site) {
    $domainTest .= "// {$site['name']}\n";
    $domainTest .= "Yii::setAlias('{$key}.subsiteurl', 'http://{$key}.subsite.plat.alyee.com');\n";
    $domainTest .= "Yii::setAlias('m.{$key}.subsiteurl', 'http://m{$key}.subsite.plat.alyee.com');\n";

    $domainStr .= "// {$site['name']}\n";
    $domainStr .= "Yii::setAlias('{$key}.subsiteurl', '{$site['pc']}');\n";
    $domainStr .= "Yii::setAlias('m.{$key}.subsiteurl', '{$site['m']}');\n";

    $site['domains'] = ['pc', 'm'];
    $site['sort'] = 'decoration';
}
//echo $domainTest;
//echo $domainStr;exit();
//print_r($sites);exit();

return \common\helpers\SiteFormat::formatRule('subsite', $sites);