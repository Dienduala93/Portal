<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AreaagricolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Áreas Agricolas Css';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areaagricola-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear nuevo', ['create-css'], ['class' => 'btn btn-success']) ?>
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
                'template' => '{view-css} {update-css} {delete}',

                'buttons' => [
                    'view-css' => function ($url, $model, $key){
                        return Html::a('<span title="ver" class="glyphicon glyphicon-eye-open">',$url);
                    },
                    'update-css' => function ($url, $model, $key){
                        return Html::a('<span title="actualizar" class="glyphicon glyphicon-pencil">',$url);
                    },

                ],
            ],
        ],
    ]); ?>


</div>
