<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */

$this->title = 'Purificación';
//$this->params['breadcrumbs'][] = ['label' => 'Purificación', 'url' => ['purificacion']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="areaagricola-view container panel panel-default col-md-12">
    <div class="row">
        <div class="col-md-12">
            <!-- <h1 class="text-left"> Html::encode($this->title) ?></h1>-->
            <?php if (isset($model->imagen)) { ?>
                <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '250px', 'height' => '250px','style' => 'margin-top:10px;']) ?>
            <?php } ?>
            <div style="width: 250px;">
                <p class="text-justify" style="margin-top: 10px; height:inherit;">
                    <?= $model->descripcion ?>
                </p>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <?= ((Yii::$app->user->id===1) ? Html::a('Modificar', ['update-purificacion', 'id' => $model->id], ['class' => 'btn btn-primary']) : null);?>
                    <?= ((Yii::$app->user->id===1) ? Html::a('Eliminar', ['delete-purificacion', 'id' => $model->id],[
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => '¿Está seguro de eliminar este elemento?',
                            'method' => 'post',
                        ],
                    ]): null);  ?>
                </div>
              <!--  <div class="col-md-12">
                    <p class="text-right">
                        <time class="timeago badge">
                            <?= (time()-$model->created_at > Yii::$app->params['relative']) ?
                                Yii::$app->formatter->asDate($model->updated_at) : Yii::$app->formatter->asRelativeTime($model->updated_at); ?>
                        </time>
                    </p>
                </div>-->
            </div>
        </div>
    </div>
</div>
