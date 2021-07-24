<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Basculador y Molinos ' ;
$this->params['breadcrumbs'][] = ['label' => 'Flujos Basculador y Molinos', 'url' => ['basculador']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="flujo-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-basculador', [
        'model' => $model,
    ]) ?>

</div>
