<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

$this->title = 'Crear Planta Eléctrica';
$this->params['breadcrumbs'][] = ['label' => 'Planta Eléctrica', 'url' => ['planta']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-planta', [
        'model' => $model,
    ]) ?>

</div>
