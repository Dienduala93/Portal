<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlujoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planta Eléctrica';
$this->params['breadcrumbs'][] = $this->title;
?>
<br><br>
<div class="flujo-index container">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="withdraw-list">
        <p>
            <?= ((Yii::$app->user->id===1) ? Html::a('Crear nuevo ', ['create-planta'], ['class' => 'btn btn-success']) : null);  ?>
        </p>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => 'view-planta',
            'layout' => '<div class="row">{items}</div>{pager}',
        ]); ?>

    </div>


</div>
<br><br>