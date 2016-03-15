<?php

namespace app\controllers;

use app\models\ArticleTag;
use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'delete', 'update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ]);
    }

    /**
     * Lists all Article models.
     *
     * @param null $tag
     *
     * @return mixed
     *
     */
    public function actionIndex($tag = null)
    {
        $this->layout = 'blog';
        $request = ['ArticleSearch'];

        if (is_null($tag) && $q = Yii::$app->request->get('q')) {
            $request['ArticleSearch']['text'] = $q;
        } else if($tag) {
            $request['ArticleSearch']['art_tags'][] = $tag;
        }


        $smArticle = new ArticleSearch();
        $dpArticle = $smArticle->search($request);

        return $this->render('index', [
            'dpArticle' => $dpArticle,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id, $key)
    {
        $this->layout = 'blog';

        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
   }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws Exception
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $tags = Yii::$app->request->post('Article')['art_tags'];
            if (!is_array($tags)) throw new Exception('Alarm!');
            foreach($tags as $tag) {
                $obj = new ArticleTag;
                $obj->tag_id = $tag;
                $model->link('articleTags', $obj);
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'key' => $model->key]);
        } else {
            $model->art_tags = $model->getTags()->select('id')->asArray()->column();
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
