<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Generación de Vapor';
$this->params['breadcrumbs'][] = ['label' => 'Generación de Vapor', 'url' => ['vapor']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br><br>
<div class="flujo-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-vapor', [
        'model' => $model,
    ]) ?>

</div>
