<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Basculador y Molinos';
$this->params['breadcrumbs'][] = ['label' => 'Flujos Basculador', 'url' => ['basculador']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<p>
    <?= Html::a('Crear nuevo ', ['create-basculador-targeta'], ['class' => 'btn btn-success']) ?>
</p>
<div class="flujo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-basculador', [
        'model' => $model,
    ]) ?>

</div>
