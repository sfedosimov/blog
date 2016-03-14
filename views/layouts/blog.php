<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\bootstrap\Html;

    $this->registerJs("hljs.initHighlightingOnLoad();", \yii\web\View::POS_END, 'init-highlight');
?>

<?php $this->beginContent('@app/views/layouts/main.php'); ?>
<div class="container-fluid">
        <div class="column-left col-xs-12 col-md-8">
            <?= $content ?>
        </div>
        <div class="column-right col-xs-12 col-md-4">
            <?php
                $m = \app\models\ArticleSearch::getModelWithLoad();
                echo $this->render('/article/_search', ['model' => $m]);
            ?>
            <h4 class="color-green">Теги:</h4>
            <?= yii\widgets\ListView::widget([
                'dataProvider' => \app\models\Tag::getADP(),
                'layout' => '<ul class="menu-tags">{items}</ul>',
                'summary'      => false,
                'itemOptions'  => ['tag' => 'li',],
                'itemView'     => function ($model, $key, $index, $widget) {
                    $count = \app\models\ArticleTag::find()->where(['tag_id' => $model->id])->count();
                    return Html::a(Html::encode($model->name),
                        ['index', 'search_type' => 'tag', 'str' => $model->key]) . ' <span class="color-grey">(' . $count . ')</span>';
                },
            ]) ?>
        </div>
</div>

<?php $this->endContent(); ?>
