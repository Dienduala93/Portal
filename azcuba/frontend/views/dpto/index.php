<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DptoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departamento Económico';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dpto-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dpto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
         //   'nombre',
            'mision:ntext',
            'vision:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<br><br>
<br>