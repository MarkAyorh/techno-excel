<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',        
        
        'theme/css/font-awesome.min.css',
        'theme/css/animate.min.css',
        'theme/css/prettyPhoto.css',
        'theme/css/main.css',
        'theme/css/bootstrap.min.css',
        'theme/css/responsive.css',
    ];
    public $js = [
        'theme/js/jquery.js',
        'theme/js/bootstrap.min.js',
        'theme/js/jquery.prettyPhoto.js',
        'theme/js/jquery.isotope.min.js',
        'theme/js/main.js',
        'theme/js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
