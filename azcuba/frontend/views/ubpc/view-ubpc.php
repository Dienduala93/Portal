<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */

$this->title = 'Misión y visión ubpc';
//$this->params['breadcrumbs'][] = ['label' => 'UBPC', 'url' => ['ubpc']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<br><br>
<div class="areaagricola-view container" >

    <!-- <h1 class="text-left">Html::encode($this->title) ?></h1>-->


    <h1 class="container text-center" style="color: #28a745">Misión</h1>

    <p class="container text-center" style="margin-bottom: 50px">
        <?= $model->mision ?>
    </p>
    <h1 class="container text-center" style="color: #28a745" >Visión</h1>
    <p class="container text-center" style="margin-bottom: 50px">
        <?= $model->vision ?>
    </p>

    <div class="row">
        <div class="col-md-6 container text-center" style="margin-bottom: 10px;"

        <?= ((Yii::$app->user->id===1) ? Html::a('Modificar', ['update-ubpc', 'id' => $model->id], ['class' => 'btn btn-primary']): null);  ?>

    </div>

</div>

</div>
<br><br>