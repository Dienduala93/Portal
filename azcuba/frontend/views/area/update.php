<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Area */

$this->title = 'Modificar Área: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Áreas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="area-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
