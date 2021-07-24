<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FabricacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Centrífuga';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-index">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="withdraw-list container">
        <p>
            <?= ((Yii::$app->user->id===1) ? Html::a('Crear nuevo ', ['create-centrifuga'], ['class' => 'btn btn-success']) : null);  ?>
        </p>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => 'view-centrifuga',
            'layout' => '<div class="row">{items}</div>{pager}',
        ]); ?>

    </div>


</div>
