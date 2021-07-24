<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $array Array */

$this->title = Yii::$app->name;
$asset = frontend\assets\AppAsset::register($this);
$baseUrl  = $asset->baseUrl;
?>



<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Nuestro Portafolio</h2>

        </div>

        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">

                            <!--<span>Aliquam id urna imperdiet libero mollis hendrerit</span>-->
                        </div>
                    </div>
                    <p class="col-md-12" >
                        <?= ((Yii::$app->user->id === 1) ? Html::a('Crear nuevo porfolio ', ['efemeride/create'], ['class' => 'btn btn-success']) : null);  ?>
                    </p>

                    <div class="row">
                        <?php

                        foreach ($array as $obj) { ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="pane panel-success p-3 mb-2 text-white">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-2 ">
                                                <i class="glyphicon glyphicon-calendar"></i>
                                            </div>
                                            <div class="col-xs-10 text-center ml-5">
                                                <div><?php echo Html::img('@web/uploads/ef/' . $obj['imagen'], ['alt' => 'Imagen', 'width' => '100%', 'height' => '200px']) ?></div>
                                            </div>

                                            <div class="col-xs-10 text-center mt-2 ml-5">
                                                <div><?= $obj['fecha'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?= Html::a(
                                        '<div class="panel-footer"><span class="pull-left">' .
                                        StringHelper::truncate($obj['titulo'], 28) . '</span><span class="pull-right">
                        <i class="glyphicon glyphicon-circle-arrow-right"></i></span><div class="clearfix"></div></div>',
                                        ['efemeride/view', 'id' => $obj['id']]
                                    ) ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
</section><!-- End Services Section -->


<!-- ======= Quien Somos ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>Quiénes Somos</h2>

            <?php echo (Yii::$app->config->qs); ?>
        </div>

    </div>

    </div>
</section><!-- End About Us Section -->






<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3>UEB<br>Cristino Naranjo</h3>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <p class="cta-btn align-middle" href="#">Azcuba</p>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->
<br><br><br>
<br><br><br>
<br><br>

</main><!-- End #main -->