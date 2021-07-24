<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Laboratorio';
$this->params['breadcrumbs'][] = ['label' => 'Laboratorio', 'url' => ['laboratorio']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-laboratorio', [
        'model' => $model,
    ]) ?>

</div>
