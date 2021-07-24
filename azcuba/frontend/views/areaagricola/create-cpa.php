<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $data Array */

$this->title = 'Crear nuevo Cpa';
$this->params['breadcrumbs'][] = ['label' => 'Áreas Agrícolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areaagricola-create">

    <?= $this->render('_form-cpa', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
