<?php

namespace ifeed\shoot\models;

use baseapp\ifeed\models\AdpictureTrait;

class Adpicture extends BaseModel
{
    use AdpictureTrait;

	public function getPageInfos($siteCode = null)
	{
		$datas = [];
		$sort = new Sort();
		$infos = $sort->infosBySite;
		$infos = $siteCode != null ? [$siteCode => $infos[$siteCode]] : $infos;

		foreach ($infos as $siteCode => $info) {
			if (!isset($this->siteInfos[$siteCode])) {
				continue;
			}
			$sName = $this->siteInfos[$siteCode]['name'];
			$datas["index-{$siteCode}"] = $sName . '-首页';
			foreach ($info as $sortCode => $sortInfo) {
				$datas["sort-{$sortCode}"] = "{$sName}-{$sortInfo['name']}-栏目";
			}
		}
		return $datas;
	}

    protected function getPositionInfos()
    {
		$datas = [
			//'slide' => '幻灯',
			'slide-pc' => 'PC端banner',
			'slide-mobile' => '移动端端banner'
		];
		return $datas;
    }
}
