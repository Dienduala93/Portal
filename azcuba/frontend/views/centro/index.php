<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CentroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Centro de información';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="centro-index container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= ((Yii::$app->user->id===1) ? Html::a('Crear nuevo ', ['create'], ['class' => 'btn btn-success']) : null);  ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'nombre',
            'mision:ntext',
            'vision:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<br><br>
<br><br>
<br>