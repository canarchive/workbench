<?php
namespace backend\components;

use Yii;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use common\components\Controller;

/**
 * admin common controller
 */
class AdminController extends Controller
{
    public $searchModel;
    public $identityInfo;
    public $showSubnav = true;
    protected $modelClass = '';
    public $showFilter;
    public $noActionColumn;
    public $forceSkipPriv;
    //protected $viewPrefix = '';
    public $layout = '@backend/views/charisma/layouts/main';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        $actions = parent::actions();
        return array_merge($actions, [
    
            'upload' => [
                'class' => 'common\ueditor\UEditorAction',
            ],  
        ]);  
    } 

    /**
     * Lists infos.
     * @return mixed
     */
    protected function _listinfoInfo($view = null)
    {
        $searchClass = $this->modelSearchClass;
        $this->searchModel = new $searchClass();
        $dataProvider = $this->searchModel->search(Yii::$app->request->getQueryParams());
        $view = is_null($view) ? $this->listinfoView : $view;
        return $this->render($view, [
            'dataProvider' => $dataProvider,
        ]);
    }

    protected function getListinfoView()
    {
        return '@backend/views/common/listinfo';
    }

    protected function _returnView()
    {
        return true;
    }

    /**
     * Lists tree infos,
     * @return mixed
     */
    public function _listinfoTree($model)
    {
        $infos = $model->getFormatedInfos();

        return $this->render('@backend/views/common/listinfo_tree', [
            'model' => $model,
            'currentView' => $this->viewPrefix,
            'infos' => $infos,
        ]);
    }

    protected function _importInfo()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $data = [];
        if ($model->load(Yii::$app->request->post())) {
            $data = $model->import();
        }
        $data['model'] = $model;

        return $this->render($this->viewPrefix . 'import', $data);
    }

    protected function _addMulInfo()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $return = false;
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $this->_checkRecordPriv($model);
            if (!empty($model->add_mul)) {
                $return = $model->addMul();
            }
        }
        if ($return) {
            return $this->redirect(['listinfo']);
        }

        return $this->render($this->viewPrefix . 'add', [
            'addMul' => true,
            'model' => $model,
        ]);
    }

    protected function _getScenario()
    {
        return 'default';
    }

    /**
     * Deletes an existing info.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param  string $id
     * @return mixed
     */
    protected function _deleteInfo($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['listinfo']);
    }

    protected function _updateByAjax()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (Yii::$app->getRequest()->method != 'POST') {
            return ['status' => 400, 'message' => '请求方法错误'];
        }

        $id = Yii::$app->request->post('info_id');
        $field = Yii::$app->request->post('field');
        $value = Yii::$app->request->post('value');
        if (empty($id) || empty($field)) {
            return ['status' => 400, 'message' => '参数错误'];
        }

        $info = $this->findModel($id, false);
        if (empty($info)) {
            return ['status' => 400, 'message' => '信息不存在'];
        }
		$confirmUpdate = $this->confirmUpdate($info);
		if ($confirmUpdate) {
			return ['status' => 400, 'message' => '信息已锁定不能修改'];
		}
        $info->$field = $value;
        $info->update(false);

        return ['status' => 200, 'message' => 'OK'];
    }

	protected function confirmUpdate($info)
	{
		return false;
	}

    /**
     * Finds the model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Model the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $throwException = true)
    {
        $modelClass = $this->modelClass;
        if (($model = $modelClass::findOne($id)) !== null) {
            $this->_checkRecordPriv($model);
            return $model;
        }
        if ($throwException) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return false;
    }

    protected function _checkRecordPriv($model)
    {
        if (!empty($this->forceSkipPriv)) {
            return true;
        }
        $privInfo = Yii::$app->params['privInfo'];
        foreach ((array) $privInfo as $field => $value) {
            if (!$model->hasAttribute($field) || is_null($value)) {
                continue;
            }
            $currentValue = $model->$field;
            $currentValue = is_scalar($currentValue) ? explode(',', $currentValue) : (array) $currentValue;
            $currentValue = array_filter($currentValue);
            $join = array_intersect($value, $currentValue);
            if (empty($join)) {
                throw new ForbiddenHttpException(Yii::t('yii', 'You are locked2.'));
            }
        }

        return true;
    }

    public function beforeAction($action)
    {
        $this->_privInfo();
        return parent::beforeAction($action);
    }

    protected function privGetIgnore()
    {
        return [];
    }

    protected function _privInfo()
    {
        //if (!empty($this->forceSkipPriv)) {
            //return true;
        //}
        $data = method_exists($this->module, 'initPrivInfo') ? $this->module->initPrivInfo() : [];
        foreach ($data as $key => & $value) {
            if (in_array($key, $this->privGetIgnore()) || is_null($value)) {
                unset($data[$key]);
                continue;
            }
            $getSource = Yii::$app->request->get($key);
            if (!is_null($getSource)) {
                $diff = array_intersect((array) $getSource, (array) $value);
                if (empty($diff) && !empty($this->forceSkipPriv)) {
                    throw new ForbiddenHttpException(Yii::t('yii', 'You are locked1.'));
                }
                $value = $getSource;
            }
            $_GET[$key] = $value;
        }
        Yii::$app->params['privInfo'] = $data;
    }

    public function getViewPrefix()
    {
        return '';
    }

    public function renderForAjax($model)
    {
        return $this->renderPartial('@baseapp/common/views/change-gather/_ajax', ['model' => $model]);
    }
}
