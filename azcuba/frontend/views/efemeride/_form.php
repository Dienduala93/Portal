<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Efemeride */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="efemeride-form container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

  <!--  <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'fecha')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'foto')->fileInput(['accept' => 'image/*','required'=>'true']) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
