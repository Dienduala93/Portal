<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */

$this->title = 'Crear Servicio';
//$this->params['breadcrumbs'][] = ['label' => 'Servicio', 'url' => ['servicio']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-servicio', [
        'model' => $model,
    ]) ?>

</div>

