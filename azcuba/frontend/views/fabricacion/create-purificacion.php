<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

$this->title = 'Crear Purificación';
$this->params['breadcrumbs'][] = ['label' => 'Fabricación', 'url' => ['purificacion']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fabricacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-purificacion', [
        'model' => $model,
    ]) ?>

</div>
