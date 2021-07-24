<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar Sesión';
$this->params['breadcrumbs'][] = $this->title;
?>
<br><br>

<div class="site-login container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor llena los seguientes campos para iniciar la sesión:</p>

    <div class="row">
        <div class="col-lg-5 logincenter">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    Si te olvidaste de la contraseña puedes <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    necesitar nuevoa verificación de correo? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<br><br>
<br><br>