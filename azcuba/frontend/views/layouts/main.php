<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">

            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <!--<a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>-->
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="position-sticky fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto">
                <?= Html::a(Html::img($baseUrl."/imagenes/1c.png", ['height'=>'50']),
                    ['site/index'], ['class' => 'navbar-brand']) ?>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="drop-down"><a href="">Inicio</a>
                        <ul>
                            <li><?= Html::a('Misión',
                                    ['site/mision'], ['class' => 'dropdown-item']) ?></li>
                            <li><?= Html::a('Visión',
                                    ['site/vision'], ['class' => 'dropdown-item']) ?></li>

                            <li><?= Html::a('Quiénes somos',
                                    ['site/qs'], ['class' => 'dropdown-item']) ?></li>
                            <li><?= Html::a('Consejo de Dirección',
                                    ['site/cdireccion'], ['class' => 'dropdown-item']) ?></li>

                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Área Agrícola</a>
                        <ul>

                            <li class="drop-down"><a href="#">UBPC</a>
                                <ul>
                                    <li>
                                    <li><?= Html::a('UBPC Descripción',
                                            ['areaagricola/ubpc'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Misión y Visión',
                                            ['ubpc/ubpc'], ['class' => 'dropdown-item']) ?></li>
                                </ul>
                            </li>

                            <li class="drop-down"><a href="#">CPA</a>
                                <ul>
                                    <li>
                                    <li><?= Html::a('CPA Descripción',
                                            ['areaagricola/cpa'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Misión y Visión',
                                            ['cpa/cpa'], ['class' => 'dropdown-item']) ?></li>
                                </ul>
                            </li>
                            <li><?= Html::a('CSS',
                                    ['areaagricola/css'], ['class' => 'dropdown-item']) ?></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">F. Productivo</a>
                        <ul>
                            <li><?= Html::a('Centro de Limpieza',
                                    ['flujo/centro'], ['class' => 'dropdown-item']) ?></li>

                            <li><?= Html::a('Basculador y Molinos',
                                    ['flujo/basculador'], ['class' => 'dropdown-item']) ?></li>
                            <li><?= Html::a('Generación de Vapor',
                                    ['flujo/vapor'], ['class' => 'dropdown-item']) ?></li>
                            <li><?= Html::a('Planta Eléctrica',
                                    ['flujo/planta'], ['class' => 'dropdown-item']) ?></li>
                            <li class="drop-down"><a href="">Fabricación</a>
                                <ul>
                                    <li><?= Html::a('Purificación',
                                            ['fabricacion/purificacion'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Cristalización',
                                            ['fabricacion/cristalizacion'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Centrífuga',
                                            ['fabricacion/centrifuga'], ['class' => 'dropdown-item']) ?></li>

                                </ul>
                            </li>
                            <li><?= Html::a('Derivados',
                                    ['flujo/derivados'], ['class' => 'dropdown-item']) ?></li>
                            <li><?= Html::a('Laboratorio',
                                    ['flujo/laboratorio'], ['class' => 'dropdown-item']) ?></li>

                        </ul>
                    </li>

                    <li><?= Html::a('C.Información</strong>',['centro/centro']) ?></a></li>
                    <li class="drop-down"><a href="">D. Económico</a>
                        <ul>
                            <li><?= Html::a('Misión y Visión',
                                    ['dpto/departamento'], ['class' => 'dropdown-item']) ?></li>
                            <li class="drop-down"><a href="#">Comercialización</a>
                                <ul>
                                    <li>
                                        <?= Html::a('Producto',
                                            ['producto/producto'], ['class' => 'dropdown-item']) ?></li>
                                    <li><?= Html::a('Servicio',
                                            ['servicio/servicio'], ['class' => 'dropdown-item']) ?></li>
                                </ul>
                            </li>

                        </ul>

                    </li>

                </ul>
            </nav><!-- .nav-menu -->



            <?php if (Yii::$app->user->isGuest) { ?>
                <?= Html::a('<p class="get-started-btn scrollto" >
                            Iniciar Sesión</p>',['/site/login']) ?>
            <?php } else { ?>
                <?php if (Yii::$app->user->id === 1) { ?>

                    <li class="mb-4 ml-3 mr-4">
                        <a <?= Html::a('
                            <H4 style="color: black">Registrarse</H4>',['/site/signup']) ?></a>
                    </li>
                <?php } ?>
                <li class="mb-4 mr-4">
                    <a <?= Html::a('
                            <H4 style="color: black">Cerrar Sesión</H4>',['/site/logout']) ?></a>
                </li>
            <?php } ?>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <?php if(Yii::$app->controller->route === "site/index") {?>
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <div class=" active">
                    <img src="<?php echo $baseUrl ?>/imagenes/sl1.jpg" alt="pandula">
                    <div class="carousel-container">
                        <div class="container text-left mt-5 ml-5">
                            <h2 class="animate__animated animate__fadeInDown">UEB<br> <span>Cristino Naranjo</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- End Hero -->
</head>
<body>


<?php $this->beginBody() ?>
<?php
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    $menuItems[] = ['label' => 'config', 'url' => ['/views/config']];
} else {
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
}
?>

    <div class="mt-5 pt-3">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>




<main id="main">

    <!-- ======= Featured Services Section ======= -->


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Azcuba</h3>
        <p>
            <?php echo (Yii::$app->config->direccion); ?> / <?php echo (Yii::$app->config->email); ?> / <?php echo (Yii::$app->config->telefono); ?>
        </p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>FACIM-Uho</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
            Designed by <a href="#">Casa de softaware,respeitando los derechos de cesión de derechos de autor hacia el departamento de Ingeniería informática</a>
        </div>
    </div>
</footer><!-- End Footer -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
