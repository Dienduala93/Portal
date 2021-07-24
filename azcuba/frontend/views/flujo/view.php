<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Flujos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="flujo-view">

    <?php if (isset($model->imagen)) { ?>
        <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '20%', 'height' => '200px']) ?>
    <?php } ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nombre',
            'imagen',
            'descripcion:ntext',
            'tipoFlujo',
        ],
    ]) ?>

</div>
