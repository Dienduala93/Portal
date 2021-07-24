<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AreaagricolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Áreas Agricolas';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="areaagricola-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear nuevo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'nombre',
//            'imagen',
//            'descripcion:ntext',
            //[
            //    'attribute' => 'tipo_id',
             //   'value' => 'tipo.nombre'
           // ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
