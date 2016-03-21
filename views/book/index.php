<?php

    use yii\helpers\Html;
    use yii\widgets\ListView;

    /* @var $this yii\web\View */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Книги | ' . \Yii::$app->name;
    $this->registerMetaTag([
        'name' => 'description',
        'content' => 'Список книг из моей колекции, советую почитать'
    ]);
    $this->registerCssFile(\Yii::getAlias('@web/css/books.css'), ['depends' => ['app\assets\AppAsset']]);
?>
<div class="books-list">
    <?php if (!Yii::$app->user->isGuest): ?>
        <p>
            <?= Html::a('Добавить книгу', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'itemOptions'  => ['class' => 'item'],
        'itemView'     => function ($model, $key, $index, $widget) {
            return $this->render('_view', ['model' => $model, 'index' => $index]);
        },
    ]) ?>

</div>
