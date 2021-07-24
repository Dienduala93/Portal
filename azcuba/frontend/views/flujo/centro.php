<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlujoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flujo Centro de Limpieza';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Flujo', ['create-centro'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre',
           // 'imagen',
            'descripcion:ntext',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view-centro} {update-centro} {delete-centro}',

                'buttons' => [
                    'view-centro' => function ($url, $model, $key){
                        return Html::a('<span title="ver" class="glyphicon glyphicon-eye-open">',$url);
                    },
                    'update-centro' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-pencil">',$url);
                    },
                    'delete-centro' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-trash">',$url,[
                            'data' => [
                                'confirm' => '¿Está seguro de eliminar este elemento?',
                                'method' => 'post',
                            ],
                        ]);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
