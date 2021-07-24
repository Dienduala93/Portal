<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tipo */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Tipos AA', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tipo-view">



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'nombre',
        ],
    ]) ?>
    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
