<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
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
                <li class="active"><a href="<?= Yii::$app->request->baseUrl ?>/home/about">About Us</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/clients">Our Clients</a></li>
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/contact">Contact Us</a></li>                                            
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->
<section id="content">
    <div class="container">

        <div class="pull-left" style="margin: 0 auto; width: 50%">
            <h1 style=" color: #E24F43">About us?</h1>
            <h4>
                <p>
                    <strong>Techno-Excel</strong> is an engineering firm established to offer
                    Consultancy and Inspection Services to Government, the Oil and Gas
                    Industries and their affiliates.
                </p>
            </h4>
        </div>

        <div style="margin-top: 5%" class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <div class="tab-wrap"> 
                    <div class="media">
                        
        <div style="background-color: green">
            &nbsp;
        </div>
                        <div class="parrent pull-left">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class=""><a href="#tab1" data-toggle="tab" class="analistic-02">Corporate Philosophy</a></li>
                                <li class="active"><a href="#tab2" data-toggle="tab" class="tehnical">Competence Training</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">HSE Policy</a></li>
                                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Risk Assessment</a></li>
                            </ul>
                        </div>

                        <div class="parrent media-body">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="tab1">
                                    <div class="media">
                                        <!--
                                        <div style="width: 50%" class="pull-left">
                                            <img style="width: 30%" class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/images/techno-excel-logo.jpg">
                                        </div>
                                        -->
                                        
                                        <div class="media-body">
                                            <h2 style=" color: #E24F43">Corporate Philosophy:</h2>
                                            <p>
                                            <ul>
                                                <li>Carrying out projects in safe manner for health and safety of employees.</li>
                                                <li>Follow procedures and Reporting unsafe conditions.</li>
                                                <li>Keeping work places clean (and tidy) and emergency routes un-obstructed.</li>
                                                <li>Be alert to safety and health hazards of equipment, plants and materials.</li>
                                                <li>Understand the significant of environmental effects of work activities to improved performance</li>
                                                <li>Actively participate in establishing measures to improve environmental conservation of work place.</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade active in" id="tab2">
                                    <div class="media">
                                        <!--
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?= Yii::$app->request->baseUrl ?>/images/tab1.png">
                                        </div>
                                        -->
                                        <div class="media-body">
                                            <h2 style=" color: #E24F43">Competence Training</h2>
                                            <p><strong>Techno-Excel</strong> ensures that her employees have required competence to achieve client’s  business needs.  She  is committed to support cost effective development of individuals and teams  in order to meet both business and statutory objectives.

                                                This objective is achieved through:
                                            <ul>
                                                <li>Identifying and or developing competence frameworks. </li>
                                                <li>Setting and monitoring qualitative target for competence improvement.</li>
                                                <li>Reviewing the use and effectiveness of training inputs.</li>
                                                <li>Identification of individual needs and plan for competence improvement.</li></p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3">
                                    <h2 style=" color: #E24F43">Health, Safety and Environmental Policy</h2>
                                    <p>In <strong> Techno-Excel</strong>, activities are conducted  in such a way as to take foremost 
                                        account of the health and safety of client's employees and also of others. She also gives proper regard to the consideration and improvement  
                                        of the environment in which client's business is based.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <h2 style=" color: #E24F43">Risk Assessment</h2>
                                    <p>In order to achieve project success, <strong>Techno-Excel’s</strong>  principal strategy 
                                        is to identify HSE hazards and effects.  And ensure that risks from these hazards 
                                        are either eliminated or reduced to levels which are as low as reasonably 
                                        practicable.  Techno-Excel strives very hard to be at zero safety severity at all times. 
                                    </p>
                                </div>

                            </div> <!--/.tab-content-->  
                        </div> <!--/.media-body--> 
                    </div> <!--/.media-->     
                </div><!--/.tab-wrap-->               
            </div><!--/.col-sm-6-->

            <div class="col-xs-12 col-sm-4 wow fadeInDown">
                <div class="testimonial">
                    <h2 style=" color: #E24F43">Testimonies</h2>
                    <div class="media testimonial-inner">
                        <div style="width: 50%" class="pull-left">
                            <img style="width: 50%" class="img-responsive img-circle" src="<?= Yii::$app->request->baseUrl ?>/theme/images/director.jpg">
                        </div>
                        <div style="margin-left: 0" >
                            <p>I always rely on Techno-Excel's wealth of experience in times of needs. They are good.</p>
                            <span><strong>-John Adeyemi</strong> ...GM, Independent Oil and Gas</span>
                        </div>
                    </div>

                    <div class="media testimonial-inner">
                        <div style="width: 50%" class="pull-left">
                            <img style="width: 50%" class="img-responsive img-circle" src="<?= Yii::$app->request->baseUrl ?>/theme/images/danladi.jpg">
                        </div>
                        <div>
                            <p>Their truck tanker calibration exercise is second to none in Nigeria.</p>
                            <span><strong>-Alhaji E. M. Bako</strong> ...Bembo Oil Transport Ltd</span>
                        </div>
                    </div>

                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->
