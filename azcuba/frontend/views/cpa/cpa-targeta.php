<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CPA';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="withdraw-list">


    <?= ListView::widget([

        'dataProvider' => $dataProvider,
        'itemView' => 'view-cpa',
        //'layout' => '<div class="row">{items}</div>{pager}',
    ]); ?>

</div>


</div>