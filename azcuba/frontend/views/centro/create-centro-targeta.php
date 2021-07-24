<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */

$this->title = 'Create Centro';
$this->params['breadcrumbs'][] = ['label' => 'Centro', 'url' => ['centro']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-centro', [
        'model' => $model,
    ]) ?>

</div>
