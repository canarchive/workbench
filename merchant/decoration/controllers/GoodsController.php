<?php

namespace shop\controllers;

use shop\components\Controller as ShopController;

class GoodsController extends ShopController
{
    public function actionList()
    {
		$positionDatas = [
			'list_left' => [], 
			'list_right' => [],
			'list_mobile' => [],
		];
		$positionInfos = $this->_getPositionInfos(array_keys($positionDatas));
		foreach ($positionInfos as $info) {
			$positionDatas[$info['type']][] = $info->toArray();
		}		

		$goods = new \shop\models\Goods();
		$infos = $goods->find()->select('id, name, category_id, main_photo')->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->all();
		$categoryInfos = $goods->categoryInfos;

		$datas = [];
		foreach ($infos as $id => $info) {
			$info['main_photo'] = $info->getAttachmentUrl($info['main_photo']);
			$catId = $info['category_id'];
			$datas[$catId][$id] = $info->toArray();
		}
		foreach ($categoryInfos as $catId => & $info) {
			if (!in_array($catId, array_keys($datas))) {
				unset($categoryInfos[$catId]);
			} else {
				$info['datas'] = $datas[$catId];
			}
		}
		$datas = [
			'infos' => $categoryInfos, 
			'positionDatas' => $positionDatas,
		];

        return $this->render('list', $datas);
    }

    public function actionShow()
    {
		$id = intval(\Yii::$app->request->get('id'));
		if (empty($id)) {
		    return \Yii::$app->response->redirect('/')->send();
		}

		$goods = new \shop\models\Goods();
		$info = $goods->getInfo($id);
		if (empty($info)) {
		    return \Yii::$app->response->redirect('/')->send();
		}
		$sample = new \shop\models\Sample();
		$sampleInfos = $sample->getInfos($id, 5);
		$datas = [
			'info' => $info,
			'sampleInfos' => $sampleInfos,
		];

		return $this->render('show', $datas);
    }
}
