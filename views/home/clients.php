<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
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
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home">Home</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/about">About Us</a></li>
                <li class="active"><a href="<?= Yii::$app->request->baseUrl ?>/home/clients">Our Clients</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/contact">Contact Us</a></li>                                            
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->
<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown">
                <div class="skill">
                    <h1 style=" color: #E24F43">Why People like us?</h1>
                    <p><strong>Techno-Excel</strong> has a proven track record of responsive, cost effective and 
                        professional project implementations customised to meet with diversity 
                        of needs in oil and gas industries.</p>

                    <div class="progress-wrap">
                        <h3>Our Dedication</h3>
                        <div class="progress">
                            <div class="progress-bar color1" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Our Responsive Approach</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Our Cost Effectiveness</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Our Accuracy</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%">99%</div>
                        </div>
                    </div>
                </div>

            </div><!--/.col-sm-6-->

            <div class="col-sm-6 wow fadeInDown">
                <div class="accordion">
                    <h2>&nbsp;</h2>
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading active">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                        Resilience
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/images/at_mobil.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>Techno-Excel crew:</h4>
                                            <p>During pipeline pressure testing at Mobil Oil Plc, Apapa Complex, Lagos.</p>  
                                            <strong>We are resilient in all activities.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                        Commitment
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img style="width: 85%" class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/images/truckcaliboando1.gif">
                                        </div>
                                        <div class="media-body">
                                            <h4>Techno-Excel crew:</h4>
                                            <p>During a truck tanker calibration exercise at Oando Plc.,
                                                Terminal2, Apapa, Lagos (now OVH Plc).</p> <strong>We are committed 24/7 to all our project activities.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                        Focus
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/images/levelling.gif">
                                        </div>
                                        <div class="media-body">
                                            <h4>Techno-Excel crew:</h4>
                                            <p>Carrying out floor survey during a geometric calibration of a vertical oil storage tank
                                                at Rahamaniyya Oil and Gas Limited, Apapa, Lagos.</p>
                                            <strong>We don't lose focus when it comes to projects execution.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                        Professionalism
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/images/ezekiel_hortonsphere.gif">
                                        </div>
                                        <div class="media-body">
                                            <h4>Techno-Excel crew:</h4>
                                            <p>During a non-destructive testing of a Hortonsphere at 
                                                African Petroleum Installation, Apapa, Lagos. Now Forte Oil Plc.</p>
                                            <p>
                                                <strong>We tackle all projects with utmost professionalism.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/#accordion1-->
                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->
<div class="home-about">  
    <div class="home-about-image" style="padding-top: 3%; padding-left: 2%">
        <img width="100%" class="info-images" src="<?= Yii::$app->request->baseUrl ?>/images/our-clients.jpg">
    </div>
    <div class="clients-logo home-about-info">  
        <section id="partner">
            <div class="container" style=" width: 100%">
                <div class="center wow fadeInDown">
                    <h2>Few of Our Clients</h2>
                </div>    

                <div class="partners">
                    <ul>
                        <div class="row">
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/forte-oil.png" alt="Forte Oil Logo" width="110" height="70" />   </a></li>             
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/conoil-logo.jpg" width="120" height="70" alt="Conoil Plc" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/ipiclient.gif" width="200" height="40"  alt="IPI" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/ovh.png" width="120" height="70" alt="OVH Plc" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/mobil-oil.jpg" width="120" height="70"  alt="Mobil Oil Logo " /></a></li>
                        </div>  
                        <div class="row" style="margin: 20px">
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/sykesclient.gif" width="200" height="40" alt="Sykes Ltd" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/integrated_logo.png" width="80" height="70" alt="Integrated Oil and Gas" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/saharaclient.gif" width="120" height="70" alt="Sahara Group" />      </a></li> 
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/eterna-logo.jpg" width="120" height="70" alt="Eterna Logo" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/cakasaclient.gif" width="80" height="70" alt="Cakasa (Nig) Company Ltd" /></a></li>
                        </div>
                        <div class="row" style="margin: 20px">
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/swiftlogo1.png" width="200" height="60" alt="Swift Oil" /></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/heyden.jpg" width="120" height="70" alt="Sykes Energiprojekts Ltd"></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="" width="120" height="70" alt=""></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/boc.png" width="120" height="70" alt="BOC Gases"></a></li>
                            <li class="col-sm-1"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?= Yii::$app->request->baseUrl ?>/images/clients_image/client-knowledge.jpg" width="200" height="40" alt="ClientKnowledge" /></a></li>
                        </div>
                    </ul>
                </div>        
            </div><!--/.container-->
        </section><!--/#partner-->

    </div> 
</div>