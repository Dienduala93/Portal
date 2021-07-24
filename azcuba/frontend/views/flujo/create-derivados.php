<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Flujo Derivados';
$this->params['breadcrumbs'][] = ['label' => 'Flujos Derivados', 'url' => ['derivados']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-derivados', [
        'model' => $model,
    ]) ?>

</div>
