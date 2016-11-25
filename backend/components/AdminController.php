<?php
namespace backend\components;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\components\Controller;

/**
 * admin common controller
 */
class AdminController extends Controller
{
    public $menuInfos = [];
    public $showSubnav = true;
    protected $modelClass = '';
    protected $viewPrefix = '';

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

    /**
     * Lists infos.
     * @return mixed
     */
    protected function _listinfoInfo()
    {
        $searchClass = $this->modelSearchClass;
        $searchModel = new $searchClass();
        $searchDatas = $searchModel->getSearchDatas();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render($this->viewPrefix . 'listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'searchDatas' => $searchDatas,
        ]);
    }

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function _listinfoTree($model)
    {
        $infos = $model->getFormatedInfos();

        return $this->render($this->viewPrefix . 'listinfo', [
            'model' => $model,
            'infos' => $infos,
        ]);
    }

    /**
     * Displays a single info.
     * @param  string $id
     * @return mixed
     */
    protected function _viewInfo($id)
    {
        $model = $this->findModel($id);
        return $this->render($this->viewPrefix . 'view', ['model' => $model]);
    }

    /**
     * Creates a new info.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    protected function _addInfo($data = [], $returnView = true)
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass($this->_addData());
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($this->_returnView()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->redirect(['listinfo']);
        }

        return $this->render($this->viewPrefix . 'add', [
            'model' => $model,
        ]);
    }

    protected function _addData()
    {
        return [];
    }

    protected function _returnView()
    {
        return true;
    }

    protected function _importInfo($model)
    {
        if ($model->load(Yii::$app->request->post()) && $model->import()) {
            return $this->redirect(['listinfo']);
        }

        return $this->render('import', [
            'model' => $model,
        ]);
    }

    protected function _addMulInfo()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();
        $return = false;
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
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

    /**
     * Updates an existing info.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  string $id
     * @return mixed
     */
    protected function _updateInfo($id, $scenario = '')
    {
        $model = $this->findModel($id);
        if (!empty($scenario)) {
            $model->setScenario($scenario);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render($this->viewPrefix . 'update', ['model' => $model]);
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
        $info->$field = $value;
        $info->update(false);

        return ['status' => 200, 'message' => 'OK'];
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
    }
}
