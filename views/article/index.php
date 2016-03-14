<?php

    use yii\helpers\Html;
    use yii\widgets\ListView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\ArticleSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Блог';
?>
<div class="article-list">
    <?php if (!Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Добавить тег', ['/tag'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif ?>
    <?= ListView::widget([
        'dataProvider' => $dpArticle,
        'summary'      => false,
        'itemOptions'  => ['class' => 'item item-article'],
        'itemView'     => '_list_item',
    ]) ?>
</div>