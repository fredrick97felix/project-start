<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/loginly.css',
        //<!-- Bootstrap CSS -->
  'css/bootstrap.min.css',  
 // <!-- bootstrap theme -->
  'css/bootstrap-theme.css',  
  //<!--external css-->
 // <!-- font icon -->
  'css/elegant-icons-style.css', 
  'css/font-awesome.min.css', 
  //<!-- full calendar css-->
  'assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css', 
  'assets/fullcalendar/fullcalendar/fullcalendar.css', 
 // <!-- easy pie chart-->
  'assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css',
  //<!-- owl carousel -->
  'css/owl.carousel.css',
  'css/jquery-jvectormap-1.2.2.css',  
  //<!-- Custom styles -->
  'css/fullcalendar.css',
  'css/widgets.css',  
  'css/style.css',  
  'css/style-responsive.css', 
  'css/xcharts.min.css',
  'css/jquery-ui-1.10.4.min.css',     ];
  
    public $js = [
    
  'js/jquery.js',
  'js/jquery-ui-1.10.4.min.js',
  'js/jquery-1.8.3.min.js',
  'js/jquery-ui-1.9.2.custom.min.js',
  //<!-- bootstrap -->
  'js/bootstrap.min.js',
  //<!-- nice scroll -->
  'js/jquery.scrollTo.min.js',
  'js/jquery.nicescroll.js',
  //<!-- charts scripts -->
  'assets/jquery-knob/js/jquery.knob.js',
  'js/jquery.sparkline.js',
  'assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js',
  'js/owl.carousel.js',
  //<!-- jQuery full calendar -->
  'js/fullcalendar.min.js',
    //<!-- Full Google Calendar - Calendar -->
    'assets/fullcalendar/fullcalendar/fullcalendar.js',
    //<!--script for this page only-->
    'js/calendar-custom.js',
    'js/jquery.rateit.min.js',
    //<!-- custom select -->
    'js/jquery.customSelect.min.js',
    'assets/chart-master/Chart.js',

    //<!--custome script for all page-->
    'js/scripts.js',
   // <!-- custom script for this page-->
    'js/sparkline-chart.js',
    'js/easy-pie-chart.js',
    'js/jquery-jvectormap-1.2.2.min.js',
    'js/jquery-jvectormap-world-mill-en.js',
    'js/xcharts.min.js',
    'js/jquery.autosize.min.js',
    'js/jquery.placeholder.min.js',
    'js/gdp-data.js',
    'js/morris.min.js',
    'js/sparklines.js',
    'js/charts.js',
    'js/jquery.slimscroll.min.js',
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
