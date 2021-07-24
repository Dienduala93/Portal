<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Efemeride */

$this->title = 'Crear nuevo';
$this->params['breadcrumbs'][] = ['label' => 'Efemérides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="efemeride-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
