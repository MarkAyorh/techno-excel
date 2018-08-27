<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
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
                <li><a href="<?= Yii::$app->request->baseUrl ?>/home/clients">Our Clients</a></li>
                <li class="active"><a href="<?= Yii::$app->request->baseUrl ?>/home/contact">Contact Us</a></li>                                            
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->


<section id="content">
    <div style="width: 100%"> 
        <div style="width: 50%; padding-left: 3%">
            <h1 style=" color: #E24F43">How to Reach Us?</h1>
            <p class="lead">If you have business enquiries or questions, please fill out the form below to contact us.
                You may also reach us on email: <font style="color: blue">techno-excel@hotmail.com. </font> Thank you.</p>
        </div>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7926.777838896122!2d3.3472576919439296!3d6.598492985305409!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1503315692385" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class=" contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5 style=" color: #E24F43">Office</h5>
                                    <p>9, Mojidi Street, Off Toyin Street, <br>
                                        Ikeja, Lagos, Nigeria</p>
                                    <p>Phone:+234-8023-5872-61 <br>
                                        Email Address:techno-excel@hotmail.com</p>
                                </address>

                                <address>
                                    <h5 style=" color: #E24F43">Zonal Office</h5>
                                    <p>Ogere Truck Park <br>
                                        Lagos-Ibadan Expressway<br>
                                        Ogun State</p>                                
                                    <p>Phone:+234-7030-0922-11 <br>
                                        Email Address:techno-excel@hotmail.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5 style=" color: #E24F43">Zonal Office</h5>
                                    <p>Mobil/11 Truck Calibration Point <br>
                                        Mobil Oil Nigeria Plc<br>
                                        Apapa Complex, Lagos</p>
                                    <p>Phone:+234-8029-7991-51 <br>
                                        Email Address:techno-excel@hotmail.com</p>
                                </address>

                                <address>
                                    <h5 style=" color: #E24F43">Zonal Office</h5>
                                    <p>OVH Truck Calibration Point <br>
                                        OVH Terminal 1<br>
                                        Apapa, Lagos</p>
                                    <p>Phone:+234-8029-7991-51 <br>
                                        Email Address:techno-excel@hotmail.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->


<div id="partner" class="home-about"> 
        <div class="home-about-image" style="padding: 3%;">
            <img style="width: 100%" src="<?= Yii::$app->request->baseUrl ?>/images/contact-us.jpg">
            </div>
    <div style="padding-top: 0;" class="home-about-info">
        <div style="padding-bottom: 3%">        
                <h2>Drop Your Message</h2>                
            </div> 
            <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Thank you for contacting us. We will respond to you as soon as possible.
                    </div> 
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>

                <?php else: ?>
                    <div style="text-align: left" class="col-sm-6">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'email') ?>
                        <?= $form->field($model, 'subject') ?>
                    </div>
                    <div style="text-align: left" class="col-sm-6">
                        <?= $form->field($model, 'message')->textArea(['rows' => 6]) ?>
                        <?=
                        $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ])
                        ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
<?php endif; ?>



