<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Flujo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flujo-form container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!--  $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'foto')->fileInput(['accept' => 'image/*','required'=>'true']) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6, 'maxlength' => 285]) ?>

    <?= $form->field($model, 'tipoFlujo')->textInput(['value'=>'derivados','hidden'=>'true'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
