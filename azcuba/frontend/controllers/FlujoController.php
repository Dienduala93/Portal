<?php

namespace frontend\controllers;

use Yii;
use common\models\Flujo;
use common\models\FlujoSearch;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * FlujoController implements the CRUD actions for Flujo model.
 */
class FlujoController extends Controller
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
     * Lists all Flujo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCentro()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->searchCentro(Yii::$app->request->queryParams);

        return $this->render('centro-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionBasculador()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->searchBasculador(Yii::$app->request->queryParams);

        return $this->render('basculador-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionVapor()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->searchGeneracion(Yii::$app->request->queryParams);

        return $this->render('vapor-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionDerivados()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->searchDerivados(Yii::$app->request->queryParams);

        return $this->render('derivados-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionLaboratorio()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->searchLaboratorio(Yii::$app->request->queryParams);

        return $this->render('laboratorio-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionPlanta()
    {
        $searchModel = new FlujoSearch();
        $dataProvider = $searchModel->searchPlanta(Yii::$app->request->queryParams);

        return $this->render('planta-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Flujo model.
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
     * Displays a single Flujo centro model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewCentro($id)
    {
        return $this->render('view-centro-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Flujo Laboratorio model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewLaboratorio($id)
    {
        return $this->render('view-laboratorio-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Flujo Derivados model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewDerivados($id)
    {
        return $this->render('view-derivados', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Displays a single Generacion de vapor model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewVapor($id)
    {
        return $this->render('view-vapor-targeta', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Displays a single Flujo Basculador model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewBasculador($id)
    {
        return $this->render('view-basculador-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Flujo planta model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewPlanta($id)
    {
        return $this->render('view-planta-targeta', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Flujo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
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

            return $this->redirect(['/flujo']);
        }

        return $this->render('create', [
            'model' => $model,

        ]);
    }

    /**
     * Creates a new Flujo centro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCentro()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-centro-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/flujo/centro']);
        }

        return $this->render('create-centro-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Creates a new Flujo centro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateLaboratorio()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-laboratorio-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/flujo/laboratorio']);
        }

        return $this->render('create-laboratorio-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Creates a new Flujo Derivados model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateDerivados()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-derivados', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/flujo/derivados']);
        }

        return $this->render('create-derivados', [
            'model' => $model,

        ]);
    }

    /**
     * Creates a new Generacion de vapor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateVapor()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-vapor-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/flujo/vapor']);
        }

        return $this->render('create-vapor-targeta', [
            'model' => $model,

        ]);
    }


    /**
     * Creates a new Flujo basculador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateBasculador()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-basculador-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/flujo/basculador']);
        }

        return $this->render('create-basculador-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Creates a new Flujo planta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatePlanta()
    {
        $model = new Flujo();


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            //  echo '<pre>'; var_dump($foto); die;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-plantar-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/flujo/planta']);
        }

        return $this->render('create-planta-targeta', [
            'model' => $model,

        ]);
    }
    /**
     * Updates an existing Flujo model.
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
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo']);
        }

        return $this->render('update', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Flujo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateCentro($id)
    {
        $model = $this->findModel($id);


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-centro-targeta', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo/centro']);
        }

        return $this->render('update-centro-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Laboratorio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateLaboratorio($id)
    {
        $model = $this->findModel($id);


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-laboratorio-targeta', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo/laboratorio']);
        }

        return $this->render('update-laboratorio-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Derivados model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateDerivados($id)
    {
        $model = $this->findModel($id);


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-derivados', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo/derivados']);
        }

        return $this->render('update-derivados', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Flujo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateVapor($id)
    {
        $model = $this->findModel($id);


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-vapor-targeta', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo/vapor']);
        }

        return $this->render('update-vapor-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Flujo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateBasculador($id)
    {
        $model = $this->findModel($id);


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-basculador-targeta', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo/basculador']);
        }

        return $this->render('update-basculador-targeta', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Flujo planta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdatePlanta($id)
    {
        $model = $this->findModel($id);


        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model, 'foto');
            $foto = $model->nombre . '-' . date('Y-m-d H.i.s') . '.' . $model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta . $foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-planta-targeta', [
                    'model' => $model,

                ]);
            }

            return $this->redirect(['/flujo/planta']);
        }

        return $this->render('update-planta-targeta', [
            'model' => $model,

        ]);
    }
    /**
     * Deletes an existing Flujo model.
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
     * Deletes an existing Flujo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteBasculador($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['basculador']);
    }
    /**
     * Deletes an existing Flujo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteCentro($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['centro']);
    }
    /**
     * Deletes an existing Flujo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteDerivados($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['derivados']);
    }
    /**
     * Deletes an existing Flujo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteLaboratorio($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['laboratorio']);
    }
    /**
     * Deletes an existing Flujo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeletePlanta($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['planta']);
    }
    /**
     * Deletes an existing Flujo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteVapor($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['vapor']);
    }
    /**
     * Finds the Flujo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Flujo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Flujo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
