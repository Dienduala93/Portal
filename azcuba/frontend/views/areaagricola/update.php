<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $data Array */

$this->title = 'Modificar Área Agrícola: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Áreas Agrícolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="areaagricola-update">

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
