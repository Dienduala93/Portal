<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlujoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flujo de Derivados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Flujo', ['create-derivados'], ['class' => 'btn btn-success']) ?>
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
                'template' => '{view-derivados} {update-derivados} {delete}',

                'buttons' => [
                    'view-derivados' => function ($url, $model, $key){
                        return Html::a('<span title="ver" class="glyphicon glyphicon-eye-open">',$url);
                    },
                    'update-derivados' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-pencil">',$url);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
