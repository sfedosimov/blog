<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\bootstrap\Html;

    $this->registerCssFile(Yii::getAlias('@web/css/blog.css'), ['depends' => ['app\assets\AppAsset']]);
    $this->registerJs("hljs.initHighlightingOnLoad();", \yii\web\View::POS_END, 'init-highlight');
?>

<?php $this->beginContent('@app/views/layouts/main.php'); ?>
    <div class="column-left col-xs-12 col-md-8">
        <?= $content ?>
    </div>
    <div class="column-right col-xs-12 col-md-4">
        <?php
            $m = \app\models\ArticleSearch::getModelWithLoad();
            echo $this->render('/article/_search', ['model' => $m]);
        ?>
        <h3>Теги:</h3>
        <?= yii\widgets\ListView::widget([
            'dataProvider' => \app\models\Tag::getADP(),
            'layout' => '<ul class="menu-tags">{items}</ul>',
            'summary'      => false,
            'itemOptions'  => ['tag' => 'li',],
            'itemView'     => function ($model, $key, $index, $widget) {
                $count = \app\models\ArticleTag::find()->where(['tag_id' => $model->id])->count();
                return Html::a(Html::encode($model->name),
                    ['index', 'tag' => $model->key]) . ' <span class="color-grey">(' . $count . ')</span>';
            },
        ]) ?>
    </div>

<?php $this->endContent(); ?>
