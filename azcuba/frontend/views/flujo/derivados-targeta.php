<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlujoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Derivados';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="flujo-index container">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="withdraw-list">
        <p>
            <?= ((Yii::$app->user->id===1) ? Html::a('Crear nuevo ', ['create-derivados'], ['class' => 'btn btn-success']) : null);  ?>
        </p>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => 'view-derivados',
            'layout' => '<div class="row">{items}</div>{pager}',
        ]); ?>

    </div>


</div>
