<?php
    return [
        'id'         => 'blog',
        'basePath'   => realpath(__DIR__ . '/../'),
        'language' => 'ru-RU',
        'sourceLanguage' => 'en-US',
        'bootstrap'  => ['log'],
        'modules'    => [
            'gii' => [
                'class'      => 'yii\gii\Module',
                'allowedIPs' => ['*']
            ]
        ],
        'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
        'components' => [
            'request'    => [
                'cookieValidationKey' => 'Itl635iCHuw0BbESIUywVdCWFoIPY4Tz',
            ],
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName'  => false,
                'suffix'          => '/',
                'rules' => [
                    'login'                   => 'site/login',
                    'blog/<id:\d+>/<key:[\w\-]+>' => 'article/view',
                    'blog/<tag:[\w\-]+>'          => 'article/index',
                    'blog'                    => 'article/index',
                    'about'                   => 'site/about',
                    'portfolio'               => 'site/portfolio',
                    'books'                   => 'site/books',
                    'upload'                   => 'upload/index',
                    'article/<id:\d+>'        => 'article/view',
                ],
            ],
            'user' => [
                'identityClass' => 'app\models\User',
                'enableAutoLogin' => true,
            ],
            'log'        => [
                'traceLevel' => YII_DEBUG ? 3 : 0,
                'targets'    => [
                    [
                        'class'  => 'yii\log\FileTarget',
                        'levels' => ['error', 'warning'],
                    ],
                ],
            ],
            'db'         => require(__DIR__ . '/db.php'),
            'formatter' => [
                'dateFormat' => 'php:d F Y',
                'decimalSeparator' => '.',
                'thousandSeparator' => ' ',
                'currencyCode' => 'RUB',
            ],
        ],
        'params' => [
            'users' => require(__DIR__ . '/users.php'),
        ]
    ];