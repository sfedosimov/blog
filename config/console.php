<?php
    return [
        'id'            => 'blog-console',
        'basePath'      => dirname(__DIR__),
        'controllerMap' => [
            'migrate' => [
                'class'          => 'yii\console\controllers\MigrateController',
                'migrationTable' => 'blog_migration',
            ],
        ],
        'components'    => [
            'db'          => require(__DIR__ . '/db.php'),
        ]
    ];