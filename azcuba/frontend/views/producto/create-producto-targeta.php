<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */

$this->title = 'Crear Producto';
//$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['producto']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-producto', [
        'model' => $model,
    ]) ?>

</div>
