<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Modificar Misión y Visión';
$this->params['breadcrumbs'][] = ['label' => 'UBPC', 'url' => ['ubpc']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>

<div class="centro-update container" style="margin-top: 20px">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-ubpc', [
        'model' => $model,
    ]) ?>

</div>
