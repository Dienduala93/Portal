<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Crear Departamento Económico';
$this->params['breadcrumbs'][] = ['label' => 'Departamento Económico', 'url' => ['departamento']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-departamenro', [
        'model' => $model,
    ]) ?>

</div>
