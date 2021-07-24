<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $data Array */

$this->title = 'Crear ubpc';
$this->params['breadcrumbs'][] = ['label' => 'Ubpc', 'url' => ['ubpc']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areaagricola-create container">

    <?= $this->render('_form-ubpc', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
