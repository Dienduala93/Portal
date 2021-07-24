<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $data Array */

$this->title = 'Modificar Área Agrícola Css ';
$this->params['breadcrumbs'][] = ['label' => 'Áreas Agrícolas', 'url' => ['css']];
//$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<br><br>
<div class="areaagricola-update container">
    <p>
        <?= Html::a('Crear nuevo ', ['create-ubpc-targeta'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= $this->render('_form-css', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
