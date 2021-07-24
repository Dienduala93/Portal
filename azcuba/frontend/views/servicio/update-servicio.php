<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $data Array */

$this->title = 'Modificar Servicios';
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['servicio']];
//$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<br><br>
<div class="areaagricola-update container">
    <p>
        <?= Html::a('Crear nuevo ', ['create-servicio-targeta'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= $this->render('_form-servicio', [
        'model' => $model,

    ]) ?>

</div>
