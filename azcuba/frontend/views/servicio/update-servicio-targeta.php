<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Servicio */

$this->title = 'Modificar Servicio';
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['servicio']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Modificar';
?>
<br><br>
<div class="servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-servicio', [
        'model' => $model,
    ]) ?>

</div>
<br><br>
<br><br>
