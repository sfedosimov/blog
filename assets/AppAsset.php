<?php
    /**
     * @link http://www.yiiframework.com/
     * @copyright Copyright (c) 2008 Yii Software LLC
     * @license http://www.yiiframework.com/license/
     */
    namespace app\assets;
    use yii\web\AssetBundle;
    /**
     * @author Qiang Xue <qiang.xue@gmail.com>
     * @since 2.0
     */
    class AppAsset extends AssetBundle
    {
        public $basePath = '@webroot';
        public $baseUrl = '@web';

        public $css = [
            'css/site.css',
            'css/navbar.css',
            'css/paginator.css',
            'css/font-awesome.min.css',
            'css/tomorrow.css'
        ];
        public $js = [
            'js/highlight.pack.js',
            'js/html5.js', // TODO: only lt ie9
            'js/respond.js', // TODO: only lt ie9
        ];
        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];
    }