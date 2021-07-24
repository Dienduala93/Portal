<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Crear Centro';
$this->params['breadcrumbs'][] = ['label' => 'Centros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centro-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
