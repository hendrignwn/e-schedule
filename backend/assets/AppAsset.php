<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
	public $sourcePath = '@bower/theme-flat/';
    public $css = [
        'css/bootstrap.min.css',
		'css/plugins/jquery-ui/smoothness/jquery-ui.css',
		'css/plugins/jquery-ui/smoothness/jquery.ui.theme.css',
		'css/plugins/pageguide/pageguide.css',
		'css/plugins/datepicker/datepicker.css',
		'css/plugins/datetimepicker/bootstrap-datetimepicker.css',
		'css/style.css',
		'css/themes.css',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
    ];
    public $js = [
		'js/plugins/nicescroll/jquery.nicescroll.min.js',
		'js/plugins/jquery-ui/jquery.ui.core.min.js',
		'js/plugins/jquery-ui/jquery.ui.widget.min.js',
		'js/plugins/jquery-ui/jquery.ui.mouse.min.js',
		'js/plugins/jquery-ui/jquery.ui.draggable.min.js',
		'js/plugins/jquery-ui/jquery.ui.resizable.min.js',
		'js/plugins/jquery-ui/jquery.ui.sortable.min.js',
		'js/plugins/touch-punch/jquery.touch-punch.min.js',
		'js/plugins/slimscroll/jquery.slimscroll.min.js',
		'js/bootstrap.min.js',
		'js/plugins/vmap/jquery.vmap.min.js',
		'js/plugins/vmap/jquery.vmap.world.js',
		'js/plugins/vmap/jquery.vmap.sampledata.js',
		'js/plugins/bootbox/jquery.bootbox.js',
		'js/plugins/flot/jquery.flot.min.js',
		'js/plugins/flot/jquery.flot.bar.order.min.js',
		'js/plugins/flot/jquery.flot.pie.min.js',
		'js/plugins/flot/jquery.flot.resize.min.js',
		'js/plugins/imagesLoaded/jquery.imagesloaded.min.js',
		'js/plugins/pageguide/jquery.pageguide.js',
		'js/plugins/icheck/jquery.icheck.min.js',
		'js/eakroko.min.js',
		'js/application.min.js',
		'js/demonstration.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}