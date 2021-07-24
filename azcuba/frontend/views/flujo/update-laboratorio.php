<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Laboratório ' ;
$this->params['breadcrumbs'][] = ['label' => 'Flujos Laboratório', 'url' => ['laboratorio']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<br>
<p>
    <?= Html::a('Crear nuevo ', ['create-laboratorio-targeta'], ['class' => 'btn btn-success']) ?>
</p>
<div class="flujo-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-laboratorio', [
        'model' => $model,
    ]) ?>

</div>
