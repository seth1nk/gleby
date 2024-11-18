<?php

namespace backend\controllers;

use common\models\Avtomobili;
use common\models\AvtomobiliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AvtomobiliController implements the CRUD actions for Avtomobili model.
 */
class AvtomobiliController extends Controller
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
     * Lists all Avtomobili models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AvtomobiliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Avtomobili model.
     * @param int $Код_авто Код Авто
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Код_авто)
    {
        return $this->render('view', [
            'model' => $this->findModel($Код_авто),
        ]);
    }

    /**
     * Creates a new Avtomobili model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Avtomobili();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Код_авто' => $model->Код_авто]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Avtomobili model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Код_авто Код Авто
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Код_авто)
    {
        $model = $this->findModel($Код_авто);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Код_авто' => $model->Код_авто]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Avtomobili model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Код_авто Код Авто
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Код_авто)
    {
        $this->findModel($Код_авто)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Avtomobili model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Код_авто Код Авто
     * @return Avtomobili the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Код_авто)
    {
        if (($model = Avtomobili::findOne(['Код_авто' => $Код_авто])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
