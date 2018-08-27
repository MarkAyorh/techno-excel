<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

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
                        <a href="<?= Yii::$app->request->baseUrl ?>/home"><img class="col-sm-9" src="<?=Yii::$app->request->baseUrl ?>/theme/images/logo.png" alt="logo"></a>
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

<section id="conatcat-info">
    <div class="container">
        <div class="center">        
            <h2>Message Sent.</h2>                
        </div> 
        <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">                   

            <div class="alert alert-success">
                <h2>
                    Thank you for contacting us. We will respond to you as soon as possible.
                </h2>
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

        </div>

    </div><!--/.container-->
</section><!--/#contact-page-->




