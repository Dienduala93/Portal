<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Fabricacion */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fabricacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fabricacion-view container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (isset($model->imagen)) { ?>
        <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '40%', 'height' => '200px']) ?>
    <?php } ?>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         //   'id',
            'nombre',
            'imagen',
            'descripcion:ntext',
            'tipoFabricacion',
        ],
    ]) ?>

</div>
