<?php
    namespace app\controllers;

    use \yii\web\Controller;

    class SiteController extends Controller
    {
        public function actionIndex()
        {
            return $this->render('index');
        }

        public function actionAbout()
        {
            return $this->render('about');
        }

        public function actionPortfolio()
        {
            return $this->render('portfolio');
        }
    }