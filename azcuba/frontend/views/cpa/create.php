<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cpa */

$this->title = 'Create Cpa';
$this->params['breadcrumbs'][] = ['label' => 'Cpas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cpa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
