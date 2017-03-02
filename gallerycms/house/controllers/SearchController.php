<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\HouseController;
use gallerycms\house\models\AskSort;
use gallerycms\house\models\AskTag;
use gallerycms\merchant\models\Merchant;

class SearchController extends HouseController
{
	public function actionIndex()
	{
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$keyword = Yii::$app->request->post('keyword');
        $searchSort = Yii::$app->request->post('search_sort');
		//$keyword = Yii::$app->request->get('keyword');
        //$searchSort = Yii::$app->request->get('search_sort');
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

    protected function _merchantSearch($keyword)
    {
        $model = new Merchant();
        $mSortInfos = $model->merchantSortInfos;
        $urlBase = Yii::getAlias('@gallerycmsurl') . '/' . $this->currentCityCode . '/merchant/';
        foreach ($mSortInfos as $sort => $info) {
            foreach ($info['values'] as $key => $value) {
                if (strtolower($value) == strtolower($keyword)) {
                    $url = $urlBase . substr($sort, 0, 1) . '_' . $key . '/';
                    return ['status' => 200, 'url' => $url];
                }
            }
        }
        return ['status' => 200, 'url' => $urlBase . '?keyword=' . $keyword];
    }

    protected function _askSearch($keyword)
    {
        $sort = new AskSort();
        $info = $sort->find()->where(['name' => $keyword])->one();
        if ($info) {
            return ['status' => 200, 'url' => Yii::getAlias('@gallerycmsurl') . '/ask_lm_' . $info['code'] . '/'];
        }

        $tag = new AskTag();
        $info = $tag->find()->where(['name' => $keyword])->one();
        if ($info) {
            return ['status' => 200, 'url' => Yii::getAlias('@gallerycmsurl') . '/ask_' . $info['id'] . '/'];
        }

        return ['status' => 200, 'url' => Yii::getAlias('@gallerycmsurl') . '/ask_0/?keyword=' . $keyword];
    }
}
