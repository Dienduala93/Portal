<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Flujo Generación de Vapor';
$this->params['breadcrumbs'][] = ['label' => 'Flujos Generación de Vapor', 'url' => ['vapor']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-vapor', [
        'model' => $model,
    ]) ?>

</div>
