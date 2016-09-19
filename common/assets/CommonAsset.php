<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CommonAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    public $sourcePath = '@common/resource';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'jquery-easyui-1.5/themes/bootstrap/easyui.css',
        'jquery-easyui-1.5/themes/color.css',
        'jquery-easyui-1.5/themes/icon.css',
        
    ];
    public $js = [
        //'jquery-easyui-1.5/jquery.min.js',//yii\web\YiiAsset 中有
        'jquery-easyui-1.5/jquery.easyui.min.js',
        'jquery-easyui-1.5/easyloader.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
