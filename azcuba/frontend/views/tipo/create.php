<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tipo */

$this->title = 'Crear Tipo de Áreas Agrícolas';
$this->params['breadcrumbs'][] = ['label' => 'Tipos AA', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
