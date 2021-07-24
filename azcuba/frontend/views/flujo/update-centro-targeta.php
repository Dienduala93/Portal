<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Centro de Limpieza' ;
//$this->params['breadcrumbs'][] = ['label' => 'Flujos Centro de Limpieza', 'url' => ['centro']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="flujo-update">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-centro', [
        'model' => $model,
    ]) ?>

</div>
