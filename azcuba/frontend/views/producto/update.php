<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */

$this->title = 'Modificar Producto: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<br><br>
<div class="producto-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<br><br>
<br><br>
