<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\HouseController;
use gallerycms\house\models\AskSort;
use gallerycms\house\models\AskTag;

class SearchController extends HouseController
{
	public function actionIndex()
	{
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$keyword = Yii::$app->request->get('keyword');
        $searchSort = Yii::$app->request->get('search_sort');
        $searchSorts = ['merchant', 'ask', 'quote'];
        if (empty($searchSort) || !in_array($searchSort, $searchSorts)) {
            return ['status' => 400, 'message' => '信息有误，请重新操作'];
        }
        if (empty($keyword)) {
            return ['status' => 400, 'message' => '请输入搜索词'];
        }

        $method = '_' . $searchSort . 'Search';
        $data = $this->$method($keyword);
        return $data;
	}

    protected function _askSearch($keyword)
    {
        $sort = new AskSort();
        $info = $sort->find()->where(['name' => $keyword])->one();
        if ($info) {
            return ['status' => 200, 'url' => Yii::getAlias('@gallerycmsurl') . '/ask/lm_' . $info['code'] . '/'];
        }

        $tag = new AskTag();
        $info = $tag->find()->where(['name' => $keyword])->one();
        if ($info) {
            return ['status' => 200, 'url' => Yii::getAlias('@gallerycmsurl') . '/ask/' . $info['id'] . '/'];
        }

        return ['status' => 200, 'url' => Yii::getAlias('@gallerycmsurl') . '/ask/0/?keyword=' . $keyword];
    }
}
