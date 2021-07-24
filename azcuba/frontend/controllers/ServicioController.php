<?php

namespace frontend\controllers;

use Yii;
use common\models\Servicio;
use common\models\ServicioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * ServicioController implements the CRUD actions for Servicio model.
 */
class ServicioController extends Controller
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
     * Lists all Servicio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServicioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Servicio models.
     * @return mixed
     */
    public function actionServicio()
    {
        $searchModel = new ServicioSearch();
        $dataProvider = $searchModel->searchServicio(Yii::$app->request->queryParams);

        return $this->render('servicio-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Servicio model.
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
     * Displays a single Servicio model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewServicio($id)
    {
        return $this->render('view-servicio-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Servicio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Servicio();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            // echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/servicio']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Servicio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateServicio()
    {
        $model = new Servicio();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            // echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-servicio-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/servicio/servicio']);
        }

        return $this->render('create-servicio-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Servicio model.
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

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            // echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/servicio']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Servicio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateServicio($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            // echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-servicio', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/servicio/servicio']);
        }

        return $this->render('update-servicio', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Servicio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Deletes an existing Servicio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteServicio($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['servicio']);
    }

    /**
     * Finds the Servicio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Servicio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Servicio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
