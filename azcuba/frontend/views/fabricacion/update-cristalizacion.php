<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

$this->title = 'Modificar Fabricación ' ;
$this->params['breadcrumbs'][] = ['label' => 'Cristalización', 'url' => ['cristalizacion']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<p>
    <?= Html::a('Crear nuevo ', ['create-cristalizacion-targeta'], ['class' => 'btn btn-success']) ?>
</p>
<div class="fabricacion-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-cristalizacion', [
        'model' => $model,
    ]) ?>

</div>
