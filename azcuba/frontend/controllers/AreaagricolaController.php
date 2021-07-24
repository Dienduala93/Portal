<?php

namespace frontend\controllers;

use Yii;
use common\models\Areaagricola;
use common\models\AreaagricolaSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use common\models\Tipo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * AreaagricolaController implements the CRUD actions for Areaagricola model.
 */
class AreaagricolaController extends Controller
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
                        'actions' => ['logout','signup' ],
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
        public function rules(){
            return [

            ];
        }
    /**
     * Lists all Areaagricola models.
     * @return mixed
     */
    public function actionIndex()
    {
        //$dt_posts = new ActiveDataProvider([
          // 'query' => Post::find()->orderBy('updated_at DESC'),
          //  'pagination' => [
              //  'pageSize' => 3
           // ]
       // ]);
        //return $this->render('index', [
          //  'dt_psts' => $dt_posts,
        //]);

        $searchModel = new AreaagricolaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUbpc()
    {
        $searchModel = new AreaAgricolaSearch();
        $dataProvider = $searchModel->searchUbpc(Yii::$app->request->queryParams);

        return $this->render('ubpc-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCss()
    {
        $searchModel = new AreaAgricolaSearch();
        $dataProvider = $searchModel->searchCss(Yii::$app->request->queryParams);

        return $this->render('css-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCpa()
    {
        $searchModel = new AreaAgricolaSearch();
        $dataProvider = $searchModel->searchCpa(Yii::$app->request->queryParams);

        return $this->render('cpa-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Areaagricola model.
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
     * Displays a single Areaagricola UBPC model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewUbpc($id)
    {
        return $this->render('view-ubpc-targeta', [
            'model' => $this->findModel($id),
        ]);
    }


    /**
     * Displays a single Areaagricola CSS model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewCss($id)
    {
        return $this->render('view-css-targeta', [
            'model' => $this->findModel($id),
        ]);
    }


    /**
     * Displays a single Areaagricola CPA model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewCpa($id)
    {
        return $this->render('view-cpa-targeta', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new Areaagricola model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Areaagricola();
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola']);
        }

          return $this->render('create', [
            'model' => $model,
            'data' => $data,
        ]);
    }



    /**
     * Creates a new Areaagricola UBPC model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateUbpc()
    {
        $model = new Areaagricola();
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-ubpc-targeta', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola/ubpc']);
        }

        return $this->render('create-ubpc-targeta', [
            'model' => $model,
            'data' => $data,
        ]);
    }

    /**
     * Creates a new Areaagricola CSS model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCss()
    {
        $model = new Areaagricola();
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-css-targeta', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola/css']);
        }

        return $this->render('create-css-targeta', [
            'model' => $model,
            'data' => $data,
        ]);
    }

    /**
     * Creates a new Areaagricola CPA model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCpa()
    {
        $model = new Areaagricola();
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-cpa-targeta', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola/cpa']);
        }

        return $this->render('create-cpa-targeta', [
            'model' => $model,
            'data' => $data,
        ]);
    }

    /**
     * Updates an existing Areaagricola model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola']);
        }

        return $this->render('update', [
            'model' => $model,
            'data' => $data,
        ]);
    }


    /**
     * Updates an existing Areaagricola UBPC model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateUbpc($id)
    {
        $model = $this->findModel($id);
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-ubpc', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola/ubpc']);
        }

        return $this->render('update-ubpc', [
            'model' => $model,
            'data' => $data,
        ]);
    }
    /**
     * Updates an existing Areaagricola Css model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateCss($id)
    {
        $model = $this->findModel($id);
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-css', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola/css']);
        }

        return $this->render('update-css', [
            'model' => $model,
            'data' => $data,
        ]);
    }

    /**
     * Updates an existing Areaagricola Css model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateCpa($id)
    {
        $model = $this->findModel($id);
        $data = ArrayHelper::map(Tipo::find()->select(['id', 'nombre'])->all(), 'id', 'nombre');

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $model->foto = UploadedFile::getInstance($model,'foto');
            $foto = $model->nombre.'-'. date('Y-m-d H.i.s') .'.'.$model->foto->extension;
            $model->imagen = $foto;

            if ($model->save()) {
                //TODO revisar si falta hacer algo aquí
                Yii::$app->session->setFlash('success', 'Guardado correctamente!');
                $model->foto->saveAs($model->ruta.$foto);
            } else {
                Yii::$app->session->setFlash('error', 'Error!');
                return $this->render('create-cpa', [
                    'model' => $model,
                    'data' => $data,
                ]);
            }

            return $this->redirect(['/areaagricola/cpa']);
        }

        return $this->render('update-cpa', [
            'model' => $model,
            'data' => $data,
        ]);
    }

    /**
     * Deletes an existing Areaagricola model.
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
     * Deletes an existing Areaagricola model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteUbpc($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['ubpc']);
    }

    /**
     * Deletes an existing Areaagricola model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteCss($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['css']);
    }

    /**
     * Deletes an existing Areaagricola model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteCpa($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['cpa']);
    }

    /**
     * Finds the Areaagricola model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Areaagricola the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Areaagricola::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
