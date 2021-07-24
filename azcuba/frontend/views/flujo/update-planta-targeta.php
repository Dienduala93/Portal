<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Modificar Flujo Planta Eléctrica ' ;
$this->params['breadcrumbs'][] = ['label' => 'Flujo Planta Eléctrica', 'url' => ['planta']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="flujo-update container">

    <h1 class="container"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-planta', [
        'model' => $model,
    ]) ?>

</div>
