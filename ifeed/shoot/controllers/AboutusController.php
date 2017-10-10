<?php

namespace ifeed\shoot\controllers;

use Yii;
use yii\helpers\Url;
use ifeed\shoot\models\Guestbook;

class AboutusController extends Controller
{
	public function actionIndex()
	{
        if ($this->clientType != 'mobile') {
            //$this->layout = 'main-aboutus';
        }
		$view = Yii::$app->request->get('view');
		if ($view == 'record') {
			return $this->_record();
		}

		$datas = [
            'controllerId' => $this->id,
			'view' => $view,
		];
        $this->currentElem = $view;
		
        $this->formatMappingUrl('aboutus', ['view' => $view]);
		$this->getTdkInfos('aboutus-' . $view);
		return $this->render($view, $datas);
	}

    public function _record()
    {
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (!Yii::$app->request->isPost) {
            return ['status' => 400, 'message' => '操作异常，请您重新提交'];
        }

        $model = new Guestbook();
        //$_GET['city'] = $_GET['province'] . '-' . $_GET['city'];
        //$model->load(Yii::$app->request->get(), '');
        $_POST['city'] = $_POST['province'] . '-' . $_POST['city'];
        $model->load(Yii::$app->request->post(), '');

        $return = $model->doSubmitInfo();
        return $return;
    }

    public function getContactDatas()
    {
        $datas = [
            'hstudio' => [
                'hotline' => '15201631163',
                'serviceTime' => '周一至周日 9：00 ~ 18：00',
                'address' => '北京市朝阳区百子湾路苹果社区北区二十二院艺术街6号楼地下一层B3-5',
                //'weibo' => 'http://weibo.com/turuiyingxiang',
                'wechat' => 'jingweifengshang',
                //'line' => '地铁7号线百子湾站A口出向东150米',
                'position' => '116.477496,39.905321',
                'width' => '550',
                'height' => '60',
            ],
            'shoot' => [
                'hotline' => Yii::$app->params['siteHotline'],
                'serviceTime' => '周一至周日 9：00 ~ 18：00',
                'address' => '北京市朝阳区广渠路3号竞园产业基地10A',
                'weibo' => 'http://weibo.com/turuiyingxiang',
                'wechat' => 'hlyxwx',
                'line' => '乘车路线：地铁7号线百子湾站A口出向东150米',
                'position' => '116.516407,39.901525',
                'width' => '400',
                'height' => '60',
            ],
            'eale' => [
                'hotline' => '400-090-1916',
                'serviceTime' => '周一至周六 9:30-19:00',
		        'address' => '北京市朝阳区高碑店文化新大街东辰民族艺术大厦D座-03',
                'line' => '乘坐541，169小郊亭下车。坐八通线高碑店下，步行十五分钟到。',
                'position' => '116.547801,39.904919',
                'width' => '450',
                'height' => '50',
            ],
        ];
        return $datas[$this->siteCode];
    }
}
