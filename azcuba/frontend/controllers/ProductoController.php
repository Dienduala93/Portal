<?php

namespace frontend\controllers;

use Yii;
use common\models\Producto;
use common\models\ProductoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * ProductoController implements the CRUD actions for Producto model.
 */
class ProductoController extends Controller
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
     * Lists all Producto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionProducto()
    {
        $searchModel = new ProductoSearch();
        $dataProvider = $searchModel->searchProducto(Yii::$app->request->queryParams);

        return $this->render('producto-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Producto model.
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
     * Creates a new Producto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */


    public function actionViewProducto($id)
    {
        return $this->render('view-producto-targeta', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCreate()
    {
        $model = new Producto();

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

            return $this->redirect(['/producto']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionCreateProducto()
    {
        $model = new Producto();

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
                return $this->render('create-producto-targeta', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/producto/producto']);
        }

        return $this->render('create-producto-targeta', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Producto model.
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

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing Producto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateProducto($id)
    {
        $model = $this->findModel($id);

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
                return $this->render('create-producto', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['/producto/producto']);
        }

        return $this->render('update-producto', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing Producto model.
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
     * Deletes an existing Producto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteProducto($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['producto']);
    }
    /**
     * Finds the Producto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Producto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Producto::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
