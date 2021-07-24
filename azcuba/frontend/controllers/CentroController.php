<?php

namespace frontend\controllers;

use Yii;
use common\models\Centro;
use common\models\CentroSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CentroController implements the CRUD actions for Centro model.
 */
class CentroController extends Controller
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
    /**
     * Lists all Centro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CentroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCentro()
    {
        $searchModel = new CentroSearch();
        $dataProvider = $searchModel->searchCentro(Yii::$app->request->queryParams);

        return $this->render('centro-targeta', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Centro model.
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
     * Displays a single Centro model.
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
     * Creates a new Centro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Centro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Centro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCentro()
    {
        $model = new Centro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create-centro', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Centro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update-centro-targeta', [
            'model' => $model,
        ]);
    }
        /**
         * Updates an existing Centro model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         * @throws NotFoundHttpException if the model cannot be found
         */
    public function actionUpdateCentro($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['centro', 'id' => $model->id]);
        }

        return $this->render('update-centro-targeta', [
            'model' => $model,
        ]);

    }
        /**
         * Deletes an existing Centro model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         * @throws NotFoundHttpException if the model cannot be found
         */
        public
        function actionDelete($id)
        {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }

        /**
         * Finds the Centro model based on its primary key value.
         *
         *
         *
         * saf1º * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Centro the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected
        function findModel($id)
        {
            if (($model = Centro::findOne($id)) !== null) {
                return $model;
            }

            throw new NotFoundHttpException('The requested page does not exist.');
        }


}