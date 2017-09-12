<?php
namespace ifeed\shoot\controllers;

use Yii;
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
                'url' => $this->currentDomain,
                'name' => '首页',
            ],
            'case' => [
                'url' => $this->getSortUrl('all'),
                'name' => '摄影作品',
                'subDatas' => [],
            ],
        ];
        foreach ($this->sortInfos as $sort => $sInfo) {
            if (empty($sort)) {
                continue;
            }
            $datas['case']['subDatas'][$sort] = [
                'url' => $this->getSortUrl($sort),
                'name' => $sInfo['name'],
            ];
        }
        $datas['flow'] = ['url' => $this->currentDomain . '/flow.html', 'name' => '拍摄流程'];
        $datas['guarantee'] = ['url' => $this->currentDomain . '/guarantee.html', 'name' => '服务保障'];
        $datas['aboutus'] = ['url' => $this->currentDomain . '/aboutus.html', 'name' => '关于我们'];
        $datas['contactus'] = ['url' => $this->currentDomain . '/contactus.html', 'name' => '联系我们'];

        return $datas;
    }

	public function getSortUrl($sort)
	{
		if ($this->clientType == 'mobile') {
			return $this->currentDomain . "/sj{$this->siteCode}-lm{$sort}/";
		} else {
			$domainBase = Yii::getAlias('@domain-base');
			return $this->siteCode == 'shoot' ? "http://lm{$sort}.{$domainBase}/" : "http://sj{$this->siteCode}-lm{$sort}.{$domainBase}/";
		}
	}

    public function getRelatedInfos($model)
    {
        $preInfo = $model->find()->select('id, name, created_at, sort')->where(['and', ['and', "site_code='{$this->siteCode}'", "sort='{$model->sort}'"], ['<', 'created_at', $model->created_at]])->orderBy('id DESC')->one();
        $nextInfo = $model->find()->select('id, name, created_at, sort')->where(['and', ['and', "site_code='{$this->siteCode}'", "sort='{$model->sort}'"], ['>', 'created_at', $model->created_at]])->one();
        $rInfos = $model->getInfos(['where' => ['site_code' => $this->siteCode, 'sort' => $model->sort], 'limit' => 5]);
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
