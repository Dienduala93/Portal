<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Derivados ';
$this->params['breadcrumbs'][] = ['label' => 'Flujos Derivados', 'url' => ['derivados']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<p>
    <?= Html::a('Crear nuevo ', ['create-derivados-targeta'], ['class' => 'btn btn-success']) ?>
</p>
<div class="flujo-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-derivados', [
        'model' => $model,
    ]) ?>

</div>
