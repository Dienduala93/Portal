<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tipo */

$this->title = 'Modificar Tipo AA: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Tipos AA', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="tipo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
