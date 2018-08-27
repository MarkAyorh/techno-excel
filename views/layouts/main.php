<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Techno-Excel provides inspection, testing and calibration of tanks, flow meters, truck tankers and other oil and gas engineering services" />
        <meta name="keywords" content="Techno-Excel, inspection services, test, integrity, calibration, engineering, oil and gas, storage tanks" />
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="shortcut icon" href="<?php echo Yii::$app->getHomeUrl(); ?>/favicon.ico"
        <?= Html::csrfMetaTags() ?>
        <?php $this->title = 'Techno-Excel Engineering'; ?>
              <title><?= Html::encode($this->title) ?></title>
              <?php $this->head() ?>
    </head>

    <body style="background-color: #F0F0F0">
        <?php $this->beginBody() ?>

        <header id="header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-4">
                            <div class="top-number"><p><i class="fa fa-phone-square"></i> <a style="color: #FFF" href="<?= Yii::$app->request->baseUrl ?>/home/contact">Phone</a></p></div>
                        </div>
                        <div class="col-sm-6 col-xs-8">
                            <div class="social">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="search">
                                    <form role="form">
                                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                        <i class="fa fa-search"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->

            

        </header><!--/header-->


        <div>
            <?= $content ?>
        </div>
        <div class="footer" style="background-color: black; color: white; text-align: center">
            &copy; <?= date('Y') ?> Techno-Excel Engineering and Inspection Services. All Rights Reserved.   
        </div>

        <?php $this->endBody() ?>

    </body>

</html>
<?php $this->endPage() ?>
