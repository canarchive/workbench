<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\StringHelper;
use gallerycms\components\HouseController;
use gallerycms\house\models\Ask;
use gallerycms\house\models\AskQuestion;
use gallerycms\house\models\AskAnswer;
use gallerycms\house\models\AskSort;
use gallerycms\house\models\AskTag;
use gallerycms\merchant\models\Merchant;

class AskController extends HouseController
{
    public function init()
    {
        parent::init();

        if ($this->clientType == 'mobile') {
            $this->layout = '@gallerycms/views/main-mobile';
        } else {
            $this->layout = 'main-ask';
        }
        $this->metaLocation = '';
    }

    public function actionTag()
    {
        return $this->render('tag');
    }

    public function actionTaglist()
    {
		$page = ltrim(Yii::$app->request->get('page'));
        $page = str_replace('_', '', $page);

        $tag = intval(Yii::$app->request->get('tag'));
        $tagInfo = false;
        if ($tag > 0) {
            $tagModel = new AskTag;
            $tagInfo = $tagModel->find()->where($tag)->one();
            $keyword = $tagInfo ? $tagInfo['name'] : '';
        } else {
            $keyword = strip_tags(Yii::$app->request->get('keyword'));
        }
        $where = ['status' => 1];
        $andWhere = ['like', 'name', $keyword];
		$model = new AskQuestion();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'andWhere' => $andWhere, 'orderBy' => $orderBy, 'pageSize' => 20, 'pagePreStr' => '_']);

		$datas = [
            'keyword' => $keyword,
			'page' => $page,
			'model' => $model,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
            'sortInfos' => ['sortInfos' => AskSort::find()->indexBy('code')->asArray()->all()],
            'merchantInfos' => $this->_getMerchantInfos(),
            'tagInfos' => $this->_getTagInfos(),
		];
		$pageStr = $page > 1 ? "第{$page}页-" : '';

        $sortStr = isset($sortInfos['cInfo']['name']) ? $sortInfos['cInfo']['name'] : '兔班长问答列表';
		$dataTdk = ['{{SORTSTR}}' => $keyword, '{{PAGESTR}}' => $pageStr];
        $tdkInfo = [];
        if ($tagInfo) {
            $tdkInfo['title'] = $tagInfo['meta_title'];
            $tdkInfo['keyword'] = $tagInfo['meta_keyword'];
            $tdkInfo['desription'] = $tagInfo['meta_description'];
        } else {
            $tdkInfo['title'] = Yii::$app->params['siteName'];
            $tdkInfo['keyword'] = '';
            $tdkInfo['desription'] = '';
        }
		$this->getTdkInfos('ask-taglist', $dataTdk, $tdkInfo);
		return $this->render('taglist', $datas);
    }

	public function actionIndex()
	{
        $datas = [];

		$dataTdk = [];//['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('sample-index', $dataTdk);
		return $this->render('index', $datas);
	}

    public function actionList()
    {
		$page = ltrim(Yii::$app->request->get('page'));
        $page = str_replace('_', '', $page);
        $sort = ltrim(Yii::$app->request->get('sort'));
        $sortInfos = $this->_checkSort($sort);

        $where = ['status' => 1, 'sort' => $sortInfos['codes']];
		$model = new AskQuestion();
        $orderBy = ['created_at' => SORT_DESC];
		$infos = $model->getInfosByPage(['where' => $where, 'orderBy' => $orderBy, 'pageSize' => 20, 'pagePreStr' => '_']);
		$datas = [
			'page' => $page,
			'model' => $model,
            'sortInfos' => $sortInfos,
			'infos' => $infos['infos'],
            'pages' => $infos['pages'],
            'merchantInfos' => $this->_getMerchantInfos(),
            'tagInfos' => $this->_getTagInfos(),
		];
        $page = str_replace('_', '', $page);
		$pageStr = $page > 1 ? "_第{$page}页" : '';

        $sortStr = isset($sortInfos['cInfo']['name']) ? $sortInfos['cInfo']['name'] : '兔班长问答列表';
		$dataTdk = ['{{SORTSTR}}' => $sortStr, '{{PAGESTR}}' => $pageStr];
            $tdkInfo['title'] = $sortInfos['cInfo']['meta_title'];
            $tdkInfo['keyword'] = $sortInfos['cInfo']['meta_keyword'];
            $tdkInfo['desription'] = $sortInfos['cInfo']['meta_description'];
		$this->getTdkInfos('ask-list', $dataTdk, $tdkInfo);
		return $this->render('list', $datas);
	}

	public function actionShow()
	{
        $id = Yii::$app->getRequest()->get('id');
        $model = new AskQuestion();
		$info = $model->getInfo($id);
		if (empty($info) || $info['status'] != 1) {
            throw new NotFoundHttpException('NO found');
		}

        $sortInfos = $this->_checkSort($info['sort']);

        //$description = str_replace(' ', '', $info['description']);
        $tagStr = !empty($sortInfos['pInfo']) ? $sortInfos['pInfo']['name'] . ',' : '';
        $tagStr .= !empty($sortInfos['cInfo']) ? $sortInfos['cInfo']['name'] . ',' : '';
        $tagStr = rtrim($tagStr, ',');

        $info['memberInfo'] = $info->getMemberInfo($info, 'ask');
        $aModel = new AskAnswer();
        $answerInfos = $aModel->getInfos($info);//['question_id' => $info['id']]);
        //print_r($answerInfos);exit();
        $infos = $model->getInfos(['status' => 1, 'sort' => $sortInfos['code']], 6);
		$datas = [
			'info' => $info,
            'sortInfos' => $sortInfos,
            'infos' => $infos,
            'merchantInfos' => $this->_getMerchantInfos(),
            'tagInfos' => $this->_getTagInfos(),
            'answerInfos' => $answerInfos,
		];

        $description = StringHelper::truncate(strip_tags($info['description']), 200, '');
        $description = empty($description) ? $info['name'] : $description;
		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr, '{{DESCRIPTION}}' => $description];
		$this->getTdkInfos('info-show', $dataTdk);
		$this->getTdkInfos('ask-show', $dataTdk);
		return $this->render('show', $datas);
	}

    protected function _checkSort($code)
    {
        $sortInfos = AskSort::find()->indexBy('code')->asArray()->all();
        $cInfo = isset($sortInfos[$code]) ? $sortInfos[$code] : [];
        if (empty($cInfo)) {
            //throw new NotFoundHttpException('NO found');
        }
        
        $parentCode = $cInfo['parent_code'];
        $pInfo = $parentCode == '' ? [] : $sortInfos[$parentCode];
        $levelInfos = [];
        foreach ($sortInfos as $sCode => $sortInfo) {
            if ($sortInfo['parent_code'] == '') {
                $levelInfos[$sCode] = isset($levelInfos[$sCode]) ? $levelInfos[$sCode] : $sortInfo;
            } else {
                $pCode = $sortInfo['parent_code'];
                if (!isset($levelInfos[$pCode])) {
                    $levelInfos[$pCode] = $sortInfos[$pCode];
                }
                $levelInfos[$sortInfo['parent_code']]['subInfos'][$sCode] = $sortInfo;
            }
        }
        //print_r($levelInfos);exit();

        $codes = $code == '' ? array_keys($levelInfos) : ($parentCode == '' ? array_keys($levelInfos[$code]['subInfos']) : [$code]);
        $return = [
            'code' => $code, 
            'cInfo' => $cInfo,
            'parentCode' => $parentCode,
            'pInfo' => $pInfo,
            'levelInfos' => $levelInfos,
            'codes' => $codes,
            'sortInfos' => $sortInfos,
        ];
        return $return;
    }

    protected function _getMerchantInfos()
    {
        $mModel = new Merchant();
        $where = ['status' => 1, 'city_code' => $this->currentCityCode];
        $datas = $mModel->getInfos($where, 5);
        return $datas;

    }

    protected function _getTagInfos()
    {
        $model = new AskTag();
        $infos = $model->find()->orderBy(['id' => SORT_DESC])->limit(40)->all();
        return $infos;
    }
}
