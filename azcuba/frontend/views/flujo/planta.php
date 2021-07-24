<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlujoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flujo Planta Eléctrica';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Flujo', ['create-planta'], ['class' => 'btn btn-success']) ?>
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
                'template' => '{view-planta} {update-planta} {delete}',

                'buttons' => [
                    'view-planta' => function ($url, $model, $key){
                        return Html::a('<span title="ver" class="glyphicon glyphicon-eye-open">',$url);
                    },
                    'update-planta' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-pencil">',$url);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
