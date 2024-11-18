<?php

namespace backend\controllers;

use common\models\Marshrut;
use common\models\MarshrutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MarshrutController implements the CRUD actions for Marshrut model.
 */
class MarshrutController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Marshrut models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MarshrutSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Marshrut model.
     * @param int $Код_маршрута Код Маршрута
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Код_маршрута)
    {
        return $this->render('view', [
            'model' => $this->findModel($Код_маршрута),
        ]);
    }

    /**
     * Creates a new Marshrut model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Marshrut();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Код_маршрута' => $model->Код_маршрута]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Marshrut model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Код_маршрута Код Маршрута
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Код_маршрута)
    {
        $model = $this->findModel($Код_маршрута);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Код_маршрута' => $model->Код_маршрута]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Marshrut model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Код_маршрута Код Маршрута
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Код_маршрута)
    {
        $this->findModel($Код_маршрута)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Marshrut model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Код_маршрута Код Маршрута
     * @return Marshrut the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Код_маршрута)
    {
        if (($model = Marshrut::findOne(['Код_маршрута' => $Код_маршрута])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
