<?php
/* @var $this yii\web\View */
?>
<nav class="navbar navbar-inverse" role="banner" style="margin-bottom: 0; border-radius: 0">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= Yii::$app->request->baseUrl ?>/home"><img class="col-sm-9" src="<?= Yii::$app->request->baseUrl ?>/theme/images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= Yii::$app->request->baseUrl ?>/home">Home</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/about">About Us</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/clients">Our Clients</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/contact">Contact Us</a></li>                                            
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?= Yii::$app->request->baseUrl ?>/theme/images/mobil_tankfarm.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-8">
                            <div style=" text-align: center" class="carousel-content">
                                <h1 style=" color: #E24F43" class="animation animated-item-1">Techno-Excel Engineering And Inspection Services</h1>
                                <h2 class="animation animated-item-2">...Oil and Gas Equipment Inspection, Testing and Calibration.</h2>

                            </div>
                            <div style="text-align: center">
                                <a class="btn-slide animation animated-item-3" href="<?= Yii::$app->request->baseUrl ?>/home/about">More about Us</a>
                            </div>
                        </div>

                        <div class="col-sm-4 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img style=" border-radius: 5%" src="<?= Yii::$app->request->baseUrl ?>/theme/images/workers_pipeline.jpg" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?= Yii::$app->request->baseUrl ?>/theme/images/workers_at_mobil.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-8">
                            <div class="carousel-content">
                                <h1 style="color: #0a0" class="animation animated-item-1">We are to serve you!</h1>
                                <h2 style="color: #0a0" class="animation animated-item-2">Try us and see....</h2>
                                <div style="text-align: center">
                                    <a class="btn-slide animation animated-item-3" href="<?= Yii::$app->request->baseUrl ?>/home/contact">Contact Us</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img style=" border-radius: 5%" src="<?= Yii::$app->request->baseUrl ?>/theme/images/workers_at_mobil3.jpg" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?= Yii::$app->request->baseUrl ?>/theme/images/hortonsphere.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-8">
                            <div class="carousel-content">
                                <h1 style="color: blue" class="animation animated-item-1">Calibration and Non-Destructive Testing:</h1>
                                <h2 style="color: blue" class="animation animated-item-2">Are parts of our specialities....</h2>
                                <div style="text-align: center">
                                    <a class="btn-slide animation animated-item-3" href="<?= Yii::$app->request->baseUrl ?>/home/contact">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img style=" border-radius: 5%" src="<?= Yii::$app->request->baseUrl ?>/theme/images/workers_at_mobil2.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Specialities</h2>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #9e9; height: 10em">
                        <i class="fa fa-tint"></i>
                        <h3>Truck Tankers:</h3>
                        <h4 style="margin-top: 0">Calibration of truck tankers of various petroleum products.</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="  feature-wrap" style="background: #DDD; height: 10em">
                        <i class="fa fa-industry"></i>
                        <h3>Storage Tanks:</h3>
                        <h4 style="margin-top: 0">Calibration of Horizontal, Spherical, Underground and Cuboid tanks.</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #00b3ee; height: 10em">
                        <i class="fa fa-thermometer"></i>
                        <h3>Measuring Instruments:</h3>
                        <h4 style="margin-top: 0">Calibration of Flow meters, Provers, Pressure Gauges, Thermometers, etc</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #ffc0cb; height: 10em">
                        <i class="fa fa-superpowers"></i>
                        <h3>Non-Destructive Testing:</h3>
                        <h4 style="margin-top: 0">Ultrasonics, Vacuum Box, X-Ray, Dye/Oil Penetrant, pressure testing, etc.</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #dfd; height: 10em">
                        <i class="fa fa-users"></i>
                        <h3>Consultancy Services:</h3>
                        <h4 style="margin-top: 0">Major Inspection of Oil and Gas Storage Tanks, Refineries and Gas Plants, etc.</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #b2dba1; height: 10em">
                        <i class="fa fa-wrench"></i>
                        <h3>Construction Management:</h3>
                        <h4 style="margin-top: 0">Single to integrated tank farm construction, supervision and management.</h4>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #b9def0; height: 10em">
                        <i class="fa fa-sun-o"></i>
                        <h3>Tank Internal Cleaning:</h3>
                        <h4>Venting, De-Sludging and Internal Cleaning of oil and gas storage tanks.</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #FFC800; height: 10em">
                        <i class="fa fa-battery-full"></i>
                        <h3>Cathodic Protection:</h3>
                        <h4>Pipelines and storage tanks cathodic protection and corrosion control.</h4>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap" style="background: #FFE0E1; height: 10em">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h3>Sand-blasting and Painting:</h3>
                        <h4>Oil and gas tanks sand-blasting and painting</h4>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->









