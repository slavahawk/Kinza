<?php


namespace frontend\assets;


use yii\web\AssetBundle;

/**
 * Class MainAsset
 * @package frontend\assets
 */
class MainAsset extends AssetBundle
{

    public $css = [
        'css/libs/jquery.fancybox.min.css',
        'css/style.min.css',
    ];

    public $js = [
        'js/libs/lozad.min.js',
        'js/libs/jquery-ui.min.js',
        'js/libs/jquery.fancybox.min.js',
        
        'js/script.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}