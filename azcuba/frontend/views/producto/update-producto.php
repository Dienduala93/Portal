<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $data Array */

$this->title = 'Modificar Producto';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['producto']];
//$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['producto', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<br><br>
<div class="areaagricola-update container">
    <p>
        <?= Html::a('Crear nuevo ', ['create-producto-targeta'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= $this->render('_form-producto', [
        'model' => $model,

    ]) ?>

</div>
