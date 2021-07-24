
<?php

use yii\helpers\Html;

/* @var $model common\models\Withdraw */

$time = (time() - $model->mision > Yii::$app->params['relative']) ?
    Yii::$app->formatter->asDate($model->mision) : Yii::$app->formatter->asRelativeTime($model->created_at);
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

            <p class=""><?= $model->mision ?></p>


        </div>

    </div>

</div>

