<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Generación de Vapor ' ;
$this->params['breadcrumbs'][] = ['label' => 'Flujos Generación de Vapor', 'url' => ['vapor']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="flujo-update container container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-vapor', [
        'model' => $model,
    ]) ?>

</div>
