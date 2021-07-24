<?php

namespace frontend\controllers;

use Yii;
use common\models\Fabricacion;
use common\models\FabricacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * FabricacionController implements the CRUD actions for Fabricacion model.
 */
class FabricacionController extends Controller
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
     * Lists all Fabricacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FabricacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionPurificacion()
    {
        $searchModel = new FabricacionSearch();
        $dataProvider = $searchModel->searchPurificacion(Yii::$app->request->queryParams);

        return $this->render('purificacion-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCristalizacion()
    {
        $searchModel = new FabricacionSearch();
        $dataProvider = $searchModel->searchCristalizacion(Yii::$app->request->queryParams);

        return $this->render('cristalizacion-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCentrifuga()
    {
        $searchModel = new FabricacionSearch();
        $dataProvider = $searchModel->searchCentrifuga(Yii::$app->request->queryParams);

        return $this->render('centrifuga-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fabricacion model.
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
     * Displays a single purificacion model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewPurificacion($id)
    {
        return $this->render('view-purificacion-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single cristalizacion model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewCristalizacion($id)
    {
        return $this->render('view-cristalizacion-targeta', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Displays a single centrifuga model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewCentrifuga($id)
    {
        return $this->render('view-centrifuga-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Fabricacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fabricacion();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion']);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new purificacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatePurificacion()
    {
        $model = new Fabricacion();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-purificacion-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion/purificacion']);
        }


        return $this->render('create-purificacion-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new cristalizacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCristalizacion()
    {
        $model = new Fabricacion();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-cristalizacion-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion/cristalizacion']);
        }


        return $this->render('create-cristalizacion-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new centrifuga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCentrifuga()
    {
        $model = new Fabricacion();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-centrifuga-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion/centrifuga']);
        }


        return $this->render('create-centrifuga-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Fabricacion model.
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
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing purificacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdatePurificacion($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-purificacion-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion/purificacion']);
        }

        return $this->render('update-purificacion-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing cristalizacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateCristalizacion($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-cristalizacion-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion/cristalizacion']);
        }

        return $this->render('update-cristalizacion-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing centrifuga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateCentrifuga($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {

                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-centrifuga-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/fabricacion/centrifuga']);
        }

        return $this->render('update-centrifuga-targeta', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing Fabricacion model.
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
     * Deletes an existing Fabricacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeletePurificacion($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['purificacion']);

    }

    /**
     * Deletes an existing Fabricacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteCristalizacion($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['cristalizacion']);

    }
    /**
     * Deletes an existing Fabricacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteCentrifuga($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['centrifuga']);

    }
    /**
     * Deletes an existing Purificacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */


    /**
     * Finds the Fabricacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fabricacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fabricacion::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
