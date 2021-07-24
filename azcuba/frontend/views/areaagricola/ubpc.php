<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AreaagricolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Áreas Agricolas Ubpc';
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="areaagricola-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="withdraw-list">




    </div>

    <p>
        <?= Html::a('Crear nuevo ', ['create-ubpc'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'nombre',
//            'imagen',
//            'descripcion:ntext',
            [
                'attribute' => 'tipo_id',
                'value' => 'tipo.nombre'
            ],

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view-ubpc} {update-ubpc} {delete-ubpc}',

                'buttons' => [
                    'delete' => function ($url, $model, $key){
                       // return Html::a('<span title="ver" class="glyphicon glyphicon-eye-open">',$url);
                        return (($key===1) ? Html::a('<span title="delete-ubpc" class="glyphicon glyphicon-check"> </span>',
                            Url::to(['/admin/assignment/view', 'id' => $key])
                        ) : null);
                    },
                    'update-ubpc' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-pencil">',$url);
                    },

        ],
            ],
        ],
    ]); ?>


</div>
