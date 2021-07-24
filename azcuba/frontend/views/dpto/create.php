<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dpto */

$this->title = 'Create Departamento Económico';
$this->params['breadcrumbs'][] = ['label' => 'Departamento Económico', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dpto-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<br><br>
<br>