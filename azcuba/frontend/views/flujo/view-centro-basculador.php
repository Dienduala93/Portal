
<?php

use yii\helpers\Html;

/* @var $model common\models\Withdraw */

$time = (time() - $model->created_at > Yii::$app->params['relative']) ?
    Yii::$app->formatter->asDate($model->created_at) : Yii::$app->formatter->asRelativeTime($model->created_at);
$panel = 'panel-default';
/*if($model->status_id == 2){
    $panel = 'panel-warning';
}
if($model->status_id == 3){
    $panel = 'panel-success';
}*/

?>

<div class="">
    <div class="panel panel-default">
        <div class="panel-body">

            <h2 class="text-left"><strong> <?= $model->nombre  ?></strong></h2>
            <hr>
            <div class="float-left">
                <?php echo Html::img('@web/'.$model->ruta.$model->imagen, ['alt' => 'Imagen', 'width' => '55%', 'height' => '100px' , 'class' =>'ima']) ?>
            </div>
            <p class=""><?= $model->descripcion ?></p>


        </div>

    </div>

</div>

