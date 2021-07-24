<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<br>
<div class="producto-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (isset($model->imagen)) { ?>
        <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '30%', 'height' => '200px']) ?>
    <?php } ?>

    <br><br><br><br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'nombre',
          //  'imagen',
            'descripcion:ntext',
        ],
    ]) ?>
    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tienes la certeza que quieres eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
<br><br>
<br><br>
<br><br>
