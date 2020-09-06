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
        'css/style.min.css',
    ];

    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',
        'js/script.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}