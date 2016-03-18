<?php
    namespace app\controllers;

    use app\models\LoginForm;
    use yii\filters\AccessControl;
    use yii\filters\VerbFilter;
    use Yii;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;

    class SiteController extends Controller
    {

        public function behaviors()
        {
            return ArrayHelper::merge(parent::behaviors(), [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['logout'],
                    'rules' => [
                        [
                            'actions' => ['logout'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ]);
        }

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

        public function actionLogin()
        {
            if (!Yii::$app->user->isGuest) {
                return $this->goHome();
            }
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            }
            return $this->render('login', [
                'model' => $model,
            ]);
        }
        public function actionLogout()
        {
            Yii::$app->user->logout();
            return $this->goHome();
        }
    }