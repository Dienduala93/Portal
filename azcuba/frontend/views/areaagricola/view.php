<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Áreas Agrícolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="areaagricola-view">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left"><?= Html::encode($this->title) ?></h1>
            <?php if (isset($model->imagen)) { ?>
                <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '20%', 'height' => '200px']) ?>
            <?php } ?>
            <p style="margin-top: 10px">
                <?= $model->descripcion ?>
            </p>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => '¿Está seguro de eliminar este elemento?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
                <div class="col-xs-6">
                    <p class="text-right">
                        <time class="timeago badge">
                            <?= (time()-$model->created_at > Yii::$app->params['relative']) ?
                                Yii::$app->formatter->asDate($model->updated_at) : Yii::$app->formatter->asRelativeTime($model->updated_at); ?>
                        </time>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
