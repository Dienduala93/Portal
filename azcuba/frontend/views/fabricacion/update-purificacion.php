<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

$this->title = 'Modificar Fabricación' ;
$this->params['breadcrumbs'][] = ['label' => 'Fabricación', 'url' => ['purificacion']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<p>
    <?= Html::a('Crear nuevo ', ['create-purificacion-targeta'], ['class' => 'btn btn-success']) ?>
</p>
<div class="fabricacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-purificacion', [
        'model' => $model,
    ]) ?>

</div>
