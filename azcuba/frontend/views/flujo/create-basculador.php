<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Flujo Basculador y Molinos';
$this->params['breadcrumbs'][] = ['label' => 'Flujos Basculador', 'url' => ['basculador']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-basculador', [
        'model' => $model,
    ]) ?>

</div>
