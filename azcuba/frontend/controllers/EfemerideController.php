<?php

namespace frontend\controllers;

use Yii;
use common\models\Efemeride;
use common\models\EfemerideSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * EfemerideController implements the CRUD actions for Efemeride model.
 */
class EfemerideController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout', 'signup'],
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Efemeride models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EfemerideSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Efemeride model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Efemeride model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Efemeride();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = 'Ef-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aqu�
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/site/']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Efemeride model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = 'Ef-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aqu�
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/site', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Efemeride model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/index']);
    }
    /**
     * Deletes an existing Efemeride model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteEfeme($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['./']);
    }

    /**
     * Finds the Efemeride model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Efemeride the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Efemeride::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
