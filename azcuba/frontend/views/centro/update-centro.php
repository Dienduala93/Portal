<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Modificar Misión y Visión';
//$this->params['breadcrumbs'][] = ['label' => 'Centro', 'url' => ['centro']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<p>
    <?= Html::a('Crear nuevo ', ['create-centro-targeta'], ['class' => 'btn btn-success']) ?>
</p>
<div class="centro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-centro', [
        'model' => $model,
    ]) ?>

</div>
