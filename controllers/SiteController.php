<?php
    namespace app\controllers;

    use yii\helpers\Url;
    use \yii\web\Controller;

    class SiteController extends Controller
    {
        public function actionIndex()
        {
            return $this->redirect('blog/');
        }

        public function actionAbout()
        {
            return $this->render('about');
        }

        public function actionPortfolio()
        {
            return $this->render('portfolio');
        }

        public function actionBooks()
        {
            return $this->render('books');
        }
    }