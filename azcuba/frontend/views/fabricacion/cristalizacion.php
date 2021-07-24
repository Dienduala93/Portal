<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FabricacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cristalización';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fabricacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Fabricación', ['create-cristalizacion'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',
            'nombre',
            //'imagen',
            'descripcion:ntext',
            'tipoFabricacion',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view-cristalizacion} {update-cristalizacion} {delete}',

                'buttons' => [
                    'view-cristalizacion' => function ($url, $model, $key){
                        return Html::a('<span title="ver" class="glyphicon glyphicon-eye-open">',$url);
                    },
                    'update-cristalizacion' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-pencil">',$url);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
