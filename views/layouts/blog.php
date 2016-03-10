<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\bootstrap\Html;

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
            <ul style="list-style-type: circle; padding-left: 30px;">
                <?= yii\widgets\ListView::widget([
                    'dataProvider' => \app\models\Tag::getADP(),
                    'summary'      => false,
                    'itemOptions'  => ['class' => 'item'],
                    'itemView'     => function ($model, $key, $index, $widget) {
                        $count = \app\models\ArticleTag::find()->where(['tag_id' => $model->id])->count();
                        return '<li>' . Html::a(Html::encode($model->name) . ' <span class="badge">' . $count,
                            ['index', 'ArticleSearch[art_tags][]' => $model->id]) . '</li>';
                    },
                ]) ?>
            </ul>
        </div>
</div>

<?php $this->endContent(); ?>
