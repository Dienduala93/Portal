<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'UBPC';
$this->params['breadcrumbs'][] = ['label' => 'UBPC', 'url' => ['ubpc']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-ubpc', [
        'model' => $model,
    ]) ?>

</div>