<section id="partner">
    <div class="home-about">  
        <div style="padding-top: 3%" class="home-about-image">
            <img width="50%" class="info-images" src="<?= Yii::$app->request->baseUrl ?>/images/home-images1.png">
        </div>
        <div class="home-about-info">  
            <section id="partner">
                <div style="padding: 2%" class="media-body wow fadeInDown"">
                    <p align="justify">All<font color="#ffffff"><strong>Techno-Excel</strong></font>'s services are carried out
                        in strict compliance with relevant regulations like <a href="http://www.sononline.org/main/" style="color:#00c">Standard Organisation of Nigeria </a><b>(SON)</b>, <a href="http://www.asme.org/" style="color:#00C">American Society of Mechanical Engineers </a><b>(ASME)<a href="http://www.asme.org/" style="color:#00C"></b> Codes</a>, <a href="http://www.api.org/"
                                                                                                                                                                                                        style="color:#00c">American Petroleum Institute </a><b>(API)</b><a href="http://www.asme.org/" style="color:#00C"> Standards</a>, <a href="http://www.bsigroup.com/en/" style="color:#00c">
                            British Standard Institute </a><b>(BS Standards)</b>, etc.</p>
                    <p align="justify"><font color="#ffffff"><strong>Techno-Excel</strong></font> is licenced in Nigeria by the <b>Department of Petroleum Resources (DPR)</b>, to
                        operate as an oil service company in:<br />
                        &nbsp;&nbsp;&nbsp; <b>- Calibration Services</b> and <br />
                        &nbsp;&nbsp;&nbsp; <b>- Integrity Test Services</b></em></p>
                    <p style="text-align: left">
                        Our project scope:
                    <ul style="color: #fff; text-align: left">

                        <li><span >Calibration Services of Truck Tankers</span> of various
                            petroleum products.
                        </li>
                        <li><span style="color: #fff">Calibration of Storage Tanks</span>,
                            Horizontal, Spherical, Underground, Cuboids, etc.
                        </li>
                        <li><span style="color: #fff">Calibration of Measuring Instruments</span>,
                            Flow meters, Provers, Pressure Gauges, Hydrometers, Thermometers, etc.
                        </li>
                        <li><span style="color: #fff">Non-Destructive Testing (NDT)</span>
                            -Ultrasonics, Pressure Testing, Vacuum Box, X-Ray, Dye and Oil Penetrant, etc.
                        </li>
                        <li><span style="color: #fff">Major Inspection of Oil and Gas Storage Tanks</span>,
                            Refineries and Gas Plants, etc.
                        </li>
                        <li><span style="color: #fff">Supervision and Construction Management </span>
                            of new and old steel plants from single tank installations to integrated plants.
                        </li>
                        <li><span style="color: #fff">Venting, De-Sludging and Internal Cleaning </span>
                            of oil and gas storage tanks.
                        </li>
                        <li><span style="color: #fff">Corrosion Control: </span>
                            Cathodic Protection, Sand-blasting and coating of storage tanks and pipelines.
                        </li>
                        </p>

                </div>
            </section><!--/#partner-->
        </div>
        </div> 

</section>