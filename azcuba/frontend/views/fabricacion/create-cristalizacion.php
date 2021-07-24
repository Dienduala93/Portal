<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

$this->title = 'Crear Fabricación';
$this->params['breadcrumbs'][] = ['label' => 'Fabricación', 'url' => ['cristalizacion']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fabricacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-cristalizacion', [
        'model' => $model,
    ]) ?>

</div>
