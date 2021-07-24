<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Centro';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="withdraw-list">


    <?= ListView::widget([

        'dataProvider' => $dataProvider,
        'itemView' => 'view-centro',
        //'layout' => '<div class="row">{items}</div>{pager}',
    ]); ?>

</div>


</div>