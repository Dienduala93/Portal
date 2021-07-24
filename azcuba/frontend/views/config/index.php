<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Config */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Configuración';
$this->params['breadcrumbs'][] = $this->title;
?>
<br><br>
<div class="config-update container">

    <div class="config-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'qs')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'mision')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'vision')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'cdireccion')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>

        </div>


        <?php ActiveForm::end(); ?>

    </div>

</div>
<br><br>
<br><br>