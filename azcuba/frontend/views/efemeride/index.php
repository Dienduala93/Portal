<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EfemerideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Efemérides';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>

<div class="efemeride-index container">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
   //         'titulo',
            'fecha',
//            'imagen',
          'descripcion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<br><br>
<br>