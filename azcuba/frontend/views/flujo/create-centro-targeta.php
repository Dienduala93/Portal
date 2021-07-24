<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Centro de Limpieza';
//$this->params['breadcrumbs'][] = ['label' => 'Centro de Limpieza', 'url' => ['centro']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-centro', [
        'model' => $model,
    ]) ?>

</div>
