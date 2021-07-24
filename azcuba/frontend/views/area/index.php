<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AreaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Áreas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="area-index">

    <p>
        <?= Html::a('Crear nuevo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'nombre',
//            'descripcion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
