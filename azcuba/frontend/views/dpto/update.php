<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dpto */

$this->title = 'Modificar Departamento Económico' ;
$this->params['breadcrumbs'][] = ['label' => 'Departamento Económico', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="dpto-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<br><br>
<br>