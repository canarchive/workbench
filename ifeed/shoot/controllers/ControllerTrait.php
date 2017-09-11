<?php
namespace ifeed\shoot\controllers;

use ifeed\shoot\models\Friendlink;
use ifeed\shoot\models\Adpicture;

trait ControllerTrait
{
    public function getFriendLinkInfos($where = [])
    {
        $model = new Friendlink();
        $infos = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->limit(100)->asArray()->all();
        return $infos;
    }

    public function getNavDatas()
    {
        $datas = [
            'index' => [
                'url' => '/',
                'name' => '首页',
            ],
            'case' => [
                'url' => '/case/',
                'name' => '摄影作品',
                'subDatas' => [],
            ],
        ];
        foreach ($this->sortInfos as $sort => $sInfo) {
            if (empty($sort)) {
                continue;
            }
            $datas['case']['subDatas'][$sort] = [
                'url' => "/case_{$sort}/",
                'name' => $sInfo['name'],
            ];
        }
        $datas['flow'] = ['url' => '/flow.html', 'name' => '拍摄流程'];
        $datas['guarantee'] = ['url' => '/guarantee.html', 'name' => '服务保障'];
        $datas['aboutus'] = ['url' => '/aboutus.html', 'name' => '关于我们'];
        $datas['contactus'] = ['url' => '/contactus.html', 'name' => '联系我们'];

        return $datas;
    }

    public function getRelatedInfos($model)
    {
        $preInfo = $model->find()->select('id, name, created_at, sort')->where(['and', "sort='{$model->sort}'", ['<', 'created_at', $model->created_at]])->orderBy('id DESC')->one();
        $nextInfo = $model->find()->select('id, name, created_at, sort')->where(['and', "sort='{$model->sort}'", ['>', 'created_at', $model->created_at]])->one();
        $rInfos = $model->getInfos(['site_code' => $this->siteCode, 'sort' => $model->sort], 5);
        if (count($rInfos) < 5) {
            $ext = $model->getInfos(['site_code' => $this->siteCode], (5 - count($rInfos)));
            $rInfos = array_merge($rInfos, $ext);
        }
        $rInfoFormated = [];
        $i = 1;
        foreach ($rInfos as $key => $info) {
            if ($info['id'] != $model->id && $i < 5) {
                $rInfoFormated[] = $info;
                $i++;
            }
        }
        $datas = [
            'preInfo' => $preInfo,
            'nextInfo' => $nextInfo,
            'rInfos' => $rInfoFormated,
        ];
        return $datas;
    }

    public function getAdDatas($params)
    {
        $model = new Adpicture();
        $datas = $model->getInfos($params);
        return $datas;
    }
}
