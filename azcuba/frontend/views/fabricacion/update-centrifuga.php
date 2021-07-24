<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

$this->title = 'Modificar Centrífuga ' ;
$this->params['breadcrumbs'][] = ['label' => 'Centrífuga', 'url' => ['centrifuga']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fabricacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-centrifuga', [
        'model' => $model,
    ]) ?>

</div>
