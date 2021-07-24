<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Efemeride */

$this->title = $model->titulo;
//$this->params['breadcrumbs'][] = ['label' => 'Efemérides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="efemeride-view container">
    <p>
        <?= ((Yii::$app->user->id===1) ? Html::a('Crear nuevo ', ['create'], ['class' => 'btn btn-success']) : null);  ?>
    </p>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-left"><?= Html::encode($this->title) ?></h1>
            <?php if (isset($model->imagen)) { ?>
                <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '25%', 'height' => '200px']) ?>
            <?php } ?>
            <p style="margin-top: 10px">
                <?= $model->descripcion ?>
            </p>

            <div class="row">
                <div class="col-xs-6">
                    <?= ((Yii::$app->user->id===1) ? Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']): null);  ?>
                    <?= ((Yii::$app->user->id===1) ? Html::a('Eliminar', ['delete-efeme', 'id' => $model->id],['class' => 'btn btn-danger'], [
                        'data' => [
                            'confirm' => Yii::t('yii', 'Tienes la certeza que quieres eliminar este elemento?'),
                            'method' => 'post',
                        ],
                    ]): null);  ?>
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
