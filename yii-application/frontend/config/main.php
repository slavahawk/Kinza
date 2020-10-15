<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => false,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'contacts' => 'site/contact',
                'menu' => 'menu/index',
                'cart' => 'cart/index',
                'menu/category/<categoryId:\d+>' => 'menu/category',
                'menu/product/<productId:\d+>' => 'menu/product',
                'cart/order' => 'cart/order',
            ],
        ],
    ],
    'params' => $params,
    'aliases' => [
        '@imgBackEnd' => '/kinza/yii-application/frontend/web/img',
        '@imgFrontEnd' => '/img',
        '@deliveryFrom' => '10:00',
        '@deliveryTo' => '22:00',
        '@phone' => '288-45-05',
        '@workFrom' => '10:00',
        '@workTo' => '24:00',
    ],
];
