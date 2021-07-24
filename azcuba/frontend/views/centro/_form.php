<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Centro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="centro-form container">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'mision')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vision')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Gurdar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
