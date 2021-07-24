<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Efemeride */

$this->title = 'Modificar Efemeride: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Efemerides', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->titulo, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="efemeride-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
