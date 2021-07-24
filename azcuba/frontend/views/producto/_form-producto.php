<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!-- $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'foto')->fileInput(['accept' => 'image/*','required'=>'true']) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6, 'maxlength' => 285]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
