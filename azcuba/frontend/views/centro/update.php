<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Modificar Centro de información' ;
$this->params['breadcrumbs'][] = ['label' => 'Centro de información', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="centro-update container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
