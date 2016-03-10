<?php

    use yii\helpers\Html;
    use yii\widgets\ListView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\ArticleSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Блог';
?>

<div class="container-fluid">
    <div class="row">
        <p><?php echo $this->render('_search', ['model' => $smArticle]); ?></p>
    </div>
    <div class="row">
        <p>
            <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="row">
        <div class="column-left col-xs-12 col-md-8">
            <?= ListView::widget([
                'dataProvider' => $dpArticle,
                'summary'      => false,
                'itemOptions'  => ['class' => 'item'],
                'itemView'     => '_list_item',
            ]) ?>
        </div>
        <div class="column-right col-xs-6 col-md-4">
            <h4 class="color-green">Теги:</h4>
            <ul style="list-style-type: circle; padding-left: 30px;">
                <?= ListView::widget([
                    'dataProvider' => $dpTag,
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
</div>

<div class="article-index">


</div>
