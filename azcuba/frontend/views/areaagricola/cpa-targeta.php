<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cpa';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="container"><?= Html::encode($this->title) ?></h1>
<div class="withdraw-list container">
    <p>
        <?= ((Yii::$app->user->id===1) ? Html::a('Crear nuevo ', ['create-cpa'], ['class' => 'btn btn-success']) : null);  ?>
    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => 'view-cpa',
        'layout' => '<div class="row">{items}</div>{pager}',
    ]); ?>

</div>


</div>