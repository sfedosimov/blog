<?php
    return [
        'id'         => 'blog',
        'basePath'   => realpath(__DIR__ . '/../'),
        'defaultRoute' => 'article/index',
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
                    'blog'             => 'article/index',
                    'about'            => 'site/about',
                    'portfolio'        => 'site/portfolio',
                    'books'            => 'site/books',
                    'article/<id:\d+>' => 'article/view',
                ],
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
        ],
    ];