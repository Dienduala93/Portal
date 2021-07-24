<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Modificar Misión y Visión';
$this->params['breadcrumbs'][] = ['label' => 'CPA', 'url' => ['cpa']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['cpa', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>

<div class="centro-update container" style="margin-top: 20px">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-cpa', [
        'model' => $model,
    ]) ?>

</div>
