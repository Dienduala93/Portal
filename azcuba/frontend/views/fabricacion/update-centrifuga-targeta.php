<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

$this->title = 'Modificar Fabricación ' ;
$this->params['breadcrumbs'][] = ['label' => 'Fabricación', 'url' => ['centrifuga']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="fabricacion-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-centrifuga', [
        'model' => $model,
    ]) ?>

</div>
