<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Visión';
$this->params['breadcrumbs'][] = $this->title;
?>
<br><br><br>
<div class="site-vision text-center">
    <h1 style="color: #28a745"><?= Html::encode($this->title) ?></h1>

    <p class=" container"><?= Html::encode($text) ?></p>

</div>
<div class="row">
    <div class="col-md-6 container text-center" style="margin-top: 40px">

        <?= ((Yii::$app->user->id===1) ?
            Html::a('Modificar', ['config/index'],['class' => 'btn btn-primary']): null);
        ?>

    </div>

</div>
<br><br><br><br><br>
<br><br><br><br><br>