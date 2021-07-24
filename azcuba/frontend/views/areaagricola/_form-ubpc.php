<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Areaagricola */
/* @var $form yii\widgets\ActiveForm */
/* @var $data Array */
?>

<div class="areaagricola-form container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!-- $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'foto')->fileInput(['accept' => 'image/*','required'=>'true']) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6, 'maxlength' => 285]) ?>

    <?= $form->field($model, 'tipo_id')->textInput(['value'=>1,'hidden'=>'true'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
