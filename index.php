<?php
session_start();
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require __DIR__ . '/yii-application/vendor/autoload.php';
require __DIR__ . '/yii-application/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/yii-application/common/config/bootstrap.php';
require __DIR__ . '/yii-application/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/yii-application/common/config/main.php',
    require __DIR__ . '/yii-application/common/config/main-local.php',
    require __DIR__ . '/yii-application/frontend/config/main.php',
    require __DIR__ . '/yii-application/frontend/config/main-local.php'
);

(new yii\web\Application($config))->run();
